from fastapi import FastAPI, Path
from fastapi.middleware.cors import CORSMiddleware
from typing import Optional
from pydantic import BaseModel
import pymongo
import hashlib
import uvicorn
from dotenv import load_dotenv
import os
import json
import time
import random


load_dotenv()

mongo_key = os.getenv("MONGO_PASS")
# connection_string = "mongodb://localhost:27017"  # local

# mongo db cloud
connection_string = f'mongodb+srv://hafidz_erdityo:{mongo_key}@cluster0.uorwk7c.mongodb.net/?retryWrites=true&w=majority'
client = pymongo.MongoClient(connection_string)

print(client)

app = FastAPI()
origins = ["*"]

app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)


class RegData(BaseModel):
    name: str
    username: str
    password: str
    role: str
    divisi: str


class LoginData(BaseModel):
    username: str
    password: str


class LoginDataJaskug(BaseModel):
    email: str
    password: str


class FormData(BaseModel):
    username: str
    name: str
    divisi: str
    manajer: Optional[str]
    kategori: str
    aktivitas: str
    due: dict
    bsu: dict


class CheckID(BaseModel):
    username: str


def encryption(user_pass):
    return hashlib.sha512(user_pass.encode()).hexdigest()


def find_data(p_username):
    query = {
        'username': p_username
    }
    return client['pos_cp']['login_data'].find_one(query, {'_id': False})


def find_data_pengajuan(p_username):
    query = {
        'username': p_username
    }
    return client['pos_cp']['client_pengajuan'].find_one(query, {'_id': False})


def find_data_pengajuan_all(p_username):
    query = {
        'username': p_username
    }
    return client['pos_cp']['client_pengajuan'].find(query, {'_id': False, 'username': 0})


def ingest_regist(p_data):
    client['pos_cp']['login_data'].insert_one(p_data)


def ingest_pengajuan(p_data):
    client['pos_cp']['client_pengajuan'].insert_one(p_data)


def penanganan(duit):
    if duit >= 0 and duit <= 100000000:
        return random.choice(['pembelian_langsung_skema_terbatas', 'pembelian_langsung'])
    else:
        return random.choice(['pemilihan_langsung', 'lelang_terbatas', 'lelang_terbuka'])


list_divisi = {
    'DEVOPS': 'DEV',
    'ITAIS': 'ITA',
    'AO': 'AO',
    'ITSG': 'ITG'
}


@app.get("/")
def home():
    return {"message": "API CP Kelompok 3 Ravenclaw test 10"}


@app.get("/test")
def home():
    return {"message": 'This is encrypted lagi: ' + encryption('whats_after_like')}


@app.post('/CRUD/reg')
def fcreate_item(item: RegData):
    if find_data(item.username):
        return {'registration_status': 'failed', 'msg': 'username already registered'}
    else:
        conv = {'name': item.name, 'username': item.username, 'password': encryption(
            item.password), 'role': item.role, 'divisi': item.divisi}
        ingest_regist(conv)
        return {'registration_status': 'success'}


@app.post('/CRUD/login')
def flogin_item(item: LoginData):
    doc_item = find_data(item.username)
    print(doc_item)
    if doc_item:
        if doc_item['password'] == encryption(item.password):
            del doc_item['password']
            return {'login_status': 'success', 'data': doc_item}
        else:
            return {'login_status': 'failed', 'msg': 'wrong password'}
    else:
        return {'login_status': 'failed', 'msg': 'wrong username'}


@app.post('/CRUD/client/form-pengajuan')
def fcreate_item(item: FormData):
    data = json.loads(item.json())
    check_data = list(
        client['pos_cp']['client_pengajuan'].find({}, {'_id': False}))
    status = True
    for i in check_data:
        i.pop('order_id')
        i.pop('status')
        if data == i:
            status = False
            break
    if status:
        t = str(time.time())
        idku = f"{list_divisi[data['divisi']]}-{t.split('.')[0]}"
        datas = list(data.items())
        datas.insert(0, ('order_id', idku))
        datas.insert(7, ('status', 'PENDING'))
        out = dict(datas)
        out['metode_pengadaan'] = penanganan(out['bsu']['bsu_fix'])
        ingest_pengajuan(out)
        return {'status': 'success'}
    else:
        return {'status': 'failed', 'msg': 'duplicate'}


@app.post('/CRUD/client/lihat-data-pengajuan')
def fcreate_item(item: CheckID):
    data = json.loads(item.json())
    list_view = list(find_data_pengajuan_all(data['username']))
    return list_view


@app.get('/CRUD/admin/lihat-data-pengajuan')
def fcreate_item():
    return list(client['pos_cp']['client_pengajuan'].find({}, {'_id': 0}))


@app.post('/Jaskug/CRUD/login')
def flogin_item_jaskug(item: LoginDataJaskug):
    doc_item = find_data(item.username)
    print(doc_item)
    if doc_item:
        if doc_item['password'] == encryption(item.password):
            del doc_item['password']
            return {'login_status': 'success', 'data': doc_item}
        else:
            return {'login_status': 'failed', 'msg': 'wrong password'}
    else:
        return {'login_status': 'failed', 'msg': 'wrong username'}
