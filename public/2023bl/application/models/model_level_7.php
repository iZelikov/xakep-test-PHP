<?php

class Model_Level_7 extends Model
{
	
	public function get_data()
	{
		$data['title'] = $GLOBALS['titles'][7];

		if($_SESSION['role']=='doc') {
			$code = mb_strtolower($_POST['code'], 'utf-8');
			$data['sublevel'] = 'level_7_view_doc.php';
			if($code =='palata8') {
				$data['go_to_level'] = 8;
			}
			return $data;
		};

		$data['name'] = $_SESSION['name'];
		$data['doc_txt'] = 'значит... Вот кем вы себя возомнили. <br>А карточки показывают совсем иное. Кто же вы на самом деле?';
		if(isset($_POST['code'])) $name = htmlentities($_POST['code']);
		$code = mb_strtolower($name, 'utf-8');
		
		// Условие перехода
		if ($code == "neo") {        
			$data['go_to_level'] = 8;
			$_SESSION['procedure'][7]=1;   
			return $data;
		}

		if(!empty($GLOBALS['cheat_hint'])) {
			$data['hint'] = $GLOBALS['cheat_hint'];
			$GLOBALS['cheat_hint'] = false;
		} else 
		{
			if(isset($_POST['code'])) $data['hint'] = '<p>Нет, вы не <b>'.$name.'</b>, вы другой...</p>';
		}
		return $data;
	}

}
