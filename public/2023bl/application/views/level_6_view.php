<body class="black-bg lobotomia">
    <div class="wrap">
        <div> 
            <div class="center header" style="padding-top: 2vh;">Будем лечить <br>или пусть живёт?</div>
            <div class="hint white black-bg-50">
                <p>Доктор заглядывает в медкарту и сокрушённо качает головой:</p>
                <p>- Ваше раздвоение личности прогрессирует, <?php print($_SESSION['name']) ?>!<br>
                Медикаментозная терапия оказалась неэфффективной.  
                Нам придётся прибегнуть к экстренной лоботомии, пока не стало слишком поздно! 
                Так каждая из ваших личностей получит по собственному полушарию мозга и сможет в относительном спокойствии дожить до эвтаназии.</p>                   
                    
            </div>
            <div>
                <form method="post">
                    <p class="center">
                        <input class="codeinput textinput" name="moo" type="text">                        
                        <input class="codeinput" type="submit" value="Помычать">                        
                    </p>
                </form>
            </div>
            <?php
                if(isset($data['hint'])) print($data['hint']);       
            ?> 
            <div>
                <form method="post">
                    <p class="center">                  
                        <input class="codeinput" type="submit" value="Давайте лоботомию...">
                        <input type="hidden" name="code" value="lobotomia">                        
                    </p>
                </form>
            </div>
        </div>
    </div>
</body>