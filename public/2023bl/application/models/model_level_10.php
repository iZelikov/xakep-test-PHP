<?php

class Model_Level_10 extends Model
{
	
	public function get_data()
	{
		$data['title'] = $GLOBALS['titles'][10];

		$code = htmlentities(mb_strtolower($_POST['code'], 'utf-8'));

		if($code == 'tv666') $_SESSION['tv'] = 'on';
		if($code == 'forum') {
			$_SESSION['procedure'][10] = 1;
			header('Location: https://mooovoi.org/forum/index.php?board=432.0');
		}

		if($_SESSION['role']=='doc') {
			if($_SESSION['tv']=='on') $data['sublevel']="level_10_view_doc2.php";
			else $data['sublevel']="level_10_view_doc.php";
		} else {
			if($_SESSION['tv']=='on') $data['sublevel']="level_10_view_freedom.php";
		}		
		return $data;
	}

}
