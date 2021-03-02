<?php
session_start();
$error = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $post = filter_input_array(INPUT_POST, $_POST);

  // フォーム送信時にエラーをチェックする
  if ($post['name'] === '') {
    $error['name'] = 'blank';
  }
  if ($post['email'] === '') {
    $error['email'] = 'blank';
  } else if (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
    $error['email'] = 'email';
  }
  if ($post['content'] === '') {
    $error['content'] = 'blank';
  }

  if (count($error) === 0) {
    // エラーがないので確認画面に移動
    $_SESSION['form'] = $post;
    header('Location: confirm.php');
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SHUNPEI TANAKA</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Poppins:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/page.css">
</head>
<body>
  <header>
    <nav>
      <a href="#home"><h2>SHUNPEI TANAKA</h2></a>
      <ul>
        <a href=""><li>HOME</li></a>
        <a href=""><li>ABOUT</li></a>
        <a href=""><li>WORKS</li></a>
        <a href=""><li>CONTACT</li></a>
      </ul>
      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
    </nav>
  </header>
  <div class="nav-links" id="links">
    <ul>
      <li><a href="../index.html">HOME</a></li>
      <li><a href="#about" id="smooth">ABOUT</a></li>
      <li><a href="#works" id="smooth">WORKS</a></li>
      <li><a href="#contact" id="smooth">CONTACT</a></li>
      <li><a href="https://twitter.com/shunpeihuck2021" target="blank"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/peipei_udon/?hl=ja" target="blank"><i class="fab fa-instagram"></i></a>
      <a href="mailto:peipei.com2020@gmail.com" target="blank"><i class="fas fa-envelope"></i></a>
    </li>
    </ul>
  </div>
  <main>
    <section class="home" id="home">
      <img src="../img/top.JPG" alt="">
      <div class="catch">
        <h2>WEB</h2>
        <p>&</p>
        <h2>SHUNPEI</h2>
      </div>
      <div class="icon">
        <a href="https://twitter.com/shunpeihuck2021" target="blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/peipei_udon/?hl=ja" target="blank"><i class="fab fa-instagram"></i></a>
        <a href="mailto:peipei.com2020@gmail.com" target="blank"><i class="fas fa-envelope"></i></a>
      </div>
    </section>
    <section class="about" id="about">
      <div class="prof">
        <img src="../img/shunpei.jpg" alt="mypic">
        <h3>田中 駿平</h3>
        <br>
        <p>Web Enginner</p>
        <br>
        <p>平成11年11月12日、埼玉県富士見市生まれ。中学高校時代はサッカー少年。現役で青山学院大学経営学部に入学。
        <br>
        <br>
        2020年にプログラミングに出会う。ハマってしまい、毎日コード書きまくり。
        <br>
        <br>
        趣味は筋トレと格闘技観戦。
        </p>
        <br>
        <br>
        <h3>SHUNPEI TANAKA</h3>
        <br>
        <p>Born November 12, 1999 in Fujimi City, Saitama Prefecture. I was a soccer boy when I was in middle school and high school.
        <br>
        <br>
        I am active and enrolled in the Faculty of Business Administration at Aoyama Gakuin University.
        I meets programming in 2020. I got hooked and wrote code every day.</p>
      </div>
    </section>
    <section class="service">
      <div class="ser">
        <h2>SERVICE</h2>
        <img src="../img/enjineer.jpg" alt="">
        <p>WEBページの制作・編集のことはお任せください。レスポンシブ対応可能です。お客様の要望に寄り添いながら最高のWebページを提供します。
        </p>
        <br>
        <br>
        <p>SKILLS： HTML/CSS, JavaScript, jQuery, PHP</p>
      </div>
      <div class="ser">
        <h2>STRENGTH</h2>
        <ul class="strength">
          <li><h3>レスの速さ</h3>
              <p>お客様の要望にすぐに返信、対応いたします。</p>
          </li>
          <li><h3>コーディング</h3>
              <p>誰でも見やすく、アップデートがしやすい整ったコードに仕上げます。</p>
          </li>
          <li><h3>お客様第一</h3>
               <p>こまめに相談をしながら、できる限りクライアント様の要望に寄り添ってより良いものを作り上げていきます。</p>
           </li>
        </ul>
      </div>
    </section>
    <section class="works" id="works">
      <h2>WORKS</h2>
      <div class="work">
        <div>
          <a href="" target="blank"><img src="../img/SHUNPEI TANAKA.png" alt=""></a>
          <p>My Portfolio</p>
          <div class="btn">MORE</div>
          <div class="more">
            <h3>HTML/CSS, JavaScriptを使用</h3>
            <p class="up"><i class="fas fa-chevron-up"></i></p>
          </div>
        </div>
        <div>
          <a href="https://www.blog-of-life.net/index.php" target="blank"><img src="../img/photoboaster.png" alt=""></a>
          <p>Photo Boaster</p>
          <div class="btn">MORE</div>
          <div class="more">
            <h3>HTML/CSS, JavaScript, PHPを使用</h3>
            <p>PHPの基礎を理解する目的で作成しました。画像のアップロード、ブログの作成、編集、削除や、ユーザー登録、ログイン機能、コメント機能も実装しました。</p>
            <p class="up"><i class="fas fa-chevron-up"></i></p>
          </div>
        </div>
        <div>
          <a href="https://shunpei2020.github.io/cresta-mosya/" target="blank"><img src="../img/crestamosya-min-min.png" alt=""></a>
          <p>LP模写サイト</p>
          <div class="btn">MORE</div>
          <div class="more">
            <h3>HTML/CSS, JavaScriptを使用</h3>
            <p>デザインカンプ(Adobe XD)からコーディングしました。</p>
            <p class="up"><i class="fas fa-chevron-up"></i></p>
          </div>
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <h2>CONTACT</h2>
      <div class="form">
        <form action="" method="POST">
          <div class="name">
            <label for="name">お名前</label>
            <p class="require">必須</p>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($post['name']); ?>">
            <?php if ($error['name'] === 'blank'):?>
              <p class="error_msg">※お名前を記入してください</p>
            <?php endif; ?>
          </div>
          <div class="email">
            <label for="email">メールアドレス</label>
            <p class="require">必須</p>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($post['email']); ?>">
            <?php if ($error['email'] === 'blank'):?>
              <p class="error_msg">※メールアドレスを記入してください</p>
            <?php endif; ?>
            <?php if ($error['email'] === 'email'):?>
              <p class="error_msg">※メールアドレスを正しく記入してください</p>
            <?php endif; ?>
          </div>
          <div class="content">
            <label for="content">お問い合わせ内容</label>
            <p class="require">必須</p>
            <textarea name="content" id="content" cols="30" rows="10"><?php echo htmlspecialchars($post['content']); ?></textarea>
            <?php if ($error['content'] === 'blank'):?>
              <p class="error_msg">※お問い合わせ内容を記入してください</p>
            <?php endif; ?>
          </div>
          <input type="submit" value="確認画面へ">
        </form>
      </div>
    </section>
  </main>

  <footer>
  <p>©︎SHUNPEI TANAKA</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <script src="../js/main.js"></script>
  <script src="../js/burger.js"></script>
</body>
</html>