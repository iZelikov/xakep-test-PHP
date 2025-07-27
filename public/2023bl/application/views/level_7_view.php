<body class = "white-bg">
    <div class="wrap">
        <div>
            <!-- <div class = "ror-all center">  -->
            <div class = "ror1 center">
                <img id="test-img" src="images/ror1.png" alt="">
            </div>    
            <div class="center header red" style="padding-top: 2vh;">
                <p id="header">Что вы видите на картинке?</p>
            </div>
            <div class="hint white black-bg-50">                    
                <p id="text">После перенесённой операции нам необходимо проверить ваши когнитивные способности.
                Пожалуйста, пройдите небольшое тестирование.</p>                        
                <?php
                    if(!empty($data['hint'])) echo $data['hint']; 
                ?>    
            </div>
            <div class = "center">
                <form id="form" method="POST">
                    <input class="textinput codeinput" id="field" type="text" name="code">
                    <input class="codeinput" id="send" type="button" value="Ответить" onclick="rorshah()">
                </form>
            </div>
        </div>
    </div>
    <script>
        var n = 1;
        var txt ='';
        // var name =;
        // var doc_txt =;
        function rorshah() {
            txt+=n+')'+$('#field').val()+'<br>';
            n++;
            if(n>5) {
                $('#text').html(txt +'<b><?php print($data['name']);?></b> <?php print($data['doc_txt'])?>');
                $('#header').html('Who are you?');            
                if(n>6) {
                    $('#send').attr('type', 'submit');

                }
                return false; 
            };
            $('#text').html(txt+'Что вы видите на картинке номер ' + n+'?');
            $('#test-img').attr('src','images/ror'+n+'.png');
        }
    </script>
</body>