<?php
    if ($code == "level1") header('Location: ?level=1');
    $title = "<title>level 0 - испытание на Анонимуса</title>";
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "код": return '<p>Правильно. Но не на этом уровне.</p>';
            case "level10": return '<p>You are not prepared!</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';    
            default: return '<p>Ну написано же, что код: level1<br> Не задерживайтесь - проходите вглубь логова.</p>';
        }
        return false;
    } 
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="black-bg anons">
        <div class="wrap">
            <div>
                <div class="header center">Это Код: level1</div>
                <div>
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите код">
                        </p>
                    </form>
                </div>
                <div class="hint white black-bg-50">
                    <h2>Превед, <?=$team?>!</h2>
                    <p>Анонимные хакеры приветствуют тебя! Добро пожаловать в Клуб! Развлекайся, но
                        дальше ты не пройдёшь, если не отыщешь код, который спрятан где-то на этой
                        страничке...<br> 
                        А может и не спрятан...<br> 
                        А может и не на этой...</p>
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>    
                </div>
            </div>
        </div>
    </body>
</html>