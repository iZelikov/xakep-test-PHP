<?php
    class Log {

        static public function log_it(){
            if(isset($_POST['code'])){
                $ip = log::getIp();
                $code = $_POST['code'];
                $name = $_SESSION['name'];
                $level = $_SESSION['palata'];
                log::log_code($name, $ip, $code, $level);
            }                   

        }
        static public function log_code($name, $ip, $code, $level){	
            if ($code !== false) {
                $city = Log::get_city_name($ip);					
                $log = date('Y-m-d H:i:s')."\t".$ip."\t".$city."\t".$name."\t".$level."\t".$code;
                file_put_contents('logs/log.txt', $log . PHP_EOL, FILE_APPEND);
            }	
        }
        static public function getIp() {
            $keys = [
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'REMOTE_ADDR'
            ];
            foreach ($keys as $key) {
                if (!empty($_SERVER[$key])) {
                    $ip = trim(end(explode(',', $_SERVER[$key])));
                    if (filter_var($ip, FILTER_VALIDATE_IP)) {
                        return $ip;
                    }
                }
            }
        }
        static public function get_city_name($ip){
            require_once '../SxGeo.php';
            // подключаем файл с базой данных городов
            $SxGeo = new SxGeo('../SxGeoCity.dat', SXGEO_BATCH | SXGEO_MEMORY);
            $city = $SxGeo -> get($ip);
            return $city['city']['name_ru'];
        }
    }
?>