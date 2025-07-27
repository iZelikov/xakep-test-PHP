<?php

class Controller_Main extends Controller
{
	public $view_name = 'main_view.php';
	public $template_name = 'template_view.php';
	public $title = 'Чё за фигня?!!';

	function action_index()
	{
		$data['title'] = $this->title;
		$this->view->generate($this->view_name, $this->template_name, $data);		
	}
	
}