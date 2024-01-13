<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>


<?php
  $price1 = 100;
  $price2 = 200;
  $tax = 10;
  $tax_price1 = $price1 / $tax + $price1;
  $tax_price2 = $price2 / $tax + $price2;
  $price1_1dz = $tax_price1 * 12;
  $price2_1dz = $tax_price2 * 12;
?>

<?php
  $table = array("商品","価格","税込価格","1Dzの価格");
  $list1 = array("鉛筆",$price1,$tax_price1,$price1_1dz);
  $list2 = array("消しゴム",$price2,$tax_price2,$price2_1dz);
?>

<table border= 1 style="border-collapse: collapse",text-align:center>
    <tr>
      <th><?=$table[0] ?></th>
      <th><?=$table[1] ?></th>
      <th><?=$table[2] ?></th>
      <th><?=$table[3] ?></th>
    </tr>
    <tr>
      <td><?=$list1[0] ?></td>
      <td><?=$list1[1] ?>円</td>
      <td><?=$list1[2] ?>円</td>
      <td><?=$list1[3] ?>円</td>
    </tr>
    <tr>
      <td><?=$list2[0] ?></td>
      <td><?=$list2[1] ?>円</td>
      <td><?=$list2[2] ?>円</td>
      <td><?=$list2[3] ?>円</td>
    </tr>
</table>

<p>消費税は<?=$tax?>%です。</p>
  
</body>
</html>