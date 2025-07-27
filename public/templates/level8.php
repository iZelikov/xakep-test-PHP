<?php
    if ($code == "stop-covid") header('Location: ?level=9');
    $title = "<title>level 8 - взломать Ведущего</title>";
    if($_SESSION['team']=='bookworms') $name='Эдельвейс';
    else $name = 'Книжные Черви';

    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "павлин": return '<p>Какой такой павлин-мавлин? Это к другому вопросу подсказка!</p>';
            case "павлины": return '<p>Какой такой павлин-мавлин? Это к другому вопросу подсказка!</p>';
            case "qr-код": return '<p>Есть там QR-код. Ты просто плохо его искал.</p>';
            case "куаркод": return '<p>Есть там QR-код. Ты просто плохо его искал.</p>';
            case "чгк": return '<p>Не в том вопросе ищешь!</p>';
            case "знатоки вои": return '<p>Не в том вопросе ищешь!</p>';
            case "знатоки вои!": return '<p>Не в том вопросе ищешь!</p>';
            case "вместе мы играем": return '<p>Не в том вопросе ищешь!</p>';
            case "вместе мы играем не в чгк, а в знатоки вои!": return '<p>Надо быть выше этого!</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
			case "ковид": return '<p>Надо бороться с этой заразой, внимательно штудируя методичку по вакцинации и QR-коды!</p>';
            case "ковид-19": return '<p>Надо бороться с этой заразой, внимательно штудируя методичку по вакцинации и QR-коды!</p>';
            case "covid": return '<p>Надо бороться с этой заразой, внимательно штудируя методичку по вакцинации и QR-коды!</p>';
            case "covid-19": return '<p>Надо бороться с этой заразой, внимательно штудируя методичку по вакцинации и QR-коды!</p>';
            case "спутник": return '<p>Успешная вакцинация гарантирует вам QR-коды и наше радушие</p>';
            case "спутник-v": return '<p>Успешная вакцинация гарантирует вам QR-коды и наше радушие</p>';
            case "спутник v": return '<p>Успешная вакцинация гарантирует вам QR-коды и наше радушие</p>';
            case "sputnik-v": return '<p>Успешная вакцинация гарантирует вам QR-коды и наше радушие</p>';
            case "модерна": return '<p>Успешная вакцинация гарантирует вам QR-коды и наше радушие</p>';
            case "ковивак": return '<p>Успешная вакцинация гарантирует вам QR-коды и наше радушие</p>';
            case "книжные черви": return '<p>Глупые знатоки! Да нам плевать на червей! Ломайте аккаунт Ведущего!</p>';
            case "эдельвейс": return '<p>Глупые знатоки! Да нам плевать на Эдельвейс! Ломайте аккаунт Ведущего!</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';       
            default: return '<p>Ищи! Плохой хакер! Это вам не QR-коды теребонькать.</p>';
        }
        return false;
    }
?>


<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="black-bg xakep">
        <div class="wrap">
            <div>
                <div class="header"></div>
                <div class="center">
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите код">
                        </p>
                    </form>
                </div>
                <div class="hint white">
                    <h2>Поздно! <?=$name?> уже похитили код!</h2>
                    <p>Что смотришь? <a href="forym/" target="blank">Возвращайся в прошлое</a> и добудь код раньше них!</p>
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>
                </div>               
            </div>
        </div>
    </body>
</html>