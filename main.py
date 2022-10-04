from fastapi import FastAPI, Path
from fastapi.middleware.cors import CORSMiddleware
# from typing import Optional
# from pydantic import BaseModel
# import pymongo
# import hashlib
# import uvicorn
# from dotenv import load_dotenv
# import os


# load_dotenv()

# mongo_key = os.getenv("MONGO_PASS")
# # connection_string = "mongodb://localhost:27017"  # local

# # mongo db cloud
# connection_string = f'mongodb+srv://hafidz_erdityo:{mongo_key}@cluster0.uorwk7c.mongodb.net/?retryWrites=true&w=majority'
# client = pymongo.MongoClient(connection_string)

# print(client)

app = FastAPI()
origins = ["*"]

app.add_middleware(
    CORSMiddleware,
    allow_origins=origins,
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)


# class RegData(BaseModel):
#     user_name: str
#     password: str
#     role: str


# class LoginData(BaseModel):
#     user_name: str
#     password: str


# def encryption(user_pass):
#     return hashlib.sha512(user_pass.encode()).hexdigest()


# def find_data(p_username):
#     query = {
#         'user_name': p_username
#     }
#     return client['pos_cp']['login_data'].find_one(query)


# def ingest_regist(p_data):
#     client['pos_cp']['login_data'].insert_one(p_data)


@app.get("/")
def home():
    return {"message": "API CP Kelompok 3 Ravenclaw"}
