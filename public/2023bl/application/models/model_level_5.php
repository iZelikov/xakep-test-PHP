<?php

class Model_Level_5 extends Model
{
	
	public function get_data()
	{	
		$code = htmlentities(mb_strtolower($_POST['code'], 'utf-8'));

		$data['title'] = $GLOBALS['titles'][5];

		if($_SESSION['role']=='doc') {
			$data['sublevel'] = 'level_5_view_doc.php';
			if($code =='palata6') {
				$data['go_to_level'] = 6;
			}
			return $data;
		};

		if($code =='лоботомия') {
			$data['go_to_level'] = 6;
			$_SESSION['procedure'][5] = 1;
			return $data;
		}

		$browser = $this->get_browser_name($_SERVER['HTTP_USER_AGENT']);
		if($browser!=="Firefox") $data['browser'] = '<h4 class = "center red-dark"><img src="images/fox.jpg"> ваш браузер огорчает меня :(</h4>';
		
		if($_SESSION['drugs']>0) $data['script'] = 'js\madscript.js';
		else {
			$data['button'] = 
			'<form method="POST">
				<input class="codeinput" type="submit" value="Спустить таблетки в унитаз">
				<input type="hidden" name="code" value="лоботомия">  
			</form>';
		}

		return $data;
	}

	public function get_browser_name($user_agent)
    {
        if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
        elseif (strpos($user_agent, 'Edge')) return 'Edge';
        elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
        elseif (strpos($user_agent, 'Safari')) return 'Safari';
        elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
        elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
        
        return 'Other';
    }

}
