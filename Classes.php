<?php

class Pioneer{
    
    // プロパティを作成
    private $message;
    private $image;
    private $imageComment;
    private $parameter;
    private $originalIndex;
    public $inputYourData = 0;
    
    // コンストラクタ（インスタンス作成時に自動的に呼び出されるメソッド）を作成
    public function __construct($message,$image,$imageComment,$parameter,$originalIndex){
        $this->message = $message;    //$thisは作成したインスタンスを指定している、以下プロパティの値の初期設定
        $this->image = $image;
        $this->imageComment = $imageComment;
        $this->parameter = $parameter;
        $this->originalIndex -> $originalIndex;
    }
    
    // メソッドを作成し、呼び出すことでメッセージがechoされる。
    // メソッドの引数はメッセージに一部反映される。
    // 入力フォームから各種パラメータを入力して反映させたいなぁ……。
    public function myDoing($hikisu){
        //$this->inputYourData = $_POST[$this->getMessage()];
        echo '<center>';
        echo '<a href="details.php">'.$hikisu.'インスタンスに内包されたデータを表示します。'.'</a><br>';
        echo '<img src="'.$this->getImage().'" >'.'<br>';
        echo 'このデータに関する説明：'.$this->getImageComment().'<br>';
        echo 'このインスタンスから感じる強みは'.$this->getParameter().'となります。';
        echo 'index is 【'.$this->getOriginalIndex().'】'.'<br>';
        echo 'データの入力を受け付けました。【'.$_POST[$this->getMessage()].'】です、ありがとうございます。';
        echo '</center>';
    }
    
    public function formParts(){
        echo '<center>';
        echo '<form action="index.php" method="post">';
        echo '<input type="text" name="'.$this->getMessage().'" value="0">';
        echo '<input type="submit" value="データ送信">';
        echo '</form>';
        echo '</center>';
    }
    
    //以下ゲッター
    public function getlogMessage(){
        echo 'インスタンス名'.$this->message.'インスタンス作成完了'.'<br>';
    }
    
    public function getMessage(){
        return $this->message;    
    }
    
    public function getImage(){
        return $this->image;    
    }
    
    public function getImageComment(){
        return $this->imageComment;    
    }
    
    public function getParameter(){
        return $this->parameter = $this->parameter * rand(10,100);    
    }
    
    public function getOriginalIndex(){
        return $this->originalIndex;  
    }
    
    //以下セッター
    public function setInsIndex($hikisu){
        $this->originalIndex = $hikisu;
    }
    
}

?>