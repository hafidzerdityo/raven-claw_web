from fastapi import FastAPI, Path
from fastapi.middleware.cors import CORSMiddleware
from typing import Optional
from pydantic import BaseModel
import pymongo
import hashlib
import uvicorn
from dotenv import load_dotenv
import os


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
    user_name: str
    password: str
    role: str


class LoginData(BaseModel):
    user_name: str
    password: str


def encryption(user_pass):
    return hashlib.sha512(user_pass.encode()).hexdigest()


def find_data(p_username):
    query = {
        'user_name': p_username
    }
    return client['pos_cp']['login_data'].find(query, {'_id': False})


def ingest_regist(p_data):
    client['pos_cp']['login_data'].insert_one(p_data)


@app.get("/")
def home():
    return {"message": "API CP Kelompok 3 Ravenclaw test 1"}


@app.get("/test")
def home():
    return {"message": 'This is encrypted lagi: ' + encryption('whats_after_like')}


@app.post('/CRUD/reg')
def fcreate_item(item: RegData):
    if find_data(item.user_name):
        return {'registration_status': 'failed', 'msg': 'user_name already registered'}
    else:
        conv = {'user_name': item.user_name, 'password': encryption(
            item.password), 'role': item.role}
        ingest_regist(conv)
        return {'registration_status': 'success'}


@app.post('/CRUD/login')
def flogin_item(item: LoginData):
    doc_item = find_data(item.user_name)
    if doc_item:
        if doc_item['password'] == encryption(item.password):
            return {'login_status': 'success'}
        else:
            return {'login_status': 'failed', 'msg': 'wrong password'}
    else:
        return {'login_status': 'failed', 'msg': 'wrong user_name'}
