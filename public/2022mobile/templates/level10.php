<?php
    if ($_GET['finish']=='no') $_SESSION['finish'] = false;
    if ($code == "дембель") {$_SESSION['finish'] = true;
    }

    if($hint===false && $code!==false) $hint= check_hint($code);
    function check_hint($str){
        switch($str) {
            case "дембель*": return '<p>Дембель!</p>';               
            default: return '<p>Дембель!</p>';
        }
        return false;
    }

if($_SESSION['finish']) include "templates/finish.php"; 
else echo "<head><title>Десятый ранг - Дембель в поисках дембельской формы...</title></head>"    


?>
