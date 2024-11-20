<!DOCTYPE html>
<html lang="ja">
  <!-- 最初の設定は終わっています　必要な方は触ってください -->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>もりあいメモ</title>
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
    <!-- 検索🔍の読み込み -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  </head>
  <!-- 最初の設定は終わっています　必要な方は触ってください -->
  <body>
    <!-- header -->
      <div id="header">
        <span id="h1">◁フォルダ</span>
        <span id="h2">≡</span>
      </div>
      
    <!-- Search -->
      <form action="search.php" method="post">
        <div id="search">
          <div id="s1">メモ</div>
          <div id="s2">
            <input type="search" id="site-search" name="siteSearch" placeholder="検索">
            <button id="searchButton" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>          
          </div>
        </div>
      </form>

    <!-- Pin -->
      <div id="pin">
        <div id="p1">ピンで固定</div>
        <table id="p2"></table>
      </div>

    <!-- 過去7日間 -->
      <div id="last">
        <div id="l1">過去7日間</div>
        <div id="l2">
          <?php 
            // ファイル読み込み
            include("./class.php");
            // $memosに格納
            $memos = [];
            $file  = fopen("../data/data.csv","r"); 
            while($line = fgetcsv($file)){
              list($date, $title, $text) = $line;
              $memo = new Memo($date, $title, $text);
              $memos[] =$memo; 
            }
            fclose($file);
            // メモ表示
            foreach($memos as $memo){
          ?>
          <div class="memo">
          <form action="input.php" method="post">
            <div class="title" name=""><?php echo $memo->getTitle()?></div>
            <span class="date"><?php echo $memo->getDate()?></span>
            <span class="text"><?php echo $memo->getText()?></span>
          </form>
          </div>
          <?php 
            }
          ?>
      </div>
    <!-- footer -->
      <div id="footer">
        <span id="f1">○○件のメモ</span>
        <span id="f2"><a href="../php/input.php">新規作成</a></span>
      </div>
  </body>
</html>
