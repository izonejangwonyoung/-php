<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>I-ZONE INFORMATION REGISTER PAGE</title>
  </head>
  <body>
<h1>아이즈원 멤버 별 정보 등록 페이지</h1>

<ol>
  빈 칸에 값을 입력하세요
</ol>
<form  action="process_create.php" method="POST">
  <p> <input type="text" name="sex" placeholder="sex">        </p>
    <p> <input type="text" name="nickname" placeholder="nickname">        </p>
        <p> <input type="text" name="reason" placeholder="reason">        </p>
          <p> <input type="text" name="profile" placeholder="profile">        </p>
            <p> <input type="text" name="name" placeholder="name">        </p>
<!-- <p><textarea name="description" rows="8" cols="80" placeholder="description"></textarea> </p> -->
<p> <input type="submit"> </p>
</form>


  </body>
</html>
