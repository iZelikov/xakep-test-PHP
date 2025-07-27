<body class="black-bg bedlam3">
    <div class="wrap">
        <div> 
            <div class="center header" style="padding-top: 45vh;">                                       
                Что происходит?!</div>
            <div class="hint white black-bg-50">                    
                <p>Пока вы подписывали бумаги, анонимные санитары убрали все Викторианские декорации, а миловидную медсестру заменил странного вида доктор:</p>
                <p>- Ну`с, больной... Значит вы думаете, что вы <b><?php print($data['name'])?>?</b></p>                        
                <?php             
                    if($hint!==false) echo $data['hint']; 
                ?>    
            </div>
            <div class = "hint">
                <form method="POST">
                    <input class="codeinput" type="submit" value="Проследовать в палату...">
                    <input type="hidden" name="code" value="<?php print $data['button_value'] ?>">                    
                </form>
            </div>
        </div>
    </div>
</body>