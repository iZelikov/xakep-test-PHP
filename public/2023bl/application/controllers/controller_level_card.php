<?php

class Controller_Level_Card extends Controller
{
	public $view_name = 'card.php';
	public $template_name = 'template_view.php';

    function __construct()
	{
		$this->model = new Model_Level_Card();
		$this->view = new View();
	}

	function action_index()
	{
        $data = $this->model->get_data();
		$this->view->generate($this->view_name, $this->template_name, $data);		
	}
	
}