<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>

  <?php
    $month = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
  ?>
 
  <ul>
    <li>
      <?=$month[0];?>
    </li>
    <li>
      <?=$month[1];?>
    </li>
    <li>
      <?=$month[2];?>
    </li>
    <li>
      <?=$month[3];?>
    </li>
    <li>
      <?=$month[4];?>
    </li>
    <li>
      <?=$month[5];?>
    </li>
    <li>
      <?=$month[6];?>
    </li>
  </ul>

</body>
</html>