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
        <span id="back"><a href="index.php">◁メモ</a></span>
        <span id="submit">
            <input type="submit" value="完了">
        </span>
    </div>
    <div id="content">
        <div id="title"><input type="text" name="title"></div>
        <div id="text"><textarea name="text" id="text" rows="4" cols="30"
        ></textarea></div>
    </div>
</form>

    
</body>
</html>


