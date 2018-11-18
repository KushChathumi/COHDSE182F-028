import pymongo
client=pymongo.MongoClient("")
db=client["LOGIN"]
collection=db["user"]
user=input ("User Name : ")
pw=input ("Password : ")

for a in collection.find({},{"user_name":1,"password":1}):
    name= str(a["user_name"])
    password=str(a["password"])

if user==name and pw==password:
    print("Login Successfully ")

else:
    print("Login failed")
