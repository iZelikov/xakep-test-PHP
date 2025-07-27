<?php
    if ($code == "qr-кот" || $code == "qr-kot") header('Location: ?level=6');
    $title = "<title>level 5 - quadratisch, praktisch, gut</title>"; 

    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "ritter sport": return '<p>Это не викторина на знание брендов. Это - хакер-тест.</p>';
            case "rittersport": return '<p>Это не викторина на знание брендов. Это - хакер-тест.</p>';
            case "риттер спорт": return '<p>Это не викторина на знание брендов. Это - хакер-тест.</p>';
            case "риттерспорт": return '<p>Это не викторина на знание брендов. Это - хакер-тест.</p>';
            case "qr": return '<p>Куар-куар... Только не ко<b>Д</b></p>';
            case "qr-код": return '<p>Куар-куар... Только не ко<b>Д</b></p>';
            case "qr-code": return '<p>Куар-куар... Только не ко<b>Д</b></p>';
            case "куаркод": return '<p>Куар-куар... Только не ко<b>Д</b></p>';
            case "??? ?????????? ??????: qr-???": return '<p>Код следующего этапа: QR-кот</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';       
            default: return '<p>Картинка знакомая. Осталось её расшифровать</p>';
        }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="quadratisch">
        <div class="wrap">
            <div>
                <div class="middle">
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