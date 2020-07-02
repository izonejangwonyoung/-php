<?php



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
echo $sql;




 ?>
