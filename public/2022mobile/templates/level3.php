<?php
    if ($code == "так точно") header('Location: ?rank=4');
    $title = "<title>Третий ранг - Курс молодого хакера</title>"; 

    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "33": return '<p>Это был ответ с прошлого этапа."</p>';
            case "да": return '<p>Не угадал! Осталось 2 попытки</p>';
            case "есть": return '<p>Не угадал! Осталось 2 попытки</p>';
            case "а": return '<p>Курсант! Отвечайте по форме!</p>';
            case "б": return '<p>Курсант! Отвечайте по форме!</p>';
            case "в": return '<p>Буква правильная, ответ не полный!</p>';
            case "в амперах": return '<p>Так точно!</p>';
            case "амперы": return '<p>Так точно!</p>';
            case "ампер": return '<p>Так точно!</p>';
            case "так точно!": return '<p>Курсант, понизьте громкость.</p>';
            case "iq": return '<p>Ты ещё про монолитный зелёный кубик-рубик пошути!</p>';
            case "дембель": return '<p class="red">Warning!<br> Ваше звание недостаточно для использования Д-слова!<br> Достигните 10-го ранга.</p>';    
            case "дембель*": return '<p><b>*Дембель</b> является зарезервированной для 10 уровня командой, преждевременное использование карается разжалованием в рядовые хакеры!</p>';    
            default: return '<p>Внимание, анекдот:<br>
                            Забрили хакера в армию...<br>
                            Не смешно? Зато жизненно.</p>';
        }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="black-bg iq">
        <div class="wrap">
            <div>
            <div class="center header" style="padding-top: 50vh;">Учебка, экзамены...<br>Снова в школу</div>
                <div>
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите правильный ответ">
                        </p>
                    </form>
                </div>
                <div class="hint white black-bg-50">
                    <h2>Вопрос номер 33:</h2>
                    <p>Сила тока измерятся в амперах!</p>
                    <p>А) ..<br>
                    Б) ....<br>
                    В) ... .....<br> </p>                   
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>    
                </div>
            </div>
        </div>
    </body>
</html>