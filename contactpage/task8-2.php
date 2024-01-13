<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task8-1</title>
</head>
<body>

<?php
  session_start();
  $_SESSION["date"] = "TEST2中";
  echo "セッションID:" . session_id() . "<br>";
  echo "状況：{$_SESSION ["date"]}<br><br>"
?>

<a href="task8-1.php">元のページ</a>

</body>
</html>