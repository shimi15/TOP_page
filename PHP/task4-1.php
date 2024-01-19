<?php $probability = mt_rand( 1, 100 );

if ($probability <= 5){
  $fortune = '今日の運勢は”大凶”です';
} elseif($probability >= 6 && $probability <= 20){
  $fortune = '今日の運勢は”凶”です';
} elseif ($probability >= 21 && $probability <= 50){
  $fortune = '今日の運勢は”吉”です';
} elseif ($probability >= 51 && $probability <= 80){
  $fortune = '今日の運勢は”中吉”です';
} else {
  $fortune = '今日の運勢は”大吉”です';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>

<h1><?= $fortune; ?></h1>


</body>
</html>