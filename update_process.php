<?php

rename('data/'.$_POST['old_title'],'data/'.$_POST['title']);
file_put_contents('data/'.$_POST['title'],$_POST['description']);
header('location: /WEB2-PHP-7.2.URL 파라미터의 활용.php?id='.$_POST['title']);
 ?>
