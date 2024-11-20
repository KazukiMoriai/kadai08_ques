<?php
// class作成
class Memo{
    //プロパティ一覧
    private $date;
    private $title;
    private $text;
    // プロパティの入力
    public function __construct($date, $title, $text){
        $this->date  = $date;
        $this->title = $title;
        $this->text  = $text;
    }
    // プロパティを外で呼び出すメソッド
    public function getDate(){
        return $this->date;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getText(){
        return $this->text;
    }
}

?>