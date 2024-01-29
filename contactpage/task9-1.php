<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="stylesheet.css">
  <title>送信完了ページ</title>
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
          <h3>送信完了しました。</h3>
        </div>
      </div>
    </div>

    <form action="http://192.168.33.10\TOP_page\contactpage\task9-1.php" method="post">
      <?php
      session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = $_POST['name'];
          $furigana = $_POST['furigana'];
          $email = $_POST['email'];
          $tel = $_POST['tel'];
          $item = $_POST['item'];
          $content = $_POST['content'];
        //   // print_r($name, $furigana, $email, $tel, $item, $content);
        //   var_dump($name, $furigana, $email, $tel, $item, $content);
        
          try{
            $pdo = new PDO(
              'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
              'root',
              'root',
              [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
              ]
            );

            $pdo->query("DROP TABLE IF EXISTS consumer");
            $pdo->query(
              "CREATE TABLE consumer(
                id    INT,
                name    VARCHAR(128),
                email   VARCHAR(128),
                tel     INT,
                item    VARCHAR(64),
                content VARCHAR(64)

              )"
            );
            
            $pdo->query(
              "INSERT INTO consumer (id, name, furigana, email, tel, item, content) VALUES 
            ('$id','$name' ,'$furigana' ,'$email' ,'$tel' ,'$item' ,'$content')"
            );
            // var_dump($results);  

            $stmt = $pdo->query("SELECT * FROM consumer");
            $results = $stmt->fetchALL();
            // print_r($result);
            var_dump($results);
            // foreach($results as $result){
            //   printf(
            //     '(%d) %s %s %s %s %d %s %s<br>',
            //     $result['id'],
            //     $result['name'],
            //     $result['furigana'],
            //     $result['email'],
            //     $result['tel'],
            //     $result['item'],
            //     $result['content']
            //   );
            // }

          } catch (PDOException $e) {
              echo $e->getMessage() . '<br>';
              exit;
          }
        }
      ?>

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