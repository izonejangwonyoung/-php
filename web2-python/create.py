#!C:\Users\ericshim\AppData\Local\Programs\Python\Python38\python.exe
print("Content-Type: text/html")
print()
import cgi, os,view






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
    <meta charset="EUC-KR">
    <title>izone</title>
  </head>
  <body>
    <h1>         <a href="index.py">IZONE</a>         </h1>
    <ol>
{listStr}
    </ol>

<form action  ="process_create.py" method="post">

<a href="create.py">create</a>
<p><input type="text" name="title" placeholder="title"></p>
<p><textarea rows="5" name="description" placeholder="description" ></textarea></p>
<p><input type="submit"></p>

</form>

<h2>{title}</h2>
<p>{desc}</p>
  </body>
</html>




'''.format(title=pageId, desc=description,listStr=view.getlist()))
