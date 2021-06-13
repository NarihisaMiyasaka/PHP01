<?php
// 以下授業コード

// 文字列作成（日付）
// $time = date("Y-m-d H:i:s");
// $name = $_POST["name"];
// $mail = $_POST["mail"];

// $str = $time."/".$name."/".$mail;

// // .txt Fileにデータを保存する処理
// $file = fopen("data/data.txt","a"); //対処のファイルを開く

// fwrite($file,$str."\n");//ファイルにデータを書き込む

// fclose($file);//ファイルを閉じる

// 以下課題コード

// 以下採番用
$fp = fopen('data.csv', 'r+'); //行数を数えた後、同じファイルに書き込みを行なう
flock($fp, LOCK_EX); //汎用のファイルロック(同時に複数のリクエストを受け取ったときに、データの不整合が生じるのを防ぐ)

// 次の投稿番号
$count = 0;
while (fgets($fp) !== false) {
    $count++;
}
$next = $count + 1;

// 項目呼び出し＆定義づけ
$time = date("Y-m-d H:i:s");
$name = $_POST["name"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$num_inq = $_POST["num_of_inq"];
$haikei = $_POST["haikei"];
$rating=$_POST["rating"];
$kind=$_POST["kind"];
$shosai= $_POST["shosai"];
// var_dump($kind);
$kindr = implode("/",$kind);//配列をstring化して/で区切り


$datas = array(array($next,$time,$name,$mail,$tel,$num_inq,$haikei,$rating,$kindr,$shosai));

$fp = fopen('data.csv', 'a'); //csvファイルを作ってaで追加
foreach($datas as $data){
	$line = implode(',' , $data);
	fwrite($fp, $line . "\n");
}
fclose($fp);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.csv を確認しましょう！</h2>

<ul>
    <li><a href="index.php">前pageへ戻る</a></li>
</ul>

</body>
</html>

<style>
/* 点消し */
ul {
  list-style: none;
}
  </style>