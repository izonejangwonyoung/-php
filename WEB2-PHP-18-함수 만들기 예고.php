<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1><a href="WEB2-PHP-7.2.URL 파라미터의 활용.php">IZONE</a></h1>
    <ol>
      <?php
      $list=scandir('./data');

      $i=0;
      while($i<count($list)){
        if ($list[$i]!='.'){
          if ($list[$i]!='..'){
        echo "<li><a href=\"WEB2-PHP-7.2.URL 파라미터의 활용.php?id=$list[$i]\">$list[$i]</a></li>\n";}
}
        $i=$i+1;

      }


      // echo "<li>$list[0]</li>\n";
      // echo "<li>$list[1]</li>\n";
      // echo "<li>$list[2]</li>\n";
      // echo "<li>$list[3]</li>\n";
      // echo "<li>$list[4]</li>\n";
      // echo "<li>$list[5]</li>\n";



       ?>


      <!-- <li><a href="WEB2-PHP-7.2.URL 파라미터의 활용.php?id=장원영.txt">장원영</a></li>
      <li><a href="WEB2-PHP-7.2.URL 파라미터의 활용.php?id=김채원.txt">김채원</a></li>
      <li><a href="WEB2-PHP-7.2.URL 파라미터의 활용.php?id=혼다 히토미.txt">혼다 히토미</a></li>
      <li><a href="WEB2-PHP-7.2.URL 파라미터의 활용.php?id=아이즈원.txt">아이즈원</a></li> -->

    </ol>
<h2>
<?php


  ?>

</h2>


    <h2>
    <?php

if(isset($_GET['id'])){
echo $_GET["id"];

} else {

  echo "IZ-LAND에 오신 여러분, 환영합니다";

}


     ?>
    <h2>

       <?php
if(isset($_GET['id'])){

echo file_get_contents("data/".$_GET['id']);

} else {
echo "TEST 페이지 입니다.";

}

        ?>
        </h2>
  </body>
</html>
