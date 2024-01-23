<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet.css">
  <title>確認ページ</title>
</head>
<body>
  <header>
    <div class="header">
      <h1>ここには会社名が入ります</h1>
      <div class="header_box">
        <div class="header_box_left">
          <a href="" class="head_btn">ボタン01</a>
        </div>
        <div class="header_box_right">
          <a href="" class="head_btn">ボタン02</a>
        </div>
      </div>
    </div>
    <div class="menu">
      <ul>
        <a href="http://">メニュー01</a>
        <a href="http://">メニュー02</a>
        <a href="http://">メニュー03</a>
      </ul>
    </div>
  </header>

  <div class="mv">
    <h1><img src="contact/mv.png" alt="島の写真"></h1>
  </div>

  <main>
    <div class="info">
      <div class="wrapper">
        <div class="sec01">
          <h2>お問い合わせ</h2>
          <p>お問い合わせや業務内容に関するご質問は、<br class="sp_br">
            電話またはこちらのお問い合わせフォームより<br class="sp_br">
            承っております。<br>
          後ほど担当者よりご連絡させていただきます。</p>
        </div>
      </div>
    </div>

    <form action="http://192.168.33.10\TOP_page\contactpage\task8-1.php" method="post">



      <div class="contact_form">
        <div class=error_text>
          <p>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["name"])) {
                  echo "※名前を入力してください<br>";
              } else {
              }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["furigana"])) {
                  echo "※フリガナを入力してください<br>";
              } else {
              }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["email"])) {
                echo "※メールアドレスを入力してください<br>";
              } elseif (!strpos($_POST["email"],'@')) { 
                echo "※メールアドレスには'@'が含まれている必要があります。<br>";
              } else {
              }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["tel"])) {
                echo "※電話番号入力してください<br>";
              } elseif (!preg_match("/^\d{10,11}$/",$_POST["tel"])) {
                echo "電話番号を10桁、または11桁で入力してください<br>";
              } else {
              }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if ($_POST["item"]== 1) {
                echo "※お問い合わせ項目を選択してください<br>";
              } else {
              }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["content"])) {
                  echo "※お問い合わせ内容を入力してください<br>";
              } else {
              }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              if (empty($_POST["checkbox"])) {
                echo "※チェックボックスを確認してください";
              } else {
              }
            }

            ?>
          </p>
        </div>
        <div class="item">
          <div class="content">
            <label for="nema">お名前<span class="caution">必須</span></label>
          </div>
          <div class="input">
            <div class="input_border">
              <div class="input_text">
                <input type="text" class=input_whidt name="name" placeholder="山田 太郎" value="<?php 
                      $name =($_POST["name"]);
                      echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
                  ?>">
              </div>
            </div>
          </div>
        </div>
      
        <div class="item">
          <div class="content">
            <lable for="nema">フリガナ<span class="caution">必須</span></label>
          </div>
          <div class="input">
            <div class="input_border">
              <div class="input_text">
                <input type="text" class=input_width name="furigana" placeholder="ヤマダ タロウ" value="<?php 
                    $furigana =($_POST["furigana"]);
                    echo htmlspecialchars($furigana, ENT_QUOTES, 'UTF-8');
                  ?>">
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="content">
            <label for="email">メールアドレス<span class="caution">必須</span></label>
          </div>
          <div class="input">
            <div class="input_border">
              <div class="input_text">
                <input type="text" class=input_width name="email" placeholder="info@fast-creademy.jp" 
                value="<?php 
                    $email = ($_POST["email"]);
                    echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
                  ?>">
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="content">
            <label for="tel">電話番号<span class="caution">必須</span></label>
          </div>
          <div class="input">
            <div class="input_border">
              <div class="input_text">
                <input type="text" class=input_width name="tel" placeholder="09012345678" value="<?php 
                  $tel = ($_POST["tel"]);
                  echo htmlspecialchars($tel, ENT_QUOTES, 'UTF-8');
                  ?>">
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="content">
            <label for="content">お問い合わせ項目<span class="caution">必須</span></label>
          </div>
          <div class="input">
            <div class="input_border">
              <div class="input_text">
                <select name="item">
                  <option 
                  <?php
                  if ($_POST["item"]=="1"){
                    echo selected;}
                  ?>
                  value="1">選択してください</option>
                  <option 
                  <?php
                  if ($_POST["item"]=="2"){
                    echo selected;}
                  ?>
                  value="2">ご意見・ご感想</option>
                  <option 
                  <?php
                  if ($_POST["item"]=="3"){
                    echo selected;}
                  ?>
                  value="3">不具合について</option>
                  <option 
                  <?php
                  if ($_POST["item"]=="4"){
                    echo selected;}
                  ?>
                  value="4">返信希望</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="content">
            <label>お問い合わせ内容<span class="caution">必須</span></label>
          </div>
          <div class="input">
            <div class="input_border">
              <div class="input_text">
              <textarea type="text" name="content" placeholder="こちらにお問合せ内容をご記入ください"><?php
                    echo ($_POST["content"]);
                  ?></textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="content">
            <div class="privacy_policy">
              <label>個人情報保護方針<span class="caution">必須</span></label>
            </div>
          </div>
          
          <?php session_start();?>

          <div class="check_privacy">
            <label><input type="checkbox" name="checkbox" value="1" aria-invalid="false" class="agree"<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $_SESSION["checkbox"] = isset($_POST["checkbox"]);
            }
            if (isset($_SESSION["checkbox"]) && $_SESSION["checkbox"]) {
              echo ' checked';
            }
            ?>><span class="check">個人情報保護方針</span>
          </label>
            
            <p>に同意します。</p>
          </div>
          </div>
        </div>
        <div class="confirmation">
          <div class="confirmation_border">
            <button type="submit"><?php 
              $name = $_POST["name"];
              $furigana = $_POST["furigana"];
              $email = $_POST["email"];
              $tel = $_POST["tel"];
              $item = $_POST["item"];
              $content = $_POST["content"];
              $checkbox = isset($_POST["checkbox"]) ? $_POST["checkbox"] : '';
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (!empty($name) && !empty($furigana) && !empty($email) && !empty($tel) && preg_match("/\d{10,11}$/",$tel) && $content && $checkbox) {
                  echo "<a href="."task8-2.php".">送信<a>";
                } else{
                  echo "確認";
                }
              }
              ?>
            </button>
          </div>
        </div>
      </div>
    </form>

    <section class="sec_btn">
      <div class="content_box">
        <div class="btn_left">
          <div class="left_box">
            <h4 class="btn_h4">こちらからご購入ください</h4>
              <a href="" class="left_btn">ネットショップ</a>
          </div>
        </div>
        <div class="btn_right">
          <div class="right_box">
            <h4 class="btn_h4">お気軽にお問い合わせください</h4>
              <a href="contactpage.html" class="right_btn">お問い合わせ</a>
          </div>
        </div>
      </div>
    </section>
        
    <section class="sec05">
      <div class="wrapper">
        <div class="company_Information">
          <h4 class="sec05_h4">ここには会社名が入ります</h4>
          <p>住所が入ります</p>
          <p>03-1234-5678</p>
          <p>営業時間:9:00～18:00</p>
        </div>  
      </div>
    </section>

    <section class="link">
      <div class="link_box">
        <ul>
          <div class="link01">
            <a href="../PHP">リンク01</a>
          </div>
          <div class="link02">
            <a href="../PHP">リンク02</a>
          </div>
          <div class="link03">
            <a href="../PHP">リンク03</a>
          </div>
          <div class="link04">
            <a href="../PHP">リンク04</a>
          </div>
          <div class="link05">
            <a href="../PHP">リンク05</a>
          </div>
          <div class="link06_7">
            <div class="link06">
              <a href="../PHP">リンク06</a>
            </div>
            <div class="link07">
              <a href="../PHP">リンク07</a>
            </div>
          </div>
        </ul>
      </div>
    </section>
        
  </main>

  <footer>
    <p>ここには会社名が入りますⓒCompanyright.</p>
  </footer>
</body>
</html>