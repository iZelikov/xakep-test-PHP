<?php 
    class Cheats {

        static public function check() {
            if(isset($_POST['code'])) {
                $code = mb_strtolower($_POST['code'], 'utf-8');
                if (strpos($code, "map") !==false) {
                    $l = preg_replace('/[^0-9]/', '', $code);
                    $l=(int)$l;
                    Route::go_to_level($l);    
                    return true;
                }
                $GLOBALS['cheat_hint'] = Cheats::check_cheat_hint($code);
            }
            return false; 
        }

        static function check_cheat_hint($str){
            switch($str) {
                case "iddqd":
                    if($_SESSION['godmode']=='on') {
                        $_SESSION['godmode'] = 'off';
                        return '<p><b class="red">GodMode OFF</p></b></p>';
                    } else {
                        $_SESSION['godmode'] = "on";
                        return '<p><b class="green">GodMode ON</p></b></p>';
                    }
                case "god": 
                    if($_SESSION['godmode']=='on') {
                        $_SESSION['godmode'] = 'off';
                        return '<p><b class="red">GodMode OFF</p></b></p>';
                    } else {
                        $_SESSION['godmode'] = "on";
                        return '<p><b class="green">GodMode ON</p></b></p>';
                    }
                case "idkfa": return '<p><b class="red">Чит-код отключён</b></p>';	
                case "idfa": return '<p><b class="red">Чит-код отключён</b></p>';
                case "idclip": return '<p><b class="red">Чит-до отключён</b></p>';
                case "idclev0": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 0": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev1": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 1": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev2": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 2": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 3": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev3": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev4": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 4": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev5": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 5": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev6": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 6": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev7": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 7": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev8": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 8": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev9": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev 9": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "idclev10": return '<p>Чит-код отключён, ищите другой способ (или другой чит-код).</p>';
                case "godmode": return '<p>Если подумать, то штука довольно бесполезная. <br>Или нет... <br>(достигается введением чит-кодов)</p>';
                case "doom iddqd": return '<p>ЭТО лучше чем DOOM!</p>';
                case "iddqd doom": return '<p>ЭТО лучше чем DOOM!</p>';
                case "дум iddqd": return '<p>ЭТО лучше чем DOOM!</p>';
                case "iddqd дум": return '<p>ЭТО лучше чем DOOM!</p>';
                case "чит-коды": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "чит-код": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "чит коды": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "читы": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "cheat": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "cheat-codes": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "cheat codes": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "cheat-code": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "cheat codes": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
                case "фишинг": return '<p>Поймал админ золотую рыбку, а она и говорит: <br>
                                            - Исполню три желания!<br>
                                            - IDDQD, map6 и на Лоботомию!</p>';
                default: return false;
            }
            return false;
        } 
    }
?>