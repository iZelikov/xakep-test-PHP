<?php
    if ($code == "ctrhtnysq rjl") header('Location: ?rank=8');
    $title = "<title>Седьмой ранг - Допуск к коду</title>";
    
    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "no comments": return '<p>Как это ноу?! Знаешь как я запарился?!!</p>';
            case "nocomments": return '<p>Как это ноу?! Знаешь как я запарился?!!</p>';
            case "нет комментариев": return '<p>Да их там тысячи! Осталось только забраться под капот.</p>';
            case "без комментариев": return '<p>Комментарии там внутре!</p>';
            case "коментарии": return '<p>Комментарии - ключ к пониманию секретов чужого кода</p>';
            case "дисковод": return '<p>Сейчас весь код хранят в интернете...</p>';
            case "да-да именно так": return '<p>Послушай хакера - сделай наоборот.</p>';
            case "да-да именно так!": return '<p>Послушай хакера - сделай наоборот.</p>';
            case "код секретный": return '<p>Английским по белому написано же - ctrhtnysq rjl</p>';
          	case "секретный код": return '<p>Почти угадал %)<br> 
            							  <b style="color:black">njkmrj d lheujq hfcrkflrt</b></p>';
            case "секретный код.": return '<p>Gjxnb euflfk ^)</p>';
            case "всё равно этот бред никто не читает": return '<p>Ты же читаешь.<br>
            								F pyfxbn hfyj bkb gjplyj j,yfhe;bim ctrhtnysq rjl</p>';  
            case "click me": return '<p>Cyfxfkf ye;yj dcnfdbnm ctrhtnysq rjl</p>';            
            case "дембель": return '<p class="red">Warning!<br> Ваше звание недостаточно для использования Д-слова!<br> Достигните 10-го ранга.</p>';    
            case "дембель*": return '<p><b>*Дембель</b> является зарезервированной для 10 уровня командой, преждевременное использование карается разжалованием в рядовые хакеры!</p>';    
            default: return '<p>Сплошное бла-бла-бла и никаких видимых кодов :(</p>';
        }
        return false;
    }
?>

<!doctype html>
<html lang="ru">
    <!-- Кибервоин! Всегда комментируй свой код -->
    <head>
        <!-- Это заголовок ХТМЛ страницы, здесь мы подключаем скрипты и ЦСС -->
        <?php include "templates/head.php" ?>
    </head>
    <!-- В угловых скобочках находятся теги, если хоть одна скобочка потеряется, код превратится в кашу -->
    <body class="black-bg">
        <!-- Это тело ХТМЛ страницы, здесь мы размещаем контент-->
        <!-- Класс black-bg намекает, что фон страницы будет чёрным -->
        <div class="wrap">
            <!-- Это обёрточный контейнер, весь контент внутри него будет ограничен по ширине -->
            <div class=center>
                <!-- в этом контейнере наконец-то содержится контент... как же мне надоело писать эти комменты! -->
                <img style="margin-left: auto; margin-right: auto;" src="images/nocomments.jpg" alt="">
                <!-- Затравочная картинка - привлекает внимания, но никакой пользы не несёт. Или нет... -->
                <div class="hint white black-bg-50">
                <!-- Бла-бла-бла какой-то текст... Всё равно это читать никто не будет :( -->
                <h2>Кибервоин!</h2>
                <P><!-- Хрррр...  ksdfvls klsx kcdo s;o,.-->
                Родина доверяет тебя самую надёжную кибертехнику<br>
                <!-- Чугунивую ,jv,e yb erhfcnm? yb gjcnjhj;bnm? yb ckjvfnm -->
                Самые большие в мире микропроцессоры<br>
                <!-- c itcnyflwfnm. yj;rfvb b ldevz hexrfvb lkz gthtyjcrb -->
                Самые толстые дискеты<br>
                <!-- С деревянным магнитным сердечником, dc` hfdyj 'njn ,htl ybrnj yt edblbn -->
                И самые длинные алгоритмы!</p>
                <!-- zpsr flf - yfit dc` -->
                <p>Не подведи Родину!</p>
                <!-- Fvbym -->
                </div>
                <div>
                <!-- f djn c.lf yflj gbcfnm ctrhtnysq rjl b 'njn rjl yf cfvjv ltkt ctrhtnysq rjl? lf-lf bvtyyj nfr! -->
                    <form method="POST">
                        <p class="center">
                            <input class="codeinput textinput" type="text" name="code">
                            <!-- Это пустое поле воода и никто никогда не узнает, xnj lfkmit z gbie dczre. kf,ele -->
                            <input class="codeinput" type="submit" value="Вставить код сюда">
                            <!-- click me! -->
                        </p>
                    </form>
                </div>
                <!-- А вот тут появляются всякие дурацкие советы, которые Dtleobq yf [jle ghblevsdfn? rjulf h;`n yfl dfibvb dfhbfynfvb -->
                <div class="hint white black-bg-50">                                   
                <?php
                    if($hint!==false) echo $hint; 
                ?>    
                </div>                
            </div>
        </div>
    </body>
    <!-- Наконец отмучился! -->
</html>