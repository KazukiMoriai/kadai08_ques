<!-- inputのデータをclassに代入しcsvへ格納するファイル -->
<?php
include("class.php");
// データの受信
$title = $_POST["title"];
$text  = $_POST["text"];
// 日時の取得
$date = date("m/d");


//インスタンスの作成
$memo = new Memo($date, $title, $text);

// $str作成
$c =",";
$str = $date.$c.$title.$c.$text;

// data.csvへ$strを格納
$file = fopen("../data/data.csv", "a");
fwrite($file, $str."\n");
fclose($file);

// ページの遷移
header("Location: index.php");
exit;
?>