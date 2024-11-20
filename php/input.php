<?php
// リクエストボディを取得
$jsonData = file_get_contents('php://input');

// JSONデータをデコードして連想配列に変換
$data = json_decode($jsonData, true);

// 受信データを確認
if ($data === null) {
    error_log('JSONデコードエラー: ' . json_last_error_msg());
    $data = []; // 空の配列として扱う
}

// デコードしたデータからtitle, date, textを取得
$title = $data['title'] ?? '';
$date = $data['date'] ?? '';
$text = $data['text'] ?? '';

// デバッグ用にデータを出力
var_dump($data);
?>




<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規メモ</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="module" src="../js/main.js"></script>
    <style>
    a {
        color: inherit; /* 親要素の色を継承する */
        text-decoration: none; /* 下線を消す */
    }
    </style>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/input.css">
</head>
<body>
<form action="data.php" method="post">
    <div id="header">
        <input type="submit" value="完了" id="">
    </div>
    <div id="content">
        <div id="title"><input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>"></div>
        <div id="text"><textarea name="text" id="text"><?php echo htmlspecialchars($text); ?></textarea></div>
    </div>
</form>

    
</body>
</html>


