<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="inquiry">
<h2>確認画面</h2>
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
$address = $_POST['address'];
$phone = $_POST['phone'];
$birthday = $_POST['birthday'];
$university = $_POST['university'];


$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$birthday = htmlspecialchars($birthday);
$address = htmlspecialchars($address);
$phone = htmlspecialchars($phone);
$university = htmlspecialchars($university);

echo '<ul>'."\n";
echo '<li>';
if($name==''){
	echo 'お名前が入力されていません。<br>'."\n";
}else{
	echo 'お名前：'.$name.'<br>'."\n";
}
echo '</li>'."\n";
echo '<li>';
if($email==''){
	echo 'メールアドレスが、入力されていません。<br>'."\n";
}else{
	echo 'メールアドレス：'.$email.'<br>'."\n";
}
echo '</li>'."\n";
echo '<li>';
if($address==''){
	echo 'お問い合わせの内容が、入力されていません。<br>'."\n";
}else{
	echo 'お問い合わせの内容：'.$address."\n";
}
echo '</li>'."\n";
echo '<li>';
if($university==''){
	echo 'お問い合わせの内容が、入力されていません。<br>'."\n";
}else{
	echo 'お問い合わせの内容：'.$university."\n";
}
echo '</li>'."\n";
echo '<li>';
if($phone==''){
	echo 'お問い合わせの内容が、入力されていません。<br>'."\n";
}else{
	echo 'お問い合わせの内容：'.$phone."\n";
}
echo '</li>'."\n";
echo '<li>';
if($birthday==''){
	echo 'お問い合わせの内容が、入力されていません。<br>'."\n";
}else{
	echo 'お問い合わせの内容：'.$birthday."\n";
}
echo '</li>'."\n";
echo '</ul>'."\n";

$sql = 'INSERT INTO inquiry(name,birthday,university,phone,address,email)VALUES("'.$name.'","'.$birthday.'","'.$university.'","'.$phone.'","'.$address.'","'.$email.'")';
$stmt = $db -> prepare($sql);
$stmt -> execute();


echo $name.'様<br>'."\n";
echo 'お問い合わせ、ありがとうございました。<br>'."\n";
echo 'お問い合わせ内容『'.$university.'』を<br>'."\n";
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

// if($name=='' || $email=='' || $address=='' || $phone=='' || $university=='' || $birthday==''){
// 	echo '<p>未記入の項目があります。「<span class="deco">戻る</span>」ボタンをクリックしてください。</p>'."\n";
// 	echo '<div class="submit">'."\n";
// echo '<form>'."\n";
// echo '<input type="button" onClick="history.back()" value="戻る">'."\n";
// echo '</form>'."\n";
// echo '</div>'."\n";
// }else{
// 	echo '<p>以上の内容を送信します。よろしければ「<span class="deco">送信</span>」ボタンを、修正する場合は「<span class="deco">戻る</span>」ボタンをクリックしてください。</p>'."\n";
// 	echo '<div class="submit">'."\n";
// echo '<form action="thanks.php" method="post">'."\n";
// echo '<input type="hidden" name="name" value="'.$name.'">';
// echo '<input type="hidden" name="email" value="'.$email.'">';
// echo '<input type="hidden" name="message" value="'.$address.'">';
// echo '<input type="hidden" name="message" value="'.$phone.'">';
// echo '<input type="hidden" name="message" value="'.$university.'">';
// echo '<input type="hidden" name="message" value="'.$birthday.'">';
// echo '<input type="button" onClick="history.back()" value="戻る">'."\n";
// echo '<input type="submit" value="送信">'."\n";
// echo '</form>'."\n";
// echo '</div>'."\n";
// }
?>
</div>
</body>
</html>