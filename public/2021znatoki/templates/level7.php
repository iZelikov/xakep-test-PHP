<?php
    if ($code == "стерео хакер" || $code == "ctepeo xakep" || $code == "stereo_xakep") header('Location: ?level=8');
    $title = "<title>level 7 - реальная виртуальность</title>";
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "стерео": return '<p>Оно родимое. А теперь глазки в кучку и погнали!</p>';
            case "стереокартинка": return '<p>Оно родимое. А теперь глазки в кучку и погнали!</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            default: return '<p>Да, не кажому дано увидеть сокрытое. Ищи того, кому дано.</p>';
        }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="stereo_xakep">
        <div class="wrap">
            <div>
                <div class = "center" style="padding-top: 75vh;">
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите код">
                        </p>
                    </form>
                </div>
                <div class="hint white" style="background-color: rgba(150, 75, 0, 50%)">
                    <h2 class="center">Смотри в оба!</h2>
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>
                </div>               
            </div>
        </div>
    </body>
</html>