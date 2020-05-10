<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="競走馬のデータベースサイトを運営してます">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
  <link rel="stylesheet" href="front/css/styles.css" type="text/css">
  <script src="front/js/main.js"></script>
</head>
<body>
<div><a href="signin/input.php">新規登録</a></div>
<div><a href="login.php">ログイン</a></div>
<div><a href="logout.php">ログアウト</a></div>
<form  class="main_form" method="post" action="" name="horsename">
<?php
if (!isset($_POST['horse'])) {
  $horse = $_POST['horse'];
  if (preg_match("/^[ァ-ヶー]+$/u", $horse)) {
  ?>
    <font size="4" color="red">馬名は全角カタカナ9文字以内で入力してください。</font><br>
 <?php  }
}
?>
  <label for="horsename">調べたい馬は？</label><br>
  <input type="text" size="40" name="horse"><input type="button" value="検索"  onClick="confirm();">
</form>
</body>
</html>