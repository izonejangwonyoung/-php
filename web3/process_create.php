<?php

$conn=mysqli_connect('localhost','root','wh001500','izone');

$sql = "
insert into izone_information (sex,nickname,created,reason,profile,name)
values
(
  '{$_POST['sex']}',
   '{$_POST['nickname']}',
   NOW(),
   '{$_POST['reason']}',
   '{$_POST['profile']}',
   '{$_POST['name']}'
   )
   ";
   $result=mysqli_query($conn,$sql);

if($result===false){
echo "저장하는 과정에서 문제가 발생했습니다. admin에게 문의하세요.";
}
else{
echo "DB 업데이트에 성공했습니다. ";
}

?>


<form  action="create.php" method="GET">
<p>
<input type="button" value="BACK" onClick="history.go(-1)">
</p>
