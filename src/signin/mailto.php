<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <meta name="description" content="競走馬のデータベースサイトを運営してます">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規登録(メールアドレス入力)</title>
  <link rel="stylesheet" href="../front/css/styles.css" type="text/css">
  <script src="../front/js/main.js"></script>
</head>
<body>
<form class="main_form" method="post" action="" name="mailform">
<?php
//DBを読み込み
require_once('../database.php');

if (isset($_POST['mail'])) {
  $mail = $_POST['mail'];
  $pattern = "/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/";
  if (!preg_match($pattern, $mail)) { ?>
    <font size="4" color="red">メールアドレスを正しく入力してください。</font><br>
  <?php }
}
//メールアドレスの重複確認
$sql = 'SELECT mailaddress FROM m_user WHERE mailaddress = :mailaddress';
$statement = $dbh->prepare($sql);
$statement->execute(array(
  ':mailaddress' => $mail
));

$result = $statement->fetch();

if ($result == true) { ?>
  <font size="4" color="red">既に登録されているメールアドレスです。</font><br>
<?php }
?>
<p>メールアドレスをご入力のうえ、「送信」ボタンを押してください。</p>
<label for="mail">メールアドレス</label> <input type="text" size="40" name="mail"><input type="button" name="mail_button" value="送信" onClick="mail_confirm();">
</form>
<div align="left"><a href="../index.php">戻る</a></div>
</body>
</html>