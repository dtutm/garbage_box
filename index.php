<?php
require_once('data.php');
//$reloadCount++

echo 'デバッグの森'.'<br>';
foreach($fAnswers as $ans){
    //var_dump($ans);
    var_dump($_POST[$ans->getMessage()]);
}


?>

<html>
    <!-- <h1>Now Count:<?php echo $reloadCount ?></h1> -->
    <center>
    <h1>instance logs</h1>
        <?php foreach($fAnswers as $log): ?>
            <?php echo $log->getLogMessage() ?>
        <?php endforeach ?>
    <hr>
    </center>
    
    <?php foreach($fAnswers as $func): ?>
        <?php $func->myDoing($func->getMessage()) ?>    <!-- PioneerクラスのmyDoingメソッドを呼び出し -->
        <?php $func->formParts() ?>                    <!-- PioneerクラスのformPartsメソッドを呼び出し -->
        <hr>
        <br>           
    <?php endforeach ?>

</html>