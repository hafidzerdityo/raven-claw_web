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


class RegDataUpdate(BaseModel):
    name: str
    username: str
    role: str
    divisi: str


class RegDataJaskug(BaseModel):
    fullName: str
    username: str
    password: str
    unit: str
    role: str


class LoginData(BaseModel):
    username: str
    password: str


class LoginDataJaskug(BaseModel):
    username: str
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
    mitra: Optional[str]
    metode_pengadaan: str


class FormDataUpdate(BaseModel):
    order_id: str
    name: str
    divisi: str
    manajer: Optional[str]
    kategori: str
    aktivitas: str
    due: dict
    bsu: dict
    mitra: Optional[str]
    metode_pengadaan: str
    status: str


class CheckID(BaseModel):
    username: str


class CheckOrderID(BaseModel):
    order_id: str


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


def find_data_pengajuan_order(p_orderid):
    query = {
        'order_id': p_orderid
    }
    return client['pos_cp']['client_pengajuan'].find(query, {'_id': False, 'username': 0})


def find_data_client(p_username):
    query = {
        'username': p_username
    }
    return client['pos_cp']['login_data'].find(query, {'_id': False})


def ingest_regist(p_data):
    client['pos_cp']['login_data'].insert_one(p_data)


def ingest_pengajuan(p_data):
    client['pos_cp']['client_pengajuan'].insert_one(p_data)


def update_data_pengajuan_order(p_orderid, update_json):
    # get_id_bson = ObjectId('63251d279a1e1373f9cb7052')
    update_json.pop('order_id')
    update_query = {
        # set a new field and new value
        "$set": update_json,
    }

    client['pos_cp']['client_pengajuan'].update_one(
        {"order_id": p_orderid}, update_query)


def update_data_client(p_username, update_json):
    update_json.pop('username')
    update_query = {
        # set a new field and new value
        "$set": update_json,
    }

    client['pos_cp']['login_data'].update_one(
        {"username": p_username}, update_query)


def delete_pengajuan(p_orderid):
    client['pos_cp']['client_pengajuan'].delete_one(
        filter={"order_id": p_orderid})


def delete_client(p_username):
    client['pos_cp']['login_data'].delete_one(
        filter={"username": p_username})

# def penanganan(duit):
#     if duit >= 0 and duit <= 100000000:
#         return random.choice(['pembelian_langsung_skema_terbatas', 'pembelian_langsung'])
#     else:
#         return random.choice(['pemilihan_langsung', 'lelang_terbatas', 'lelang_terbuka'])


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
        try:
            idku = f"{list_divisi[data['divisi']]}-{t.split('.')[0]}"
        except:
            idku = f"NONIT-{t.split('.')[0]}"
        datas = list(data.items())
        datas.insert(0, ('order_id', idku))
        datas.insert(7, ('status', 'REQUESTED'))
        out = dict(datas)
        ingest_pengajuan(out)
        return {'status': 'success'}
    else:
        return {'status': 'failed', 'msg': 'duplicate'}


@app.post('/CRUD/client/lihat-data-pengajuan')
def fcreate_item(item: CheckID):
    data = json.loads(item.json())
    list_view = list(find_data_pengajuan_all(data['username']))
    return list_view


@app.post('/CRUD/client/view_detail')
def fcreate_item(item: CheckOrderID):
    data = json.loads(item.json())
    list_view = list(find_data_pengajuan_order(data['order_id']))
    return list_view


@app.post('/CRUD/client/update_detail')
def fcreate_item(item: FormDataUpdate):
    data = json.loads(item.json())
    list_view = update_data_pengajuan_order(data['order_id'], data)
    return {'status': 'update success'}


@app.post('/CRUD/admin/update_detail_client')
def fcreate_item(item: RegDataUpdate):
    data = json.loads(item.json())
    list_view = update_data_client(data['username'], data)
    return {'status': 'update success'}


@app.post('/CRUD/admin/delete-pengajuan')
def fcreate_item(item: CheckOrderID):
    data = json.loads(item.json())
    list_view = delete_pengajuan(data['order_id'])
    return {'status': 'delete success'}


@app.post('/CRUD/admin/view_detail_client')
def fcreate_item(item: CheckID):
    data = json.loads(item.json())
    list_view = list(find_data_client(data['username']))
    return {'status': 'client detail success', 'data': list_view}


@app.post('/CRUD/admin/delete-client')
def fcreate_item(item: CheckID):
    data = json.loads(item.json())
    list_view = delete_client(data['username'])
    return {'status': 'delete success'}


@app.get('/CRUD/admin/lihat-data-pengajuan')
def fcreate_item():
    return list(client['pos_cp']['client_pengajuan'].find({}, {'_id': 0}))


@app.get('/model/sen-model')
def fcreate_item():
    return list(client['social_media']['twitter_old'].find({}))


@app.get('/CRUD/admin/lihat-user')
def fcreate_item():
    return list(client['pos_cp']['login_data'].find({}, {'_id': 0}))

#####################################################################################################################


def find_data_jaskug(p_username):
    query = {
        'username': p_username
    }
    return client['jaskug_data']['login_data'].find_one(query, {'_id': False})


def ingest_regist_jaskug(p_data):
    client['jaskug_data']['login_data'].insert_one(p_data)


@app.post('/Jaskug/CRUD/reg')
def fcreate_item(item: RegDataJaskug):
    if find_data_jaskug(item.username):
        return {'registration_status': 'failed', 'msg': 'username already registered'}
    else:
        conv = {'fullName': item.fullName, 'username': item.username, 'password': encryption(
            item.password), 'unit': item.unit, 'role': item.role}
        ingest_regist_jaskug(conv)
        return {'registration_status': 'success'}


@app.post('/Jaskug/CRUD/login')
def flogin_item_jaskug(item: LoginDataJaskug):
    doc_item = find_data_jaskug(item.username)
    print(doc_item)
    if doc_item:
        if doc_item['password'] == encryption(item.password):
            del doc_item['password']
            return {'login_status': 'success', 'data': doc_item}
        else:
            return {'login_status': 'failed', 'msg': 'wrong password'}
    else:
        return {'login_status': 'failed', 'msg': 'wrong username'}
