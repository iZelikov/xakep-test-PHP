<?php

class Model_Level_4 extends Model
{
	
	public function get_data()
	{
		$data['title'] = $GLOBALS['titles'][4];
		
		// if($_SESSION['role']=='doc') {
		// 	$data['sublevel'] = 'level_4_view_doc.php';
		// }

		$code = htmlentities(mb_strtolower($_POST['code'], 'utf-8'));

		if($_SESSION['role']=='doc') {
			$data['sublevel'] = 'level_4_view_doc.php';
			if($code =='sortir') {
				$data['go_to_level'] = 5;
			}
			return $data;
		};

		if(empty($_SESSION['drugs'])) {
			if($code==$GLOBALS['drugs'][0]){
				$data['sublevel'] = 'level_4_view_drugs1.php';
				$_SESSION['drugs'] = 1;
				$data['hint'] = '<p>Кокое всё красивое...</p>';
				return $data;
			};					
		} 

		if($_SESSION['drugs']==1) {
			$data['sublevel'] = 'level_4_view_drugs1.php';
			if($code==$GLOBALS['drugs'][1]) {
				$data['sublevel'] = 'level_4_view_drugs2.php';
				$_SESSION['drugs'] = 2;
				$data['hint'] = '<p>Кокое всё зелёное...</p>';
				return $data;
			}
		}

		if($_SESSION['drugs']==2) {
			$data['sublevel'] = 'level_4_view_drugs2.php';
			if($code==$GLOBALS['drugs'][2]) {
				$data['sublevel'] = 'level_4_view_drugs3.php';
				$_SESSION['drugs'] = 3;
				$data['hint'] = '<p>Коко... Ко-ко... Ко-ко-ко...</p>';
				$_SESSION['procedure'][4] = 2;
				return $data;
			}					
		}

		if($_SESSION['drugs']==3) {
			$data['sublevel'] = 'level_4_view_drugs3.php';			
			return $data;
		}	

		if(!empty($_POST['code'])){
			$code = mb_strtolower($_POST['code'], 'utf-8');

			// условия перехода на другие уровни		
			if($code =='дочки-матери') {
				$data['go_to_level'] = 5;
				$_SESSION['procedure'][4] = 1;
				return $data;
			}

			if (strpos($code, "унитаз") !==false) {
				if(empty($_SESSION['drugs'])) {
					$data['go_to_level'] = 5;
					$_SESSION['procedure'][4] = 1;				
					return $data;
				} else {
					$data['hint'] = '<p>Поздно пить боржом!</p>';
					return $data;	
				}			
			}	

			// Проверка читов и хинтов
			if(!empty($GLOBALS['cheat_hint'])) {
				$data['hint'] = $GLOBALS['cheat_hint'];
				$GLOBALS['cheat_hint'] = false;
			} else $data['hint'] = $this->check_hint($code);

			if (strpos($code, "подсказ") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a> (кликни сюда)</p>';
				return $data;						
			}
			if (strpos($code, "подскаж") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a> (кликни ссылку)</p>';
				return $data;						
			}
			if (strpos($code, "ааа") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a> (нажми на красную)</p>';
				return $data;						
			}
			if (strpos($code, "хелп") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a> (тыц!)</p>';
				return $data;						
			}
			if (strpos($code, "хэлп") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a> (кликни)</p>';
				return $data;						
			}
			
			if (strpos($code, "помог") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a> (нажми тут)</p>';
				return $data;						
			}
			
			if (strpos($code, "помощ") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a> (это ссылка)</p>';
				return $data;						
			}
			
			if (strpos($code, "дальш") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a></p>';
				return $data;						
			}
			
			if (strpos($code, "след") !==false) {
				$data['hint'] = '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a> (F5)</p>';
				return $data;						
			}

			if (strpos($code, "рецепт") !==false) {
				$data['hint'] = '<p>Рецепт находится <a class = "red" href="card/" target=_blank>вот по этой ссылке</a> (нажми на неё)</p>';
				return $data;						
			}

			if (strpos($code, "фенобарбитал, коаксил") !==false) {
				$data['hint'] = '<p>По 1 таблетке, а не все сразу!</p>';
				return $data;						
			}
			if (strpos($code, "фенобарбитал, псилоцибин") !==false) {
				$data['hint'] = '<p>По 1 таблетке, а не все сразу!</p>';
				return $data;						
			}

		}

		return $data;
	}

	public function check_hint($str) {
		$str = mb_strtolower($str, 'utf-8');			
		switch($str) {
			case "лживый кусь": 
				$_SESSION['godmode'] = "on";
				return '<p>Здоровенный ирландский волкодав вдруг вырастает за вашей спиной и делает Лживый Кусь!</p><p> 
				Очень странное ощущение... Кажется, вы больше не человек...</p>';								
            case "гаф": return '<p>Гаф-Гаф!</p>';
            case "гав": return '<p>Гав-Гав!</p>';
            case "гаф!": return '<p>Гаф-Гаф!</p>';
            case "гав!": return '<p>Гав-Гав!</p>';
            case "милота": return '<p>Милота может сделать Кусь!</p>';
            case "нятость": return '<p>Нятость может сделать Кусь!</p>';
            case "щенята": return '<p>Щенята могут сделать Кусь!</p>';
            case "собачки": return '<p>Собачки могут сделать Кусь!</p>';
            case "кусь": return '<p>Не обычный... Особенный чеховский Кусь!</p>';
            case "чеховский кусь": return '<p>Неа, не скажу :)</p>';
            case "особенный чеховский кусь": return '<p>Неа, не скажу :)</p>';
            case "кусь за попу": return '<p>Обязательно! И не только за попу. Но потом.</p>';
            case "свободу попугаям": return '<p>Кусь за попугаев!</p>';
            case "не страна, а обосраться просто!": return '<p>Это вам предстоит в следующей палате</p>';
            case "не страна а обосраться просто": return '<p>Это вам предстоит в следующей палате</p>';
			case "псилоцибин": return '<p>Не нарушайте порядок приёма лекарства!</p>';
			case "коаксил": return '<p>Не нарушайте порядок приёма лекарства!</p>';
			case "фенобарбитал": return '<p>Не нарушайте порядок приёма лекарства!</p>';
            case "таблетки": return '<p>Ваш курс препаратов прописан в <a class = "red" href="card/" target=_blank>медкарте</a></p>';
            case "пей таблетки": return '<p>Ваш курс препаратов прописан в <a class = "red" href="card/" target=_blank>медкарте</a></p>';
            case "дед пей таблетки": return '<p>Ваш курс препаратов прописан в <a class = "red" href="card/" target=_blank>медкарте</a></p>';
            case "дед, пей таблетки": return '<p>Ваш курс препаратов прописан в <a class = "red" href="card/" target=_blank>медкарте</a></p>';        
            case "дай подсказку": return '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a></p>';        
            case "аааа пусти дальше": return '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a></p>';        
            case "пусти дальше": return '<p>Дед, пей таблекти, указанные в <a class = "red" href="card/" target=_blank>твоей медкарте</a></p>';        
            case "а то получишь по жопе": return '<p>Кусь за попу!</p>';        
            case "а то получишь по попе": return '<p>Кусь за попу!</p>';        
            case "фенобарбитал, псилоцибин, коаксил": return '<p>Не все сразу же!</p>';        
            case "фенобарбитал, псилоцибин, коаксил - по 1 таблетке": return '<p>По 1 таблетке, а не все сразу!</p>';        
            default: return '<p>Большое видится на расстоянии</p>';
		}
		return false;
	} 
}


