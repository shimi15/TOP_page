<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>

<?php
class Staff {
  private $name;
  private $age;
  private $sex;
  private $id;
  private static $counter = 0;

  public function __construct($name, $age, $sex) {
      $this->name = $name;
      $this->age = $age;
      $this->sex = $sex;
  }

  public function number() {//入力順にS0001から割り振られる
      self::$counter++;
      $this->id = 'S' . str_pad(self::$counter, 4, '0', STR_PAD_LEFT);
  }

  public function show() { //社員番号、名前、年齢、性別の順で表示される
      printf("(%s) %s %d歳 %s\n", $this->id, $this->name, $this->age, $this->sex);
  }
}

//スタッフ情報を入れる
$staff1 = new Staff("佐藤　一郎", 31, "男性<br>");
$staff1->number();
$staff1->show();  

$staff2 = new Staff("山田　花子", 25, "女性<br>");
$staff2->number();
$staff2->show();  

$staff3 = new Staff("鈴木　次郎", 27, "男性<br>");
$staff3->number();
$staff3->show();  
?>

</body>
</html>