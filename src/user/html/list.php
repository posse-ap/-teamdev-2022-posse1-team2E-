<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>確認画面</title>
<link rel="stylesheet" href="../style.css">
</head>
<body>
<div id="inquiry">
<?php
$dsn = 'mysql:dbname=shukatsu;host=db';
$user = 'root';
$password = 'password';
$db = new PDO($dsn,$user,$password);
$db -> query('SET NAMES utf8');

$sql = 'SELECT * FROM inquiry';
$stmt = $db -> prepare($sql);
$stmt -> execute();
// print_r($stmt) ;


while(1){
	$rec = $stmt ->fetch(PDO::FETCH_ASSOC);
	if($rec == false){
		break;
	}
	echo '<tr>';
	// echo '<th>'.$rec['code'].'</th>';
	echo '<td>'.$rec['name'].'</td>';
	echo '<td>'.$rec['birthday'].'</td>';
	echo '<td>'.$rec['university'].'</td>';
	echo '<td>'.$rec['phone'].'</td>';
	echo '<td>'.$rec['address'].'</td>';
	echo '<td>'.$rec['email'].'</td>';
	echo '</tr>';
}
echo '</table>'."\n";
echo '<ul>'."\n";
echo '<li><a href="menu.html">メニューに戻る</a></li>'."\n";
echo '</ul>'."\n";

$db = null;
?>
</div>
</body>
</html>
