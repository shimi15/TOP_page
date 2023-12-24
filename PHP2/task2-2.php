<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>

<?php
    $table = array("商品","価格","税込価格");
    $list1 = array("鉛筆","100円","110円");
    $list2 = array("消しゴム","200円","220円");
    $list3 = array("定規","300円","330円");
    
  ?>

<table border= 1 style="border-collapse: collapse">
    <tr>
      <th><?=$table{0} ?></th>
      <th><?=$table{1} ?></th>
      <th><?=$table{2} ?></th>
    </tr>
    <tr>
      <td><?=$list1{0} ?></td>
      <td><?=$list1{1} ?></td>
      <td><?=$list1{2} ?></td>
    </tr>
    <tr>
      <td><?=$list2{0} ?></td>
      <td><?=$list2{1} ?></td>
      <td><?=$list2{2} ?></td>
    </tr>
    <tr>
      <td><?=$list3{0} ?></td>
      <td><?=$list3{1} ?></td>
      <td><?=$list3{2} ?></td>
    </tr>
</table>
  
</body>
</html>