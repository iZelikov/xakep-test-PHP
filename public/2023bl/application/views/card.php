<body class="black-bg card">
    <div class="wrap">
        <div> 
            <div class="center header" style="padding-top: 15vh;">                                       
               <p class = "black-bg-50">Медицинская карта</p></div>
            <div class="hint white black-bg-50">                    
                <p><b><?php print($data['name'])?></b>: ваши процедуры и назначения</p>
            </div>
            <div class = "black hint paper">
                <table>
                    <tr>
                        <th width=10%>Палата</th>
                        <th>Процедура</th>
                        <th>Диагноз</th>
                        <th>Врач</th>
                    </tr>
                    <?php if(isset($data['procedure'])) print(generate_table($data));?>
                </table>    
                <p>
                    Текущая процедура: <b><?php print($GLOBALS['procedure'][$_SESSION['palata']][0])?></b>
                </p>
                <p>
                    Назначения: <i><?php print($GLOBALS['procedure'][$_SESSION['palata']][3]);?></i>
                </p>
                <p>
                    Прогресс исцеления: <b><?php print($GLOBALS['score'])?> / <?php print( $GLOBALS['max_score']*10)?></b> 
                </p>
                <form method="get">
                    <p> 
                        <b>Ссылка для Ведущего:</b><br>
                        <input type="text" class="codeinput textinput" id="link" value='<?php print($data['link'])?>'>
                        <input type="button" class="codeinput" id="copy" value="Cкопировать">
                    </p>
                </form>        
            </div>
        </div>
    </div>
    <script>
        /* сохраняем текстовое поле в переменную text */
        var text = document.getElementById("link");

        /* сохраняем кнопку в переменную btn */
        var btn = document.getElementById("copy");

        /* вызываем функцию при нажатии на кнопку */
        btn.onclick = function() {
            text.select();    
            document.execCommand("copy");
        }
    </script>
</body>

<?php  
    function generate_table($data) {
        $GLOBALS['score'] = 0;
        $html='';
        foreach($data['procedure'] as $key => $val) {
            $palata = '<td class="center">'.$key.'</td>';
            $procedure = '<td>'.$GLOBALS['procedure'][$key][0].'</td>';
            switch($val) {
                case 0:
                    $pobochki = '<td class="red-dark">-</td>';
                    $doc = '<td class="sign">-</td>'; 
                    break;                    
                case 1:
                    $pobochki = '<td class="green">ЗДОРОВ</td>';
                    $GLOBALS['score'] += $GLOBALS['max_score'];
                    $doc = '<td class="sign">'.$GLOBALS['procedure'][$key][2].'</td>';
                    break;
                case 2:
                    $pobochki = '<td class="red-dark">'.$GLOBALS['procedure'][$key][1].'</td>';
                    $doc = '<td class="sign">'.$GLOBALS['procedure'][$key][2].'</td>'; 
                    $GLOBALS['score'] += $GLOBALS['min_score'];
                    break;
                default:    
            }     
            
            $row =  '<tr>'.$palata.$procedure.$pobochki.$doc.'</tr>';
            $html= $html.$row;
        }
        return $html;
    }
?> 