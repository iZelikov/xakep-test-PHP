<?php

	class Model_Level_3 extends Model
	{
		
		public function get_data()
		{
			$data['title'] = $GLOBALS['titles'][3];
			
			// if($_SESSION['role']=='doc') {
			// 	$data['sublevel'] = 'level_3_view_doc.php';
			// }
			if($_SESSION['role']=='doc') $data['sublevel'] = 'level_3_view_doc.php';

			if(isset($_POST['code'])){
				$code = htmlentities($_POST['code']);

				// условия перехода на другие уровни		
				if($code =='dig') {
					$data['go_to_level'] = 8;
					$_SESSION['procedure'][3] = 1;
					return $data;
				}

				if($code =='palata4'&&$_SESSION['role']=='doc') {
					$data['go_to_level'] = 4;
					return $data;
				}

				if($code =='palata4') {
					$data['go_to_level'] = 4;
					$_SESSION['procedure'][3] = 1;
					return $data;
				}

				if($code =='palata4m') {
					$data['go_to_level'] = 4;
					$_SESSION['procedure'][3] = 2;
					return $data;
				}

				// Проверка читов и хинтов
				if(!empty($GLOBALS['cheat_hint'])) {
					$data['hint'] = $GLOBALS['cheat_hint'];
					$GLOBALS['cheat_hint'] = false;
				} else $data['hint'] = $this->check_hint($code);

				if($code =='nextlevel') {
					$data['hint'] ='Хакер что ли? А вот фиг тебе, хакер, а не следующий уровень! Будешь до завтра тут сидеть!';
				}
			}

			$today = date("j");
			if(!empty($_POST['day'])){    
				if($_POST['day']>$today) {  
					$data['hint'] = 'Надо же! Уже завтра - можете выходить!
							<form method="post">                     
								<input type="submit" class="codeinput" value = "Войти в страшную дверь">
								<input type="hidden" name="code" value="palata4">
							<form>';
				} else {
					$rnd = rand(1,3);
					switch($rnd) {
						case 1:
							$data['hint']="Написано же, приходите завтра, а вы всё время сегодня приходите!"; 
							break;
						case 2:
							$data['hint']="А сегодня в завтрашний день, не все могут смотреть. Вернее, смотреть могут не только лишь все, не каждый может это делать."; 
							break;
						case 3:
							$data['hint']="Вы кто такие?!<br>".$_SESSION['name']."? <br>Я вас не знаю! Приходите завтра!"; 
							break;
						default: 
							$data['hint']="Приходите завтра!";           
					}
				}
			} 

			return $data;
		}

		public function check_hint($str) {
			$str = mb_strtolower($str, 'utf-8');			
			switch($str) {		
  				case "headpunch": return '<p>В отчаянии вы бодаете дверь с разгону головой. К вашему изумлению, она тут же отворяется<br>				  
										<form method="post">                     
											<input type="submit" class="codeinput" value = "Войти в страшную дверь">
											<input type="hidden" name="code" value="palata4m">
										<form></p>'; 
				default: return '<p>А в столовой сейчас ужин... ;)</p>';
			}
			return false;
		} 
	}
?>
