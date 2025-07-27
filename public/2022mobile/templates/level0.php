<?php
    if ($code == "*") header('Location: ?rank=1');
    $title = "<title>Нулевой ранг - Повестка</title>";
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "#": return '<p>Ага, щаз... Пойдёшь служить, как все!</p>';
            case "level10": return '<p>You are not prepared!</p>';
            case "не буду": return '<p>Будешь-будешь, куда ты с подводной лодки денешься?</p>';
			case "не буду!": return '<p>Будешь-будешь, куда ты с подводной лодки денешься?</p>'; 
            case "секретный код с десятого уровня": return '<p>Дембель же :)</p>';
            case "дембель": return '<p class="red">Warning!<br> Ваше звание недостаточно для использования Д-слова!<br> Достигните 10-го ранга.</p>';    
            case "дембель*": return '<p><b>*Дембель</b> является зарезервированной для 10 уровня командой, преждевременное использование карается разжалованием в рядовые хакеры!</p>';    
            default: return '<p>Жми звёздочку!<br> Не задерживай товарища анонимного военкома</p>';
        }
        return false;
    } 
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="black-bg star">
        <div class="wrap">
            <div>
            <div class="center header" style="padding-top: 50vh;">Knock, knock, Neo.</div>
                <div>
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите код">
                        </p>
                    </form>
                </div>
                <div class="hint white black-bg-50">
                    <h2>Превед, <?=$team?>!</h2>
                    <p>Тебе звонят из анонимного хакерского военкомата.<br> 
                        Если хочешь получить повестку - нажми звёздочку.<br> 
                        Если не хочешь - нажми решётку.</p>
                    <p>Помни - <b>Дембель*</b> неизбежен!</p>
                    <p class="mini-text">*Дембель является зарезервированной для 10 уровня командой, преждевременное использование карается разжалованием в рядовые хакеры!</p>    
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>    
                </div>
            </div>
        </div>
    </body>
</html>