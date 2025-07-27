<?php

    /*
    Класс-маршрутизатор для определения запрашиваемой страницы.
    > цепляет классы контроллеров и моделей;
    > создает экземпляры контролеров страниц и вызывает действия этих контроллеров.
    */
    class Route
    {

        static function start()
        {
            // контроллер и действие по умолчанию
            $controller_name = 'Level_0';
            $action_name = 'index';         
            Cheats::check();
            Log::log_it();
            $level = Route::get_level();
            $controller_name = 'Level_'.$level;            
            

            // добавляем префиксы
            $model_name = 'Model_'.$controller_name;
            $controller_name = 'Controller_'.$controller_name;
            $action_name = 'action_'.$action_name;

            // подцепляем файл с классом модели (файла модели может и не быть)

            $model_file = strtolower($model_name).'.php';
            $model_path = "application/models/".$model_file;
            if(file_exists($model_path))
            {
                include "application/models/".$model_file;
            }

            // подцепляем файл с классом контроллера
            $controller_file = strtolower($controller_name).'.php';
            $controller_path = "application/controllers/".$controller_file;
            if(file_exists($controller_path))
            {
                include "application/controllers/".$controller_file;
            }
            else
            {
                Route::go_to_level(0);
            }
            
            // создаем контроллер
            $controller = new $controller_name;
            $action = $action_name;
            
            if(method_exists($controller, $action))
            {
                // вызываем действие контроллера                
                $controller->$action();
            }
            else
            {
                // здесь также разумнее было бы кинуть исключение
                Route::go_to_level(0);                
            }
        
        }

        static function get_level(){
            $l = 0;
            $routes = explode('/', $_SERVER['REQUEST_URI']);
            $request = explode('?',$routes[2]);
            if($request[0]=='card') return 'Card';
            if($request[0]=='cabinet') return 'Cabinet';
            if ($_GET['level']=='start') Route::whipe();
            if(isset($_GET['palata'])) {
                Route::go_to_level(Route::level_from_get());
            }    
            if(isset($_POST['palata'])) {
                Route::go_to_level($_POST['palata']);
            }     
            if(isset($_SESSION['palata'])) return $_SESSION['palata'];                     
            return $l;
        }
        static function level_from_get(){
            $str = $_GET['palata'];
            return $GLOBALS['levels'][$str];
        }    

        static function whipe(){
            $tv = $_SESSION['tv'];
            $sel = $_SESSION['p6select']; 
            $_SESSION = array();
            $_SESSION['tv'] = $tv;
            $_SESSION['p6select'] = $sel; 
            Route::go_to_level(0);
        }
        static function go_to_level($n){
            $_SESSION['palata'] = $n;
            header('Location: ./');
            exit();    
        }

        // function ErrorPage404()
        // {
        //     $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        //     header('HTTP/1.1 404 Not Found');
        //     header("Status: 404 Not Found");
        //     header('Location:'.$host.'404');
        // }
        
    }
?>