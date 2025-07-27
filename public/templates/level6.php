<?php
    if ($code == "кис-кис мяу!") header('Location: ?level=7');
    $title = "<title>level 6 - повторенье - мать ученья</title>";
    $cat_away = anticat($code);

    function anticat($str) {
        switch($str) {
            case "брысь": return true;
			case "брысь!": return true;
            case "вон": return true;
			case "вон!": return true;
            case "пшёл вон": return true;
            case "пшёл вон!": return true;
            case "пошёл вон": return true;
            case "тапок": return true;
            case "тапком": return true;
            case "кис-кис": return false;
            default: return false;
        return false;
        }
    }
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "cae8f12dcae8f120ccfff321": return '<p>Ха-ха-ха! Истинный хакер всё шифрует по два раза!</p>';
            case "rgb": return '<p>Ну да! Один в один, как на отборочном турнире.</p>';
            case "cmyk": return '<p>Ну да! Один в один, как на отборочном турнире.</p>';
            case "caf7f02dcbe8e130cdfff320": return '<p>Нежнее пипеткой кликайте! И тогда опечаток не будет.</p>';
            case "Кчр-Либ0Няу ": return '<p>Нежнее пипеткой кликайте! И тогда опечаток не будет.</p>';
            case "пушкин": return '<p>Специально для Пушкина: <a href="http://crypt-online.ru/crypts/text2hex/" target="blank">crypt-online.ru/crypts/text2hex/</a></p>';
            case "cmyk": return '<p>Ну да! Один в один, как на отборочном турнире.</p>';
            case "636165 386631 326463 616538 663132 306363 666666 333231": return '<p>А расшифровывать кто будет? Пушкин?</p>';
            case "#636165 #386631 #326463 #616538 #663132 #306363 #666666 #333231": return '<p>А расшифровывать кто будет? Пушкин?</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';       
            default: return '<p>Если котик мешает хакеру - хакер его тапком!</p>';
        }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="">
        <div class="wrap">
            <div class ="header">
                <div class="center rgb">
                    <?php 
                        if ($cat_away) echo '<div class="bottom center"> <img src="images/cat-2.gif"></div>';
                        else echo '<img src="images/cat-1.gif" style="width:66%">';
                    ?>
                </div>
            </div>
            <div>
                <form method="POST">
                    <p class="center">
                        <input class="codeinput textinput" type="text" name="code">
                        <input class="codeinput" type="submit" value="Введите код">
                    </p>
                </form>
            </div>
            <div class="hint">
                <p>Посмотрим, насколько у знатоков хорошая память.<br></p>
                <?php
                        if($hint!==false) echo $hint;                        
                ?>
            </div>
            
        </div>
    </body>
</html>