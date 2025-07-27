<body class="black-bg">
    <div class="wrap">
        <div>            
            <div class="center header" style="padding-top: 0vh;">
                <p><img style = "margin-right: auto; margin-left: auto;" src="images/tupik.jpg" alt="Приходите завтра!"></p>                    
                Не тут-то было!</div>
            <div class="hint white black-bg-50">                    
                <p>За разговорчики с санитаром вас отправили в подвальный карцер на сутки - посидеть и подумать над своим поведением.</p>
                <p>Здесь совершенно нечем заняться, кроме как медитировать на гигантские крепко запертые двери.</p>
                <p>Судя по звукам, за ними скребутся какие-то дикие звери...</p>
                <p id="hint">                        
                    <?php
                        if(isset($data['hint'])) echo $data['hint']; 
                    ?>
                </p>    
            </div>
            <div class = "center">
                <form method="POST">
                    <p>
                        <input class="codeinput" type="submit" value="Постучать в дверь" onmousedown="myDate()">
                        <input type="hidden" id="day" name="day" value="0">
                    </p>
                </form>
                <form method="POST">
                    <p>
                        <input class="codeinput hidden" type="submit" value="Побиться об дверь головой">
                        <input type="hidden" name="code" value="headpunch">
                    </p>
                </form>
                <!-- <form method="POST">
                    <input class="codeinput" type="submit" value="Копать подкоп ложкой">
                    <input type="hidden" name="code" value="dig">  
                </form> -->
            </div>
        </div>
    </div>
    <script>
        $(document).ready(myDate);
        function myDate(){
            var now = new Date();
            var day = now.getDate();
            $('#day').val(day);
        }
    </script>
</body>