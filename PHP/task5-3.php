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
  $price3 = 300;
  $tax = 10;
  $tax_price1 = $price1 / $tax + $price1;
  $tax_price2 = $price2 / $tax + $price2;
  $tax_price3 = $price3 / $tax + $price3;
?>

<?php
$products = array(
    array("商品" => "鉛筆", "価格" => $price1, "税込価格" => $tax_price1),
    array("商品" => "消しゴム", "価格" => $price2, "税込価格" => $tax_price2),
    array("商品" => "定規", "価格" => $price3, "税込価格" => $tax_price3),
);

echo "<table border='1' style='border-collapse: collapse;, text-align:'center'>";
echo "<tr><th>商品</th><th>価格</th><th>税込価格</th></tr>";
foreach ($products as $product) {
    echo "<tr>";
    echo "<td>" . $product["商品"] . "</td>";
    echo "<td>" . $product["価格"] .  "円</td>";
    echo "<td>" . $product["税込価格"] .  "円</td>";
    echo "</tr>";
}
echo "</table>";
?>


</body>
</html>