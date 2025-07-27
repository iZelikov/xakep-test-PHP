<?php

class Controller_Level_0 extends Controller
{
	public $view_name = 'level_0_view.php';
	public $template_name = 'template_view.php';

    function __construct()
	{
		$this->model = new Model_Level_0();
		$this->view = new View();
	}

	function action_index()
	{
        $data = $this->model->get_data();
		$this->check_level($data);
		$this->check_lobotomia();
		$this->view->generate($this->view_name, $this->template_name, $data);		
	}
	
}