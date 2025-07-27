<?php

class Model_Level_9 extends Model
{
	
	public function get_data()
	{
		$data['title'] = $GLOBALS['titles'][9];

		$code = htmlentities(mb_strtolower($_POST['code'], 'utf-8'));

		if($_SESSION['role']=='doc') {
			$code = mb_strtolower($_POST['code'], 'utf-8');
			$data['sublevel'] = 'level_9_view_doc.php';
			if($code =='palata10') {
				$data['go_to_level'] = 10;
			}
			return $data;
		};

		if (strpos($code, "кадр") !==false) {
			$data['hint'] = '<p>Да! Точно 25-й кадр... или 24-й... Я уже не помню... Всё там.</p>';
			return $data;						
		}
		
		if (strpos($code, "25") !==false) {
			$data['hint'] = '<p>Да! Точно 25-й кадр... или 24-й... Я уже не помню... Всё там.</p>';
			return $data;						
		}	

		if (strpos($code, "двадцать пятый") !==false) {
			$data['hint'] = '<p>Да! Точно 25-й кадр... или 24-й... Я уже не помню... Всё там.</p>';
			return $data;						
		}	

		// условия перехода на другие уровни		
		if($code =='глубина глубина я не твой'
			||$code=='глубина, глубина, я не твой'
			||$code=='глубина - глубина я не твой'
			||$code=='глубина - глубина, я не твой') {
			$data['go_to_level'] = 10;
			$_SESSION['procedure'][9] = 1;
			return $data;
		}

		// Проверка читов и хинтов
		if(!empty($GLOBALS['cheat_hint'])) {
			$data['hint'] = $GLOBALS['cheat_hint'];
			$GLOBALS['cheat_hint'] = false;
		} else 
		{
			if(isset($_POST['code'])) $data['hint'] = $this->check_hint($code);
		}

		return $data;
	}

	public function check_hint($str) {
		$str = mb_strtolower($str, 'utf-8');			
		switch($str) {						
            case "neo": return '<p>Я больше не Neo! Я - хакер Падла!</p>';
            case "нео": return '<p>Я больше не Нео! Я - хакер Падла!</p>';
            case "падла": return '<p>Сам такой!</p>';
            case "deep": return '<p>Нихт Ферштейн! Говорите по-русски.</p>';
            case "глубина": return '<p>Ну "глубина", а дальше?</p>';
            case "проснись": return '<p>А я и не сплю!</p>';
            case "гипноз": return '<p>Сменяюшиеся 25 раз в секунду картинки пишут информацию прямо в твоё посознание!</p>';
            case "подсознание": return '<p>Ты его не видиль, а он есть! И влияет прямо на подсознание.</p>';
            case "я не твой": return '<p>Мала букав ниасилил!</p>';
            case "глубина - глубина я не твой, отпусти меня глубина": return '<p>Многа букав ниасилил!</p>';
            case "глубина глубина я не твой отпусти меня глубина": return '<p>Многа букав ниасилил!</p>';
			case "лабиринт отражений": return '<p>Да, я тоже читал Лукьяненко, а вы читали?</p>';
            case "фальшивые зеркала": return '<p>Да, я тоже читал Лукьяненко, а вы читали?</p>';
            case "лукьяненко": return '<p>Хоббиты - это не только ценный мех, но и другие интересные цитаты.</p>';
            case "сублиминальная реклама": return '<p>Эффект 25-го кадра же! Или 24-го... Или даже 26-го...</p>';
            case "сублиминальная магия": return '<p>Это тайное знание, которым гугл и яндекс делятся лишь с достойнейшими!</p>';
            case "ложки не существует": return '<p>Зато существует 25-й кадр!</p>';
            case "реклама": return '<p>Понапихают в рекламу всякого, влияющего на подсознание, а потом полная психушка клиентов!</p>';
            case "матрица": return '<p>Матрица тебя того... это самое!</p>';
            case "matrix": return '<p>Matrix has you!</p>';
            case "matrix has you": return '<p>Истинно так. Теперь будешь тут жить, пока главврач ищет штепсель.</p>';                   
            default: return '<p>Нео, не поддавайся! <br>Тебя зомбируют агенты Смиты из отдела сублиминальной магии!</p>';
		}
		return false;
	} 
}


