#!C:\Users\ericshim\AppData\Local\Programs\Python\Python38\python.exe
print("Content-Type: text/html")
print()
import cgi, os

def getlist():
        files = os.listdir('data')
        # print(files)
        listStr=''
        for item in files:
            listStr = listStr +'<li><a href="index.py?id={name}">{name}</a></li>'.format(name=item)
        return listStr

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

<form action  ="process_update.py" method="post">

<input type="hidden" name="pageId" value= "{form_default_title}">
<a href="create.py">create</a>
    <p><input type="text" name="title" placeholder="title" value= "{form_default_title}"></p>
    <p><textarea rows="5" name="description" placeholder="description">{form_default_description}</textarea></p>
    <p><input type="submit"></p>

</form>

<h2>{title}</h2>
<p>{desc}</p>
  </body>
</html>




'''.format(title=pageId, desc=description,listStr=getlist(),form_default_title=pageId,form_default_description=description))
