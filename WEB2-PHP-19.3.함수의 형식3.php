<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>fuction</title>
  </head>
  <body>
    <h1>Fucntion</h1>
    <h2>Basic</h2>
<?php
  function basic(){
    print("1<br>");
    print("2<br>");

}

      basic();
      basic();
 ?>
 <h2>parameter &amp; argument</h2>
<?php
function sum($left,$right){

print($left+$right);
print("<br>");

  }
  sum(54895457464,456876786544);
  sum(4,-5.5)
        ?>
 <h2>return</h2>

<?php
function sum2($left,$right){
  return $left+$right;
  echo "string";
}

print(sum2(2,4));
file_put_contents('계산결과값.txt',sum2(2,4));


 ?>


  </body>
</html>
