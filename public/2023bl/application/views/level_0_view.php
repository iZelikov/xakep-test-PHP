<body class = "black-bg bedlam">
    <div class="wrap">
        <div> 
            <div class="center header" style="padding-top: 20vh;">
                <img id="logo" style = "margin-right: auto; margin-left: auto;" src="images/lamabed.png" alt="">
                <p id="header">Санаторий мечты</p>
            </div>
            <div class="hint white black-bg-50">                    
                <p id="text">Как и положено месту уединённого отдыха, санаторий "Bed Lama" прячется от любопытных взоров за крепким высоким забором, 
                    в центре старинного английского сада. Извилистая тропинка, петляя между причудливо изогнутых вековых деревьев и цветочных клумб,
                    выводит к уютному кирпичному особнячку в викторианском стиле. Кажется, никто и ничто не сможет помешать вашему отдыху. </p>                        
                <?php
                    if(!empty($data['hint'])) echo $data['hint']; 
                ?>    
            </div>
            <div class = "center">
                <form method="POST">
                    <input class="codeinput" id="back" type="button" value="Может домой?" onclick="noescape()">
                    <input class="codeinput" id="inside" type="submit" value="Смело войти">
                    <input type="hidden" name="code" value="nextlevel">  
                </form>
            </div>
        </div>
    </div>
    <script>
        function noescape() {
            document.getElementById("logo").src = "images/lamabad.png";
            document.getElementById("text").innerHTML = "Ворота за спиной с лязгом и жутким скрежетом захлопываются! <br>Бежать некуда...";
            document.getElementById("back").remove();
            document.getElementById("inside").value="Несмело постучать в дверь...";  
            document.getElementById("header").innerHTML = "Нет нам пути обратного!" 
        }
    </script>
</body>