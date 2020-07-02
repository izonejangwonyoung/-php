<?php
$conn=mysqli_connect(
'localhost',
'root',
'wh001500',
'izone');

$sql = " select * from izone_information limit 100";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
echo "$row[0]";






 ?>
