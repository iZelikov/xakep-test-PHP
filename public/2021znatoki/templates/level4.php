<?php
    if ($code == "tinycode") header('Location: ?level=5');
    $title = "<title>level 4 - 500% прибыли</title>";
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "500%": return '<p>Чтобы обеспечить 500% рост хакер пойдёт на любое сочетание клавиш!</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            default: return '<p>Как обычно: смотришь в лупу - видишь фигу. <br>Видимо, нужна оптика побольше. </p>';
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
            <div>
                <div class="center lupa">
                    <img src="images/lupa.svg">
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
                    <p>Для хакера четвёртого уровня обычные люди подобны муравьям под увеличительным стеклом. 
                        Они достойны лишь молча внимать, смиренно глядя в рот Мастеру.</p>
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>    
                </div>               
            </div>
        </div>
    </body>
</html>