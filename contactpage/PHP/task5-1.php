<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>

<?php
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        $result = $i * $j;
        echo ''.$i. ' x ' .$j. ' = ' .$result.'　';
    }
    echo "<br>";
}
?>


</body>
</html>