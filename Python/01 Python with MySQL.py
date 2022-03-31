from fastapi import FastAPI
import mysql.connector

# How To Run
# uvicorn "01 Python with MySQL":app --port 8086  --reload

# API Client
# http://127.0.0.1:8086/docs

app=FastAPI()


mydb = mysql.connector.connect(
  host="localhost",
  port=3308,
  user="root",
  password="",
  database="user_datas"
)

@app.get("/")
async def root():
    return {"user":"Manoj M"}


@app.get("/users")
async def users():
    mycursor = mydb.cursor()
    mycursor.execute("SELECT * FROM users")
    myresult = mycursor.fetchall()
    if(len(myresult)>0):
        return {"data":myresult}
    else:
        return {"data":0,"message":"users not found"}


@app.get("/user/{id}")
async def byId(id):
    mycursor = mydb.cursor()
    Query="SELECT * FROM users where id="+id
    mycursor.execute(Query)
    myresult = mycursor.fetchone()
    if(len(myresult)>0):
        return {"data":myresult}
    else:
        return {"data":0,"message":"users not found"}

