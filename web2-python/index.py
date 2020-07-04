#!C:\Users\ericshim\AppData\Local\Programs\Python\Python38\python.exe
print("Content-Type: text/html")
print()
import cgi
form = cgi.FieldStorage()
pageId = form['id'].value
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
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
</html>




'''.format(title=pageId))
