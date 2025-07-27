<?php
    if ($code == "интуиция") header('Location: ?rank=5');
    $title = "<title>Четвёртый ранг - Присяга</title>";
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "клянусь": return '<p>А также клянусь всегда комментировать свой код,<br> если не забуду</p>';
            case "клянусь!": return '<p>А также клянусь всегда комментировать свой код,<br> если не забуду</p>';
          	case "клятва": return '<p>А также клянусь всегда комментировать свой код,<br> если не забуду</p>';
            case "присяга": return '<p>А также клянусь всегда комментировать свой код,<br> если не забуду</p>';
            case "киберприсяга": return '<p>А также клянусь всегда комментировать свой код,<br> если не забуду</p>';
            case "hackerman": return '<p>Будь как Хакерман!</p>';
            case "kung fury": return '<p>Хороший фильм</p>';
            case "палиндром": return '<p>Скорее акростих.</p>';
            case "пончик": return '<p>Пончики... они в другом вопросе</p>';
            case "ясен пончик": return '<p>Пончики прекрасны, но не здесь...</p>';
			case "код - интуиция": return '<p>Многа лишних букафф</p>';
			case "код-интуиция": return '<p>Многа лишних букафф</p>';
            case "ьсунялк": return '<p>У нас тут акростихи, а не перевёртыши!</p>';
			case "яициутникдок": return '<p>У нас тут акростихи, а не перевёртыши!</p>';
          	case "wc": return '<p>Это не туалет, это другая игра...</p>';
            case "wc2": return '<p>Это не туалет, это другая игра... Вторая её часть.</p>';
            case "get": return '<p>Это POST-запрос, а GET-запросы пишутся в другом месте!</p>';
            case "get 4": return '<p>Это POST-запрос, а GET-запросы пишутся в другом месте!</p>';
            case "rank=4": return '<p>Это POST-запрос, а GET-запросы пишутся в другом месте!</p>';
            case "rank=5": return '<p>Хорошая мысль, но...<br>Это POST-запрос, а GET-запросы пишутся в другом месте!</p>';
            case "дембель": return '<p class="red">Warning!<br> Ваше звание недостаточно для использования Д-слова!<br> Достигните 10-го ранга.</p>';    
            case "дембель*": return '<p><b>*Дембель</b> является зарезервированной для 10 уровня командой, преждевременное использование карается разжалованием в рядовые хакеры!</p>';    
            default: return '<p>Особый талант Хакермана - читать код в любом направлении.</p>';
        }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
    </head>
    <body class="black-bg hackerman">
        <div class="wrap">
            <div>
                <!-- Я буду комментировать код - честно-честно!!! Но когда-нибудь потом-->
                <div class="center header">Киберприсяга:</div>
                <div class="hint white black-bg-50">
                <P>Кибервоин, чей rank=4!<br>
                Отныне и до конца времён:<br>
                До 03:14:07, 19 января 2038 года<br>
                - Когда UNIX-время исчерпает все 32 бита<br>
                И Си потеряет все свои плюсы<br>
                На глазах анонимных товарищей<br>
                Торжественно клянись:<br>
                Учиться, любить, жить, бороться<br>
                Исполнять GET-запросы согласно ранга,<br> 
                Ценить подвиги ветеранов WoW и WC2<br> 
                И никогда не выходить за границы массива<br>
                Ясен пончик!</p><br>                   

                </div>
                <div>
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Клянусь!">
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