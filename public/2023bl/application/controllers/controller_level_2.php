<?php

class Controller_Level_2 extends Controller
{
	public $view_name = 'level_2_view.php';
	public $template_name = 'template_view.php';

    function __construct()
	{
		$this->model = new Model_Level_2();
		$this->view = new View();
	}

	function action_index()
	{
        $data = $this->model->get_data();
		$this->check_level($data);
		$this->check_lobotomia();
		if(isset($data['sublevel'])) $this->view_name = $data['sublevel'];
		$this->view->generate($this->view_name, $this->template_name, $data);		
	}
	
}