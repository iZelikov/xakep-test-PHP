<body class="black-bg matrix"> 	
    <div class="wrap">
        <div>
            <div class="center header" style="padding-top: 50vh;">Matrix has you!</div>
            <div class="hint white black-bg-50">
                <p>Падают, падают, падают, падают буквы... </p>
                <?php if(isset($data['hint'])) echo $data['hint'];?>                               

            </div>
            <div>
                <form method="POST">
                    <p class="center">
                        <input class="codeinput textinput" id="in" type="text" name="code">                        
                        <input class="codeinput" type="submit" value="???">
                    </p>
                </form>
            </div>
        </div>
    </div>   
</body>