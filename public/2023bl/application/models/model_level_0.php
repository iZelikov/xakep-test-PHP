<?php
	class Model_Level_0 extends Model
	{
		public function get_data()
		{
			$data['title'] = $GLOBALS['titles'][0];

			if(isset($_POST['code'])){
				$code = htmlentities($_POST['code']);
				if($code =='nextlevel') $data['go_to_level'] = 1;
				$data['hint'] = $this->check_hint($code);
			}
			return $data;
		}

		public function check_hint($str) {			
			switch($str) {
				case "#": return '<p>Осталось с прошлого раза...</p>';                
				default: return '<p>Дежавю? Ничего, на десятый раз привыкните...</p>';
			}
			return false;
		} 
	}
?>