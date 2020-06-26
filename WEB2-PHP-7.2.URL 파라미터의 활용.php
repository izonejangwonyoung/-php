<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>IZONE</h1>
    <ol>
      <li><a href="WEB2-PHP-7.2.URL 파라미터의 활용.php?id=장원영.txt">장원영</a></li>
      <li><a href="WEB2-PHP-7.2.URL 파라미터의 활용.php?id=김채원.txt">김채원</a></li>
      <li><a href="WEB2-PHP-7.2.URL 파라미터의 활용.php?id=혼다 히토미.txt">혼다 히토미</a></li>
    </ol>

    <h2>
    <?php
    echo $_GET["id"];



     ?>
    <h2>

       <?php

       echo file_get_contents("data/".$_GET["id"]);
        ?>
        </h2>
  </body>
</html>
