<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
   $message1 = '現在、消費税は10%です';
   $message2 = '鉛筆が100円で税込110円です。';
   define('MESSAGE3','消しゴムが200円で税込220円です。')
  ?>
  
  <p><?= $message1 ?></p>
  <p><?= $message2 ?></p>
  <p><?= MESSAGE3; ?></p>
  
</body>
</html>