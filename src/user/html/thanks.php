<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="inquiry">
<?php
$dsn = 'mysql:host=db;dbname=shukatsu;charset=utf8;';
$user = 'root';
$password = 'password';

try {
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit();
}

$db -> query('SET NAMES utf8');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);

echo $name.'様<br>'."\n";
echo 'お問い合わせ、ありがとうございました。<br>'."\n";
echo 'お問い合わせ内容『'.$message.'』を<br>'."\n";
echo $email.'にメールで送りましたのでご確認ください。'."\n";

$mail_sub = 'お問い合わせを受け付けました。';
$mail_body = $name.'様、ご協力ありがとうございました。';
$mail_body = html_entity_decode($mail_body,ENT_QUOTES,"UTF-8");
$from = 'test@test.com';
$header="From: {$from}\nReply-To: {$from}\nContent-Type: text/plain;";

echo $mail_body;
mb_language('Japanese');
mb_internal_encoding("UTF-8");

if(mb_send_mail($email, $mail_sub, $mail_body,$header)) {
  echo "メールを送信しました";
} else {
  echo "メールの送信に失敗しました";
};


// $sql = 'INSERT INTO inquiry(name,email,message)VALUES("'.$name.'","'.$email.'","'.$message.'")';
$sql = 'INSERT INTO inquiry(name,birthday,university,phone,address,email,)VALUES("'.$name.'","'.$email.'","'.$message.'")';
$stmt = $db -> prepare($sql);
$stmt -> execute();
// echo phpinfo();

$db = null;
?>
<ul>
<li><a href="./contactform.php">form入力画面に戻る</a></li>
</ul>
</div>
</body>
</html>