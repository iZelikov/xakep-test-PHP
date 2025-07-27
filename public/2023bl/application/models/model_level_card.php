<?php

class Model_Level_Card extends Model
{	
	
	public function get_data()
	{	
		$data['title'] = 'Медкарта';
		$data['name'] = 'Anonymous';

		if($this->validate_url()) $data = $this->data_from_get($data); 
		else $data = $this->data_from_session($data);	

		// if(isset($_SESSION['name'])) $data['name']= $_SESSION['name'];
		// for($i = 1; $i <= 10; $i++) {	
		// 	$data['procedure'][$i] = 0;
		// 	if(isset($_SESSION['procedure'][$i]))
		// 	$data['procedure'][$i] = $_SESSION['procedure'][$i];	
		// }

		$link = $this->generate_link_from_data($data);
		$data['link'] = $link;
		return $data;
	}
	public function data_from_get($data){
		if(isset($_GET['name'])) $data['name']= $_GET['name'];
		for($i = 1; $i <= 10; $i++) {
			$data['procedure'][$i] = 0;
			$data['procedure'][$i] = $_GET['data'][$i-1];	
		}
		$data['id'] = sha1($_GET['name'].$_GET['data']); 
		return $data;
	}

	public function data_from_session($data){
		if(isset($_SESSION['name'])) $data['name']= $_SESSION['name'];
		for($i = 1; $i <= 10; $i++) {	
			$data['procedure'][$i] = 0;
			if(isset($_SESSION['procedure'][$i]))
			$data['procedure'][$i] = $_SESSION['procedure'][$i];	
		}
		return $data;
	}

	public function generate_link_from_data($data) {
		$link = '';
		$url = $_SERVER['REQUEST_URI'];
		$url = explode('?', $url);
		$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].$url[0];
		$d = implode("", $data['procedure']);
		$n = $data['name'];
		$id = $this->generate_id($n,$d); 
		$urldata = '&data='.$d;
		$urlname = '?name='.$n;
		$urlid = '&id='.$id;
		$link = $url.$urlname.$urldata.$urlid;	
		return $link;
	}

	public function generate_id($name, $data){
		return sha1($name.$data.$GLOBALS['salt']);
	}

	public function validate_url(){
		$id = $this->generate_id($_GET['name'],$_GET['data']);
		if($id==$_GET['id']) return true;
		return false;
	}
}
