#!C:\Users\ericshim\AppData\Local\Programs\Python\Python38\python.exe

import cgi,os

form = cgi.FieldStorage()

pageId = form["pageId"].value

os.remove('data/'+pageId)

#redirection
print("location: index.py")
print()
