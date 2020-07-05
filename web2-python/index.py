#!C:\Users\ericshim\AppData\Local\Programs\Python\Python38\python.exe
print("Content-Type: text/html")
print()
import cgi
form = cgi.FieldStorage()
if 'id' in form:
    pageId = form['id'].value
    description=open(pageId,'r').read()
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
      <li><a href="index.py?id=count_1">count_1</a></li>
      <li><a href="index.py?id=count_2">count_2</a></li>
      <li><a href="index.py?id=count_3">count_3</a></li>
         </ol>
<h2>{title}</h2>
<p>{desc}</p>
  </body>
</html>




'''.format(title=pageId, desc=description))
