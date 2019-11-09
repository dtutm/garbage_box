<?php
require_once('Classes.php'); // Classes.phpを読み込み

$indexNumber = 1;


// インスタンスを生成
$fA1 = new Pioneer('FA1','1.png','Warframeより引用',300,0); 
$fA2 = new Pioneer('FA2','2.png','Warframeより引用',2000,0);
$fA3 = new Pioneer('FA3','3.png','Warframeより引用',40,0);
$fA4 = new Pioneer('FA4','4.png','Warframeより引用',100,0);
$fA5 = new Pioneer('FA5','5.png','匠、お許しください',10000,0);

$fAnswers = array($fA1,$fA2,$fA3,$fA4,$fA5); // 配列$fAnswersにインスタンスを代入


//既存のインスタンスにindex値を追加設定する。
//インスタンスが増えるたびにインデックス値が割り当てられる。
foreach($fAnswers as $fA){
    $fA->setInsIndex($indexNumber);
    $indexNumber++;
}


?>