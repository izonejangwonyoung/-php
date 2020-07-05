#!C:\Users\ericshim\AppData\Local\Programs\Python\Python38\python.exe
print("Content-Type: text/html")
print()
import cgi, os

files = os.listdir('data')
# print(files)
listStr=''
for item in files:
    listStr = listStr +  '<li><a href="index.py?id={name}">{name}</a></li>'.format(name=item)


form = cgi.FieldStorage()
if 'id' in form:
    pageId = form['id'].value
    description=open('data/'+pageId,'r').read()
    update_link='<a href="update.py?id={}">update</a>'.format(pageId)


else:
    pageId="welcome"
    description='hello wiz*one'
    update_link=''


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

<a href="create.py">create</a>

{update_link}

<h2>{title}</h2>
<p>{desc}</p>
  </body>
</html>




'''.format(title=pageId, desc=description,listStr=listStr,update_link=update_link))
