<?php
    if ($code == "iphonecrusher") header('Location: ?rank=6');
    $title = "<title>Пятый ранг - Стрельбище</title>"; 

    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        // switch($str) {
        //     case "ritter sport": return '<p>Это не викторина на знание брендов. Это - хакер-тест.</p>';
        //     case "rittersport": return '<p>Это не викторина на знание брендов. Это - хакер-тест.</p>';
        //     case "риттер спорт": return '<p>Это не викторина на знание брендов. Это - хакер-тест.</p>';
        //     case "риттерспорт": return '<p>Это не викторина на знание брендов. Это - хакер-тест.</p>';
        //     case "qr": return '<p>Куар-куар... Только не ко<b>Д</b></p>';
        //     case "qr-код": return '<p>Куар-куар... Только не ко<b>Д</b></p>';
        //     case "qr-code": return '<p>Куар-куар... Только не ко<b>Д</b></p>';
        //     case "куаркод": return '<p>Куар-куар... Только не ко<b>Д</b></p>';
        //     case "??? ?????????? ??????: qr-???": return '<p>Код следующего этапа: QR-кот</p>';
        //     case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
        //     case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';       
        //     default: return '<p>Картинка знакомая. Осталось её расшифровать</p>';
        // }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>          
 
    </head>
    <body class="black-bg iphone">
        <div class="board" id="board">
            <img src="images/apple.png" id="aim" class="aim">
        </div>

        <div class="wrap aimform" id="aimform">
            <div>
                <div class="center header" style="padding-top: 50vh;"></div>
                <div class="hint white black-bg-50">
                    <h2>Поздравляю, рядовой!</h2>
                    <p>Киберпродукт потенциального противника успешно взломан!<br>
                    Подразделению присваивается гвардейское звание <b>iPhoneCrusher</b>
                    </p>
                </div>
                <div>
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Обмыть!">
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
        <script>
                aim.onclick = function() {
                    document.querySelector('#board').style.display = "none"; 
                    document.querySelector('#aimform').style.display = "block";
                    document.body.style.backgroundImage='../images/iphone.jpg'   

                };
            </script> 
        <script src="scripts/aim.js"></script>    
    </body>
</html>