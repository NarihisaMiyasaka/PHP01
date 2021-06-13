<!-- 授業コード -->
<?php
// ファイルを開く
// $file =fopen("data/data.txt","r");

// ファイル内容を1行ずつ読み込んで出力
// while ($str =fgets($file)){
//     echo nl2br($str);
// }

// ファイルを閉じる
// fclose($file);
?>

<!-- 課題コード -->
<?php
// ファイル読み込み
$f = fopen("./data.csv", "r");

// テーブルHTML生成
echo "<table>
        <tr>
            <th>採番</th>
            <th>送信受取時間</th>
            <th>名前</th>
            <th>EMAIL</th>
            <th>TEL</th>
            <th>回数</th>
            <th>背景</th>
            <th>Rating</th>
            <th>お勧めポイント</th>
            <th>自由記載</th>
        </tr>";

// csvデータを配列に変換しhtmlへ
while($line = fgetcsv($f)) {
    echo "<tr>";
    for ($i=0;$i<count($line);$i++) {
        echo "<td>" . $line[$i] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// ファイルを閉じる
fclose($f);
?>

<!-- table css -->
<style>
th,td {
    border: solid 1px;  /* 枠線指定 */
    padding: 10px;      /* 余白指定 */
}
 
table {
    border-collapse:  collapse; /* セルの線を重ねる */
}
</style>