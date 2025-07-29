<?php
    if ($code == "404-not-found" || $code == "404 not found") header('Location: ?level=10');
    $title = "<title>level 9 - жизнь за печеньки</title>";
    setcookie('level-9-code', '404-Not-Found');

    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "cookies": return '<p>Печеньки! Их есть у нас! А в них - предсказание с кодом. <br>Но мы их выдаём только тру хакерам.</p>';
            case "cookie": return '<p>Печеньки! Их есть у нас! А в них - предсказание с кодом. <br>Но мы их выдаём только тру хакерам.</p>';
            case "печеньки": return '<p>Печеньки! Их есть у нас! А в них - предсказание с кодом. <br>Но мы их выдаём только тру хакерам.</p>';
            case "печенька": return '<p>Жизнь за печеньку! Ну или хотя бы сессию.</p>';
            case "куки": return '<p>Куки — небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере пользователя.<br>
            						И этот самый фрагмент мы вам уже послали :)</p>';
            case "dark side": return '<p>Тёмная сторона примет тебя, как только ты возьмёшь печеньку.</p>';
            case "тёмная сторона": return '<p>Тёмная сторона примет тебя, как только ты возьмёшь печеньку.</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            case "404": return '<p>Тепло... А дальше?</p>';       
            default: return '<p>Хакер, остановись! Дальше ты ничего не найдёшь! <br>Лучше возьми печеньку.</p>';
        }
        return false;
    }
?>


<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="black-bg cookies">
        <div class="wrap">
            <div>
                <div class="center" style="padding-top: 47vh;">
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите код">
                        </p>
                    </form>
                </div>
                <div class="hint white black-bg-50">                    
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>
                </div>              
            </div>
        </div>
    </body>
</html>