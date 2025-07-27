<?php
    if ($code == "дембельский аккорд") header('Location: ?rank=10');
    $title = "<title>Девятый ранг - Боевое крещение</title>";

    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "глубина": return '<p>Глубина, Глубина - я не твой! Отпусти меня, Глубина...</p>';
            case "помощь": return '<p>Помощь - F1</p>';
            case "f1": return '<p>Лучше уж F12</p>';
            case "обед": return '<p>obed=false</p>';
            case "obed": return '<p>obed!=true</p>';
          	case "obed()": return '<p>Не сюда :)</p>';
          	case "ядро": return '<p>До ядра примерно 3 миллиона метров :)</p>';
            case "obed=true": return '<p>Хакеры не болтают, а ломают код!<br>Или копают...<br>Или заказывают Obed() онлайн хоть через телефон, хоть через консоль...</p>';
            case "обед скоро": return '<p>Скоро, скоро... Ты хотя бы один метр после заказа выкопал?</p>';
            case "дембель": return '<p class="red">Warning!<br> Ваше звание недостаточно для использования Д-слова!<br> Достигните 10-го ранга.</p>';    
            case "дембель*": return '<p><b>*Дембель</b> является зарезервированной для 10 уровня командой, преждевременное использование карается разжалованием в рядовые хакеры!</p>';    
            default: return '<p>Копать от забора и до обеда!<br>Это вам не на консоли играть!</p>';
        }
        return false;
    }
?>


<!doctype html>
<html lang="ru">
    <head>
        <?php include "templates/head.php" ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="black-bg">
        <div class="wrap" id="dig">
            <div class="deepmetr" id="deepmetr"></div>
            <div class ="dig">
                <div class="center" style="padding-top: 40vh;">
                    <form method="POST">                        
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <input class="codeinput" type="submit" value="Откопайте код">
                        </p>
                    </form>
                </div>
                <div class="hint white black-bg-50">
                    <h2>Капитан!</h1>
                    <P>Слушайте боевую киберзадачу для подразделения:<br>
                    1) взломать пол в условном вражеском сортире<br>
                    2) погрузиться в Глубину<br>
                    3) скачать содержимое<br>
                    4) максимально расширить свободное пространство<br>
                    5) сверхзадача - проникнуть в ядро</p>
                    <p>Выполняйте!</p>
                </div>
                <div class="hint white black-bg-50">                    
                    <?php
                        if($hint!==false) echo $hint; 
                    ?>
                </div>              
            </div>
            <div class = "scroll-div"></div>
            <div class = "scroll-div"></div>
        </div>
        <script>window.addEventListener('scroll', function() {showScroll();});
                var obed = false;
                function showScroll() {
                    var deep = Math.round(pageYOffset*0.1);
                    if(deep>2900000) Obed();
                    if(document.body.scrollHeight - pageYOffset - document.body.clientHeight < 1000) digMore();
                    document.getElementById('deepmetr').innerHTML = 'Глубина - ' + deep + ' м';
                    if(obed) showCode();
                }
                function digMore() {
                    const $newDiv = document.createElement('div');
                    $newDiv.className = "scroll-div";
                    const $dig = document.querySelector('#dig');
                    $dig.appendChild($newDiv);
                }
                function showCode() {
                    $.ajax({
                        url: 'code.php',
                        method: 'get',
                        dataType: 'html',
                        data: {text: 'Покажи код!'},
                        success: function(data){
                          	obed = false;
                            alert("Наконец-то Обед! Код - " + data);

                        }
                        });
                }

                function Obed() {
                    obed = true;
                  	return "Обед скоро - осталось выкопать совсем чуть-чуть";
                }
        </script>
    </body>
</html>

