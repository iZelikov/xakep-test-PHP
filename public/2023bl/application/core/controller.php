<?php
    class Controller {
        
        public $model;
        public $view;
        
        function __construct()
        {
            $this->view = new View();
        }
        
        // действие (action), вызываемое по умолчанию
        function action_index()
        {
            // todo
            // $data = $this->model->get_data();
        }

        function check_level($data){
            if(isset($data['go_to_level'])) Route::go_to_level($data['go_to_level']);
        }

        function check_lobotomia(){
            if($_SESSION['end']=='lobotomia') Route::go_to_level(6);
        }
    }
?>