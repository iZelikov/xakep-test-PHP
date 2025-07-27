<body class="black-bg dogs">
    <div class="wrap">
        <div style="padding-top: 3vh;">
            <!-- Я буду комментировать код - честно-честно!!! -->
            <div class="header center" style="padding-top: 2vh;">Щенята! Офигенные щенята!</div>
            <div class="hint white black-bg-50">
                <form method="POST">
                    <p class="center">
                        <input class="codeinput textinput" type="text" name="code">
                        <input class="codeinput" type="submit" value="Гаф!">
                    </p>
                </form>
            <?php
                if(isset($data['hint'])) echo $data['hint']; 
            ?>                                
        </div>
    </div>
</body>