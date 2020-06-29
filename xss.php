<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XSS</title>
  </head>
  <body>
    <h1>cross site scripting</h1>
    <?php
echo htmlspecialchars('<script>location.href'http://www.naver.com'</script>');
     ?>
  </body>
</html>
