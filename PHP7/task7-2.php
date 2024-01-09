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
  protected $name;
  protected $age;
  protected $sex;
  protected $id;
  protected static $counter = 0;

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

class PartStaff extends Staff{
  private $jikyu;
  
  public function __construct($name,$age,$sex,$jikyu) {
    parent::__construct($name,$age,$sex);
    $this -> jikyu = $jikyu;
  }

  public function jikyunumber() {//P000で追加されていく
    self::$counter++;
    $this->id = 'P' . str_pad(self::$counter, 4, '0', STR_PAD_LEFT);
  }
  
  public function jikyushow() { //時給追加
    printf("(%s) %s %d歳 %s 時給:%d円<br>\n", $this->id, $this->name, $this->age, $this->sex, $this->jikyu);
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

$partStaff = new PartStaff("田中　友子", 24, "女性",900);
$partStaff->jikyunumber();
$partStaff->jikyushow();  

$staff4 = new Staff("中村　三郎", 27, "男性<br>");
$staff4->number();
$staff4->show();  

?>

</body>
</html>