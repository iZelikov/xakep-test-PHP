<?php
    if ($code == "код") header('Location: ?level=3');
    $title = "<title>level 2 - очевидное вероятно</title>";
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "virus": return '<p>Ну не настолько в лоб. В лоб, конечно, но не настолько.</p>';
            case "password": return '<p>Ещё проще! И короче...</p>';
            case "pass": return '<p>Ещё проще!</p>';
            case "pas": return '<p>Всё - я пас. Кроме картинки вообще ничего на страничке нет?</p>';
            case "word": return '<p>И друг его - Эксель, и матерь их - Аксес Денайд.</p>';
            case "друг": return '<p>Вы эти свои эльфийские замашки бросьте! У нас тут хакеры, а не Средиземье. Но ход мысли нам нравится.</p>';
            case "friend": return '<p>Вы эти свои эльфийские замашки бросьте! У нас тут хакеры, а не Средиземье. Но ход мысли нам нравится.</p>';
            case "mellon": return '<p>Вы эти свои эльфийские замашки бросьте! У нас тут хакеры, а не Средиземье. Но ход мысли нам нравится.</p>';
            case "code": return '<p>Русским языком же сказано - 3 буквы!</p>';
            case "cod": return '<p>Нихт ферштейн! Гоффоритте руськая языка!</p>';
            case "kod": return '<p>Нихт ферштейн! Гоффоритте руськая языка!</p>';
            case "всё": return '<p>Ой всё!</p>';
            case "sos": return '<p>Капитан очевидность спешит на помощь! Чтобы пройти дальше, вам нужно ввести код и нажать на кнопку!</p>';
            case "ой всё": return '<p>Так не честно! Это была наша фраза!<br>
            						Следите за губами: В-В-Е-Д-И-Т-Е-К-О-Д</p>';
            case "ой всё!": return '<p>Так не честно! Это была наша фраза!<br>
            						Следите за губами: В-В-Е-Д-И-Т-Е-К-О-Д</p>';
            case "секретный код с десятого уровня": return '<p>Узнаете на десятом уровне, если хватит терпения и дзена :)</p>';
            case "404": return '<p>Рано! Прибереги для 9-го уровня.</p>';    
            default: return '<p>Когда тебя посылают на три буквы, делай то, что хакер говорит, а не то, что хакер делает!</p>';
        }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
       <?php include "templates/head.php" ?>
    </head>
    <body class="black-bg pass">
        <div class="wrap">
            <div>
                <div class="center header" style="padding-top: 50vh;">Кода совсем нет ;)</div>
                <div>
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите код">
                        </p>
                    </form>
                </div>
                <div class="hint white black-bg-50">
                    <h2>Второй уровень</h2>
                    <p>Хакеры - ребята простые и незамысловатые. <br>
                    Будь проще, и к тебе потянутся их дружелюбные тентакли.</p>
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>
                </div>               
            </div>
        </div>
    </body>
</html>