<body class="black-bg rubashka">
    <div class="wrap">
        <div>
        <div class="center header" style="padding-top: 40vh;">В палате...</div>
            <div class="hint white black-bg-50">
                <p>В палате вас поджидает любимый компьютер и два дюжих санитара со смирительной рубашкой на перевес.</p>
                <p>Не прошло пяти секунд, как вы уже спелёнуты по рукам и ногам с кляпом во рту.</p>                        

                <?php
                    if(isset($data['hint'])) echo $data['hint']; 
                ?>

            </div>
            <div>
                <form method="POST">
                    <p class="center">
                        <input class="codeinput textinput" id="in" type="text" name="code">                        
                        <input class="codeinput" type="submit" value="Помычать">
                        <input id="timer" type="hidden" name="timer" value="1000">
                        <input id="totaltime" type="hidden" name="totaltime" value="0">
                        <!-- Вряд ли человек сможет набирать носом текст быстрее одного символа в 1000 миллисекунд -->
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script>
        var start = null;
        var comment=true;
        var totalTime=0;
        function rand(max) {
            return Math.floor(Math.random() * max);
        }
        $('#in').keydown(function (e) {
            if (!start) {
                start = $.now();
                $('#timer').val(9999);
            } else {
                var timeElapsed = $.now() - start;
                start = $.now();            
                console.log(['time elapsed:', timeElapsed, 'ms'].join(' '));
                if($('#timer').val()>timeElapsed) $('#timer').val(timeElapsed);
                if($('#timer').val()<100) if($('#timer').val(1000));
                totalTime+=timeElapsed;
                $('#totaltime').val(totalTime);
                if(timeElapsed<1000){
                    $rnd = rand(10);
                    $hint=''
					switch($rnd) {
						case 0:
							hint="СтопЭ! Я видел - ты себе пальцем помог!"; 
							break;
						case 1:
							hint="Станиславский - не верю! Слишком быстро печатаешь для того, у кого руки связаны!"; 
							break;
						case 2:
							hint="Всё фигня - давай заново!"; 
							break;
						case 3:
							hint="Ой, Всё!"; 
							break;
						case 4:
							hint="Что? Сразу несколько клавиш нажалось? А кому сейчас легко?"; 
							break;
						case 5:
							hint="Это было близко - мог бы получить максимальный балл. А получишь по носу ;) "; 
							break;
						case 6:
							hint="Ещё раз руки из под рубашки вытащишь - получишь в нос!"; 
							break;
						case 7:
							hint="Будем повторять столько раз, сколько потребуется, пока не научишься носом печатать!"; 
							break;
						case 8:
							hint="Шеф, всё пропало - запорол попытку!"; 
							break;
						case 9:
							hint="Бить будем аккуратно и точно в нос"; 
							break;
						default: 
							hint="Ой, Всё!";           
					}
                    $('#hint').html(hint);    
                }    
            }
        })
    </script>   
</body>