<?php
function print_title(){
  if(isset($_GET['id'])){
      echo $_GET["id"];

    } else {
      echo "IZ-LAND에 오신 여러분, 환영합니다";
                    }
}

     ?>
 <?php
     function print_description(){

       if(isset($_GET['id'])){

       echo file_get_contents("data/".$_GET['id']);

       } else {

       echo "안녕";

       }


     }

      ?>



<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>

<?php

print_title();
 ?>

    </title>
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
<a href="create.php">create</a>
<?php if(isset($_GET['id'])){ ?>
<a href="delete.php?id=<?=$_GET['id'] ?>">delete</a>
<a href="update.php?id=<?=$_GET['id']; ?>">update</a>
<form action="delete_process.php" method="post">
  <input type="hidden" name="id" value="<?=$_GET['id'] ?>">
  <input type="submit" value="delete">

</form>

<?php  } ?>

    <h2>
      <?php
            print_title();
       ?>

        </h2>



        <?php
print_description();





         ?>
  </body>
</html>
