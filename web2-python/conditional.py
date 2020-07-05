id_user=input("ID:")
pwd_user=input("PWD:")


'''
if password_user == "1111":
    print("응 아니야")
else:
    print("ㅇㅋ")

'''

'''

if id_user=='2000shim':
    if pwd_user == "1111":
        print("hello admin")
else:
    print("no data in DB. please sign up.")
    
'''

if id_user == '2000shim' and pwd_user == "1111":
    print("hello admin")
elif id_user == '2000shim' and pwd_user == "1234":
    print("hello admin")

else:
    print("who are you?")

