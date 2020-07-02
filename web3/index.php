<?php
$conn=mysqli_connect(
'localhost',
'root',
'wh001500',
'izone');

$sql = " select * from izone_information";
$result=mysqli_query($conn,$sql);
$list='';
while($row=mysqli_fetch_array($result)){

  $list=$list."<li><a
  href=\"index.php?member_count={$row['member_count']}\">{$row['name']}</a></li>";

}
$article=array(
'nickname'=>'hi',
'reason'=>'hi',
'profile'=>'hi',
'name'=>'hi',
'sex'=>'hi'
);

if (isset ($_GET['member_count']))
 {

      $sql = " select * from izone_information where member_count={$_GET['member_count']}";
      $result=mysqli_query($conn,$sql);
     $row=mysqli_fetch_array($result);

     $article=array(
'nickname'=>$row['nickname'],
'reason'=>$row['reason'],
'profile'=>$row['profile'],
'name'=>$row['name'],
'sex'=>$row['sex']);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>I-ZONE INFORMATION REGISTER </title>
  </head>
  <body>
<h1><a href="index.php"> I-ZONE INFORMATION REGISTER</h1>

<ol>
<?php

echo $list;

 ?>


</ol>


          <a href="create.php">멤버 별 정보 등록 페이지로 이동하기</a>
<h2><?php echo $article['name'] ?></h2>
<?php echo $article['profile'] ?>

  </body>
</html>
