<?php

class Controller_Level_Cabinet extends Controller
{
	public $view_name = 'cabinet.php';
	public $template_name = 'template_view.php';

    function __construct()
	{
		$this->model = new Model_Level_Cabinet();
		$this->view = new View();
	}

	function action_index()
	{
        $data = $this->model->get_data();
		$this->view->generate($this->view_name, $this->template_name, $data);		
	}
	
}