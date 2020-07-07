#!C:\Users\ericshim\AppData\Local\Programs\Python\Python38\python.exe
print("Content-Type: text/html")
print()
import cgi
import os
import view

form = cgi.FieldStorage()
if 'id' in form:
    pageId = form['id'].value
    description=open('data/'+pageId,'r').read()
    description=description.replace('<','&lt;')
    description=description.replace('<','&gt;')

    update_link='<a href="update.py?id={}">update</a>'.format(pageId)
    delete_action='''
        <form action="process_delete.py" method="post">
        <input type="hidden" name="pageId" value="{}">
        <input type="submit" value="delete">
        '''.format(pageId)

else:
    pageId="welcome"
    description='hello wiz*one'
    update_link=''
    delete_action=''

print('''<!DOCTYPE html>
<html>
  <head>
    <meta charset="EUC-KR">
    <title>izone</title>
  </head>
  <body>
<h1>    IZONE 멤버 별 정보 등록 PAGE  </h1>
<h4>아이즈원 갤러리로 이동하려면 <a href="http://127.0.0.1/WEB1/1.HTML">여기</a>를 눌러주세요.</h4>
    <ol>
<strong>{listStr}</strong>
    </ol>
<br><br><br>
<a href="create.py">create</a>
<a href="index.py">home</a>
{update_link}
{delete_action}

<br><br>
<h2>{title}</h2>
<p>{desc}</p>
  </body>
</html>




'''.format(title=pageId, desc=description,listStr=view.getlist(),
update_link=update_link,delete_action=delete_action))
