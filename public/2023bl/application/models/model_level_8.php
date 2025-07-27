<?php

class Model_Level_8 extends Model
{
	
	public function get_data()
	{
		$data['title'] = $GLOBALS['titles'][8];

		$data['name'] = $_SESSION['name'];
		if(isset($_POST['code'])) $code = htmlentities($_POST['code']);
		$h = $_POST['h'];
		$m = $_POST['m'];
		$s = $_POST['s'];

		if($_SESSION['role']=='doc') {
			$code = mb_strtolower($_POST['code'], 'utf-8');
			$data['sublevel'] = 'level_8_view_doc.php';
			if($code =='palata9') {
				$data['go_to_level'] = 9;
			}
			return $data;
		};

		// Условие перехода
		if ($h == 7&&$m==40&&$s==0) {
			$_SESSION['procedure'][8]=1;        
			$data['go_to_level'] = 9;
			$data['hint'] = 'Выход!';
			return $data;
		}

		$prorochestvo = $GLOBALS['oracle'][$s];

		if(!empty($GLOBALS['cheat_hint'])) {
			$data['hint'] = $GLOBALS['cheat_hint'];
			$GLOBALS['cheat_hint'] = false;
		} else {
			if(isset($_POST['code'])) $data['hint'] = '<br>- '.$code.'<br>- '.$prorochestvo;
		}
		return $data;
	}

}
