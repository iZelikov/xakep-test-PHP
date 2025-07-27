<?php
    if ($code == "ipushkin") header('Location: ?rank=7');
    $title = "<title>Шестой ранг - Наряд в библиотеку</title>";
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "пушкин": return '<p>i da Pushkin, i da sukin sin!</p>';
            case "pushkin": return '<p>i - Pushkin!</p>';
            case "internet explorer не может отобразить эту веб-страницу": return '<p>Должен.<br>
            												Попробуйте другую версию браузера или Edge</p>';
            case "internet explorer": return '<p>Незаменим для пользования сервисами госучереждений</p>';
            case "интернет экспрорер": return '<p>Незаменим для пользования сервисами госучереждений</p>';
            case "госуслуги": return '<p>Доступно только для пользователей интернет эксплорера</p>';
            case "gosuslugi": return '<p>Доступно только для пользователей интернет эксплорера</p>';
            case "мфц": return '<p>Доступно только для пользователей интернет эксплорера</p>';
            case "библиотекарь": return '<p>Сегодня библиотекарь - ты!<br>
            								Только от тебя зависит, как выглядит библиотека.</p>';
			case "google chrome": return '<p>Лучшая програма для скачивания интернет эксплорера</p>';
            case "хром": return '<p>Лучшая програма для скачивания интернет эксплорера</p>';
            case "установи google chrome": return '<p>Послушай хакера и сделай наоборот :)</p>';
            case "opera": return '<p>Ещё одна лучшая програма для скачивания интернет эксплорера</p>';
			case "firefox": return '<p>Ещё одна лучшая програма для скачивания интернет эксплорера</p>';
			case "safari": return '<p>Ещё одна лучшая програма для скачивания интернет эксплорера</p>';
            case "ie": return '<p>Незаменим для пользования сервисами госучереждений</p>';     
            case "дембель": return '<p class="red">Warning!<br> Ваше звание недостаточно для использования Д-слова!<br> Достигните 10-го ранга.</p>';    
            case "дембель*": return '<p><b>*Дембель</b> является зарезервированной для 10 уровня командой, преждевременное использование карается разжалованием в рядовые хакеры!</p>';    
            default: return '<p>И кто будет всё это разгребать?</p>';
        }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
        <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>        
    <body>
        <?
        // проверка на IE
        $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
        if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false) || (strpos($ua, 'Edg/') !== false)) { 
            echo '<div class="wrap">
            <div class="center">
            <img style="margin-left: auto; margin-right: auto;" src="images/ipushkin.jpg" alt="">
            <div class="hint white black-bg">
            <p>В библиотеке ничего нет, кроме ПСС Пушкина, к чему бы это?</p>';      
        } else {
            echo '<div><iframe src="https://acomics.ru/~Internet-Explorer/1#mainImage" frameborder="0" width="100%" height="800px"></iframe></div>';
                echo '<div class="wrap">
                <div>
                <div class="hint white black-bg-50">
                    <p>Электронная Библиотека завалена мангой и комиксами.<br>
                    На поиски кода уйдут годы...</p>';
        };
        ?>       

                <?php
                    if($hint!==false) echo $hint; 
                ?>    
        </div>
            <div>
                <form method="POST">
                    <p class="center">
                        <input class="codeinput textinput" type="text" name="code">
                        <input class="codeinput" type="submit" value="Введите код">
                    </p>
                </form>
            </div>
            </div>
        </div>
    </body>
</html>