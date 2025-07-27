<?php
    if ($code == "медкомиссия") header('Location: ?rank=2');
    $title = "<title>Первый ранг - Анонимный военкомат</title>";
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "level2": return '<p>В прошлый раз не сработало, а сейчас и подавно!</p>';
            case "код": return '<p>Мысль интересная, но... нет. </p>';
            case "можно пойти домой?": return '<p>Нельзя</p>';
            case "пойти домой": return '<p>Нет нам пути обратного</p>';
            case "табличка": return '<p>Она родимая</p>';
            case "секретный код": return '<p>Отложите этот вариант до 7 уровня!</p>';
            case "level1": return '<p>Стой! Раз-два! </p>';
			case "level10": return '<p>You are not prepared!</p>';
            case "level 10": return '<p>You are not prepared!</p>';
            case "level0": return '<p>Нет нам пути обратного!</p>';
            case "домой": return '<p>К маме захотелось? You are in army now!</p>';
            case "кода нет": return '<p>На небе кода нет, но кода нет и ниже...</p>';
            case "кода нет :(": return '<p>На небе кода нет, но кода нет и ниже...</p>';
            case "это-не-код": return '<p>Сказано же, что это не код. Ищи дальше!</p>';
            case ":(": return '<p>Не грусти - возьми печеньку. <br>Отставить! Империалистические печеньки раздавали в прошлый раз!</p>';
            case "levelup": return '<p>Вот придёт товарищ сержант... когда-нибудь...</p>';
            case "левелап": return '<p>Вот придёт товарищ сержант... когда-нибудь...</p>';
            case "секретный код с десятого уровня": return '<p>Дембель же :)</p>';
            case "404": return '<p>У нас все страницы на месте!</p>';    
            case "Ctrl+Alt+Del": return '<p>Ну не настолько буквально...</p>';
            case "дембель": return '<p class="red">Warning!<br> Ваше звание недостаточно для использования Д-слова!<br> Достигните 10-го ранга.</p>';    
            case "дембель*": return '<p><b>*Дембель</b> является зарезервированной для 10 уровня командой, преждевременное использование карается разжалованием в рядовые хакеры!</p>';    
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
    <body class="black-bg star">
        <div class="wrap">
            <div>
                <div class="header center" style="padding-top: 50vh;">Никого нету! <span class="black">Это-не-код</div>
                <div>
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Введите код">
                        </p>
                    </form>
                </div>
                <div class="hint white black-bg-50">
                    <h2>Анонимный военкомат пуст и тёмен</h2>
                    <p>Можно пойти домой... <br>А можно поискать в пыльных углах секретный код доступа...<br>Или хотя бы ручку двери.</p>
                    <?php
                        if($hint!==false) echo $hint;                      
                    ?>
                </div>
                <div class="header center" style="padding-top: 50vh;"><p class="black">В подвале тускло светится табличка "Медкомиссия"</p></div>               
            </div>
        </div>
    </body>
</html>

<?php 

?>