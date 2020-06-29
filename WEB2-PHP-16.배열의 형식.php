<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>array</title>
  </head>
  <body>
<h1>Array</h1>
<?php

$izone_member=array('김채원','장원영','히토미','김민주','나코');
array_push($izone_member,'사쿠라');
var_dump($izone_member);


echo $izone_member[0]; '<br>';
echo $izone_member[3]; '<br>';
var_dump(count($izone_member));



   ?>
    </body>
</html>
