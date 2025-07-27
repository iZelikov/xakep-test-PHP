<?php
	session_start();
	define('MIN_LEVEL', 0);
	define('MAX_LEVEL', 10);
	$level = get_level();
	$code = get_code();
	$team = get_team();
	$ip = getIp();
    $hint=check_cheat_codes($code);
	log_code($ip, $code);

	$_SESSION['level'] = $level;
	remove_level_from_GET();

	$path = "templates/level".$level.".php";
	include $path;	
?>



<?php 
//Functions section
	function getIp() {
		$keys = [
		'HTTP_CLIENT_IP',
		'HTTP_X_FORWARDED_FOR',
		'REMOTE_ADDR'
		];
		foreach ($keys as $key) {
		if (!empty($_SERVER[$key])) {
			$ip = trim(end(explode(',', $_SERVER[$key])));
			if (filter_var($ip, FILTER_VALIDATE_IP)) {
			return $ip;
			}
		}
		}
	}

	function get_level(){
		$l = 0;
		$str = "";
		if (isset($_SESSION['level'])) {
			$l = $_SESSION['level'];
		} 
		if (isset($_GET['level'])) {
			$l = $_GET['level'];			
		}
		if (isset($_POST['code'])) {			
			$str = strtolower($_POST['code']);
			if ($str == "idclev0a" || $str == "idclev 0a") return 10;
			if (strpos($str, "idclev") !==false) $l = preg_replace('/[^0-9]/', '', $str);			 
		} 
		$l=(int)$l;
		if ($l<MIN_LEVEL || $l>MAX_LEVEL) return 0; 
		else return $l;	
	}

	function get_code(){
		if (isset($_POST['code'])) return mb_strtolower($_POST['code'], 'utf-8');
		else return false; 		
	}

	function get_team(){
		$t = "Anonymous";
		if (isset($_GET['team']) and !isset($_SESSION['team'])){
			$_SESSION['team'] = $_GET['team'];
		}
		if (isset($_GET['team'])) $t=strtolower($_GET['team']);	
		return get_team_name($t);
	}

	function get_team_name($t){
		switch($t) {
			case "kupina":
				return "КУПИНА-Н";
				break;
			case "victory":
				return "Виктория – Union Industrials";
				break;
			case "voi":
				return "Весёлые Остроумные Интеллектуалы";
				break;			
			case "pro":
				return "Профессиональные дилетанты";
				break;
			case "bookworms":
				return "Книжные черви";
				break;
			case "star":
				return "Звезда";
				break;
			case "zavtra":
				return "Завтра будет";
				break;
			case "lenkom":
				return "ЛенКом";
				break;							
			case "podolsk":
				return "Эдельвейс";
				break;	
			case "pass":
				return "Случайные пассажиры";
				break;
			case "misli":
				return "Мыслители";
				break;
			case "kino":
				return "КИНО";
				break;
			case "eagl":
				return "Орлята";
				break;
			case "brain":
				return "Пытливые умы";
				break;
			case "wolf":
				return "Тамбовский Волк";
				break;
			case "optimist":
				return "Неунывающие оптимисты";
				break;
			case "fenix":
				return "Феникс";
				break;	
			case "iva":
				return "Ивнянские знатоки";
				break;
			case "bems":
				return "БЭМС";
				break;	
		
			default: 
				return "Anonymous";
				break;
		} 		
	}

	function log_code($ip, $code){
		$name=get_team_name($_SESSION['team']);		
		if ($code !== false) {
			$city = get_city_name($ip);					
			$log = date('Y-m-d H:i:s')."\t".$ip."\t".$city."\t".$name."\t".$code;
			file_put_contents(__DIR__ . '/logs/log.txt', $log . PHP_EOL, FILE_APPEND);
		}	
	}

	function get_city_name($ip){
		require_once 'SxGeo.php';
		// подключаем файл с базой данных городов
		$SxGeo = new SxGeo('SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
		$city = $SxGeo -> get($ip);
		return $city['city']['name_ru'];
	}

	function check_cheat_codes($str){
		switch($str) {
			case "iddqd": return '<p><b class="red">GodMode - ON</b><br> Да вы, батенька, читер! Может сразу на 10-й уровень пойдёте?</p>';
			case "idkfa": return '<p><b class="red">Бесконечные патроны!</b><br> Да вы, батенька, читер! Может сразу на 10-й уровень пойдёте?</p>';	
			case "idfa": return '<p><b class="red">Бесконечные патроны!</b><br> Да вы, батенька, читер! Может сразу на 10-й уровень пойдёте?</p>';
			case "idclip": return '<p><b class="red">Ходим сквозь стены!</b><br> Осталось найти стену</p>';
			case "idclev0": return '<p>Ты читерски вернулся в начало. А зачем?</p>';
			case "idclev 0": return '<p>Ты читерски вернулся в начало. А зачем?</p>';
			case "idclev1": return '<p>И зачем тебе читы к первому уровню? Там же код был прямым текстом написан!</p>';
			case "idclev 1": return '<p>И зачем тебе читы к первому уровню? Там же код был прямым текстом написан!</p>';
			case "idclev2": return '<p><b class="red">Читерский прыжок на level 2</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev 2": return '<p><b class="red">Читерский прыжок на level 2</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev 3": return '<p><b class="red">Читерский прыжок на level 3</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev3": return '<p><b class="red">Читерский прыжок на level 3</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev4": return '<p><b class="red">Читерский прыжок на level 4</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev 4": return '<p><b class="red">Читерский прыжок на level 4</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev5": return '<p><b class="red">Читерский прыжок на level 5</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev 5": return '<p><b class="red">Читерский прыжок на level 5</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev6": return '<p><b class="red">Читерский прыжок на level 6</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev 6": return '<p><b class="red">Читерский прыжок на level 6</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev7": return '<p><b class="red">Читерский прыжок на level 7</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev 7": return '<p><b class="red">Читерский прыжок на level 7</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev8": return '<p><b class="red">Читерский прыжок на level 8</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev 8": return '<p><b class="red">Читерский прыжок на level 8</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev9": return '<p><b class="red">Читерский прыжок на level 9</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev 9": return '<p><b class="red">Читерский прыжок на level 9</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "idclev10": return '<p><b class="red">Читерский прыжок на level 10</b> <br>А без кода очков всё равно не дадут :P</p>';
			case "godmode": return '<p>Если подумать, то штука довольно бесполезная. <br>А вот хождение сквозь стены или пропуск уровня...</p>';
			case "doom iddqd": return '<p>Не IDDQD единым...</p>';
			case "iddqd doom": return '<p>Не IDDQD единым...</p>';
			case "дум iddqd": return '<p>Не IDDQD единым...</p>';
			case "iddqd дум": return '<p>Не IDDQD единым...</p>';
			case "чит-коды": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "чит-код": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "чит коды": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "читы": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "cheat": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "cheat-codes": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "cheat codes": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "cheat-code": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "cheat codes": return '<p>Что я вам яндекс что ли? Сами гуглите!</p>';
			case "hex": return '<p>Неправильный вопрос правильный - Hex To Text.</p>';
			case "hex to text": return '<p>Не меня надо спрашивать, а Гугл!</p>';
			case "фишинг": return '<p>Поймал хакер золотую рыбку, а она и говорит: <br>
            							- Исполню три желания!<br>
            							- IDDQD, IDKFA и в АД!</p>';
			default: return false;
		}
		return false;
	}
	
	function remove_level_from_GET() {
		if (isset($_GET['level'])) {
			$url = remove_key('level');
			header("location:".$url);
		}
		if (isset($_GET['spm'])) {
			$url = remove_key('spm');
			header("location:".$url);
		}		
	}

	function remove_key($key) {
		parse_str($_SERVER['QUERY_STRING'], $vars);
		if (count($vars)>1) return strtok($_SERVER['REQUEST_URI'], '?').'?'.http_build_query(array_diff_key($vars,array($key=>"")));
		else return strtok($_SERVER['REQUEST_URI'], '?').http_build_query(array_diff_key($vars,array($key=>"")));
	}

 ?>