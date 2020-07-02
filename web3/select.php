<?php
$conn=mysqli_connect(
'localhost',
'root',
'wh001500',
'izone');


$sql = " select * from izone_information";
$result=mysqli_query($conn,$sql);


while($row=mysqli_fetch_array($result)){

  echo '<h1>'.$row['name'].'</h1>';
  echo $row['profile'];


}





 ?>
