<?php

$dsn = 'mysql:dbname=database;host=db';
$user = 'isaac';
$password = 'isaac';

try {
  $dbh = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
  echo "接続失敗: " . $e->getMessage() . "\n";
  exit();
}


?>