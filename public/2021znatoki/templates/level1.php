<?php
    if ($code == "level two") header('Location: ?level=2');
    $title = "<title>level 1 - в поисках хамелеона</title>";
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "level2": return '<p>Не-не-не, Дэвид Блэйн! Второй наз мы на это не купимся!</p>';
            case "код": return '<p>Правильно. Но не на этом уровне.</p>';
            case "level1": return '<p>Алё! Это и есть level 1. Следующий уровень - номер два!</p>';
			case "level10": return '<p>You are not prepared!</p>';
            case "level 10": return '<p>You are not prepared!</p>';
            case "level0": return '<p>Правильно! Вернуть всё взад!</p>';
            case "кода нет": return '<p>Кода нет, говоришь? А если найду?!</p>';
            case "кода нет :(": return '<p>Кода нет, говоришь? А если найду?!</p>';
            case ":(": return '<p>Не грусти - возьми печеньку. <br>Ой, это не к этому уровню подсказка.</p>';
            case "levelup": return '<p>И друг кго Левел Даун.</p>';
            case "левелап": return '<p>И друг кго Левел Даун.</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';    
            default: return '<p>Бесполезно... Только <b>Ctrl+A</b>lt+Del, только хардкор! </p>';
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
                <div class="header center">Кода нет :( <span class="black">level two</div>
                <div>
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите код">
                        </p>
                    </form>
                </div>
                <div class="hint white black-bg-50">
                    <h2>А вот и первый уровень</h2>
                    <p>Видишь, как всё просто?! Баллов за такое, конечно, не дадут, зато море экспы и ЛевелАп обеспечены. 
                        А дальше будет уже не так легко. Готовься применять смекалку и беспрекословно выполнять команды и прихоти членов клуба.</p>
                    <?php
                        if($hint!==false) echo $hint;                      
                    ?>
                </div>               
            </div>
        </div>
    </body>
</html>

<?php 

?>