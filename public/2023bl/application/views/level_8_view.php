<body class="black-bg oracle">    	
    <audio src="mp3/8palata-l.mp3" autoplay="autoplay"></audio>
    <div class="wrap">
        <div class="container">
            <ul class="numbers hours hoursFirst">
                <li><span>0</span></li>
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><span>6</span></li>
                <li><span>7</span></li>
                <li><span>8</span></li>
                <li><span>9</span></li>
            </ul>

            <ul class="numbers hours hoursLast">
                <li><span>0</span></li>
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><span>6</span></li>
                <li><span>7</span></li>
                <li><span>8</span></li>
                <li><span>9</span></li>
            </ul>

            <ul class="numbers minutes minutesFirst">
                <li><span>0</span></li>
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><span>6</span></li>
                <li><span>7</span></li>
                <li><span>8</span></li>
                <li><span>9</span></li>
            </ul>

            <ul class="numbers minutes minutesLast">
                <li><span>0</span></li>
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><span>6</span></li>
                <li><span>7</span></li>
                <li><span>8</span></li>
                <li><span>9</span></li>
            </ul>

            <ul class="numbers seconds secondsFirst">
                <li><span>0</span></li>
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><span>6</span></li>
                <li><span>7</span></li>
                <li><span>8</span></li>
                <li><span>9</span></li>
            </ul>
            <ul class="numbers seconds secondsLast">
                <li><span>0</span></li>
                <li><span>1</span></li>
                <li><span>2</span></li>
                <li><span>3</span></li>
                <li><span>4</span></li>
                <li><span>5</span></li>
                <li><span>6</span></li>
                <li><span>7</span></li>
                <li><span>8</span></li>
                <li><span>9</span></li>
            </ul>
        </div>
        <div>
            <div class="center header" style="padding-top: 5vh;">Knock knock, Neo</div>
            <div class="hint white black-bg-50">
                <p>В палате психи стучат гнутыми ложками по дырявым мискам. Кажется, вы даже слышите какую-то мелодию...</p>
                <p>Псих с самой гнутой ложкой поворачивает к вам бритую голову:<br>
                   - Вы спросите, мы ответим...
                     <?php if(isset($data['hint'])) echo $data['hint'];?>     
                </p>                        

            </div>
            <div>
                <form method="POST">
                    <p class="center">
                        <input class="codeinput textinput" id="in" type="text" name="code">                        
                        <input class="codeinput" type="submit" id="click" value="Спросить">
                        <input id="h" type="hidden" name="h" value="0">
                        <input id="m" type="hidden" name="m" value="0">
                        <input id="s" type="hidden" name="s" value="0">
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            const getFirstDigit = (x) => parseInt(x/10);
            const getLastDigit = (x) => parseInt(x%10);

            setInterval(()=>{
                var today = new Date();
                var hours = today.getHours();
                var minutes = today.getMinutes();
                var seconds = today.getSeconds();
                var mad_h = 23-hours;
                var mad_m = 59-minutes;
                var mad_s = 59-seconds;
                $(".secondsLast").css({
                    'transform':'rotateY(90deg) rotate('+getLastDigit(mad_s)*36+'deg)',
                });
                $(".secondsFirst").css({
                    'transform':'rotateY(90deg) rotate('+getFirstDigit(mad_s)*36+'deg)',
                });
                $(".minutesLast").css({
                    'transform':'rotateY(90deg) rotate('+getLastDigit(mad_m)*36+'deg)',
                });
                $(".minutesFirst").css({
                    'transform':'rotateY(90deg) rotate('+getFirstDigit(mad_m)*36+'deg)',
                });
                $(".hoursLast").css({
                    'transform':'rotateY(90deg) rotate('+getLastDigit(mad_h)*36+'deg)',
                });
                $(".hoursFirst").css({
                    'transform':'rotateY(90deg) rotate('+getFirstDigit(mad_h)*36+'deg)',
                });
                $('#h').val(mad_h);
                $('#m').val(mad_m);
                $('#s').val(mad_s);
                if(mad_h==7&&mad_m==40&&mad_s==0){$('#click').click();};
            },1000);            
        });
    </script>   
</body>