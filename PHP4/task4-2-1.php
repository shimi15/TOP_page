<?php
$month = rand(1, 12);

switch ($month) {
  case 3:
  case 4:
  case 5:
    $season = '春';
    break;
  case 6:
  case 7:
  case 8:
    $season = '夏';
    break;
  case 9:
  case 10:
  case 11:
    $season = '秋';
    break;
  default:
    $season = '冬';
    break;
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

<h1><?= "$month  月は  $season  です。"; ?></h1>

</body>
</html>