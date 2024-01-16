<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>

  <?php
  $tax = 10;
  $price1 = 100;
  $price2 = 200;
  $tax_price1 = 110;
  $tax_price2 = 220;
  ?>
 
  <p><?= '現在、消費税は' , $tax , '%です。'?></p>
  <p><?= '鉛筆が' , $price1 , '円で税込' , $tax_price1, '円です。' ?></p>
  <p><?= '消しゴム' , $price2 , '円で税込' , $tax_price2, '円です。' ?></p>

  
</body>
</html>