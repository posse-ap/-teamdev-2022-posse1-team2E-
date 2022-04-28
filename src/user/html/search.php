<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>検索画面</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<div id="inquiry">
<?php
$code = $_POST['code'];

$dsn = 'mysql:dbname=contactus;host=localhost';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn,$user,$password);

$dbh -> query('SET NAMES utf8');



$sql = 'SELECT * FROM inquiry WHERE code='.$code;

$stmt = $dbh -> prepare($sql);

$stmt -> execute();


echo '<table>'."\n";
echo '<tr><th>No</th><th>お名前</th><th>メールアドレス</th><th>お問い合わせ内容</th></tr>'."\n";
while(1){

	$rec = $stmt ->fetch(PDO::FETCH_ASSOC);

	if($rec == false){

		break;

	}
	echo '<tr>';
	echo '<td>'.$rec['code'].'</td>';
	echo '<td>'.$rec['name'].'</td>';
	echo '<td>'.$rec['email'].'</td>';
	echo '<td>'.$rec['message'].'</td>';
	echo '</tr>';

}
echo '</table>'."\n";
echo '<ul>'."\n";
echo '<li><a href="search.html">検索画面に戻る</a></li>'."\n";
echo '</ul>'."\n";

$dbh = null;
?>
</div>
</body>
</html>
