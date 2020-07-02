<?php



$conn = mysqli_connect("localhost","root","wh001500","izone");
mysqli_query($conn,"insert into izone_information(sex,nickname,created,reason,profile,name)
values ('female','ANGEL',now(),'ditzy..lol','A.K.A. angel','KIM MIN JU' )");

$result=mysqli_query($conn,$sql);
if($result ===false){

  echo mysqli_error($conn);
}


 ?>
