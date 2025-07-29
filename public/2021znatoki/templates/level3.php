<?php
    if ($code == "40 разбойников") header('Location: ?level=4');
    $title = "<title>level 3 - Анонимус возвращается</title>"; 

    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "алибаба": return '<p>Ага, почти угадал. Именно этого в коде быть не должно.</p>';
            case "али баба": return '<p>Ага, почти угадал. Именно этого в коде быть не должно.</p>';
            case "ali": return '<p>На Али можно найти всё, что угодно. В том числе и правильные коды.</p>';
            case "aliexpress": return '<p>На Али можно найти всё, что угодно. В том числе и правильные коды.</p>';
            case "алиэкспресс": return '<p>На Али можно найти всё, что угодно. В том числе и правильные коды.</p>';
            case "doom": return '<p>Это вам не шахматы! DOOMайте активнее.</p>';
            case "правильные коды": return '<p>Самые правильные коды - это читкоды</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            case "золотая рыбка": return '<p>Поймал хакер золотую рыбку, а она и говорит: <br>
            							- Исполню три желания!<br>
            							- IDDQD, IDKFA и в АД!</p>';
            case "hell": return '<p>Спокойно! Дальше по курсу будет вам и Hell, и NightMare, и какава с чаем.</p>';
            case "ад": return '<p>Спокойно! Дальше по курсу будет вам и Hell, и NightMare, и какава с чаем.</p>';
            case "????! ??????????? ??????? ?? ??????? - ??? ????? ?????????!": return '<p>Рано! Продолжайте кликать по ссылкам  - там много полезного!</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';       
            default: return '<p>- И стал дед кликать золотую рыбку.<br>
                            - А зачем рыбку кликать?<br>
                            - Потому что мышек тогда ещё не было...</p>';
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
                <div class = "center" style="padding-top: 5vh;"> 
                    <img src="images/sova-anonimus.png">
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
                    <h2>Warning!</h2>
                    <p>Ваша маска Анонимуса повреждена!<br>
                    Для восстановления анонимности и системной целостности немедленно <a href="ali/anonimus.htm" target="_blank" rel="noopener">приобретите новую маску</a>!</p>
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>
                </div>               
            </div>
        </div>
    </body>
</html>