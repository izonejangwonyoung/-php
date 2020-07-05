#!C:\Users\ericshim\AppData\Local\Programs\Python\Python38\python.exe
print("Content-Type: text/html")
print()
import cgi, os

files = os.listdir('data')
# print(files)
listStr=''
for item in files:
    listStr = listStr +  '<li><a href="index.py?id={name}">{name}</a></li>'.format(name=item)
print(listStr)

form = cgi.FieldStorage()
if 'id' in form:
    pageId = form['id'].value
    description=open('data/'+pageId,'r').read()
else:
    pageId="welcome"
    description='hello wiz*one'


print('''<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>izone</title>
  </head>
  <body>
    <h1><a href="index.html">IZONE</a></h1>
    <ol>

              </ol>
<h2>{title}</h2>
<p>{desc}</p>
  </body>
</html>




'''.format(title=pageId, desc=description,listStr=listStr))
