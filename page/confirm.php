<?php
session_start();

// 入力画面からのアクセスでなければ、戻す
if (!isset($_SESSION['form'])) {
  header('Location: home.php');
  exit();
} else {
  $post = $_SESSION['form'];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // メールを送信する
  $to = 'peipei.com2020@gmail.com';
  $from = $post['email'];
  $subject = 'お問い合わせ内容が届きました';
  $body = <<<EOT
名前 : {$post['name']}
メールアドレス : {$post['email']}
内容 : 
{$post['content']}
EOT;
  mb_send_mail($to, $subject, $body, $from, "From: {$from}");

  // セッションを消してお礼画面へ
  unset($_SESSION['form']);
  header('Location: thanks.html');
  exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>確認画面</title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200&family=Poppins:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/confirm.css">
</head>
<body>
  <div class="confirm">
    <h2>確認画面</h2>
    <form action="thanks.html" method="POST">
      <div class="items">
        <label for="name">お名前</label>
        <p class="item"><?php echo htmlspecialchars($post['name']); ?></p>
      </div>
      <div class="items">
        <label for="email">メールアドレス</label>
        <p class="item"><?php echo htmlspecialchars($post['email']); ?></p>
      </div>
      <div class="content">
        <label for="content">お問い合わせ内容</label>
        <p class="item"><?php echo htmlspecialchars($post['content']); ?></p>
      </div>
      <div class="submit">
        <a href="home.php#contact">戻る</a>
        <button type="submit">送信</button>
      </div>
    </form>
  </div>
</body>
</html>