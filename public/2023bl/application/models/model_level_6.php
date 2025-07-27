<?php

class Model_Level_6 extends Model
{
	
	public function get_data()
	{	
		$data['title'] = $GLOBALS['titles'][6];
		
		$code = htmlentities(mb_strtolower($_POST['code'], 'utf-8'));
		$ip = htmlentities(mb_strtolower($_POST['ip'], 'utf-8'));
		$login = htmlentities(mb_strtolower($_POST['login'], 'utf-8'));
		$password = htmlentities(mb_strtolower($_POST['password'], 'utf-8'));
		$procedure = 'Лоботомия';		
		$nolobotomia_text = '<p>'.$_SESSION['p6select'].', конечно, не самая приятная процедура, 
		но всё-таки значительно полезнее для здоровья чем некоторое другие. 
		Из-за счастливой ошибки в базе данных вы остались живы и даже сохранили рассудок и желание выбраться из этого ада.</p>
		<p>Пока ваше тело отходит от наркоза, сознание было скопировано в местную сеть, чтобы проходить лечение виртуально.</p>	
		<form method="post">
			<p class="center">                  
				<input class="codeinput" type="submit" value="Превратиться в набор байтов">
				<input type="hidden" name="code" value="matrix">                        
			</p>
		</form>';
		$lobotomia_text = '<p>Вам сделали Лоботомию. Можно отправиться на другие оздоровительные процедуры и получить больше баллов,
				но вам уже всё равно...</p>
				<p>Возможно, ваша следующая реинкарнация окажется более удачливой:<br>
				<a href="?level=start">Нажимая на эту ссылку, вы теряете весь прогресс лечения <br>и начинаете всё с начала!</a></p>';

		if(isset($_SESSION['p6select'])) $procedure = htmlentities($_SESSION['p6select']);
		else $_SESSION['p6select'] = 'Лоботомия';

		if ($code == "wipe") {
			Route::whipe();
		}

		// Условие перехода
		if ($code == "matrix") {        
			$data['go_to_level'] = 7;
			return $data;
		}

		if ($code == "lobotomia") {
			$_SESSION['palata6']='operation';
		}
	
		if ($code == "admin") {
			$_SESSION['palata6']='server1';			
		}
	
		if ($code == "back") {
			$_SESSION['palata6']='lobotomia';
		}
	
		if($ip=='192.168.1.1'&&$login=='admin'&&$password=='admin') {
			$_SESSION['palata6']='server2';
		}
	
		if($ip=='192.168.1.1'&&$login=='drzlo'&&$password=='morgmorg') {
			$_SESSION['palata6']='server3';
		}
	
		if(!empty($_POST['select'])) {
			$_SESSION['p6select'] = $_POST['select'];
			$_SESSION['palata6']='lobotomia';
		}

		switch($_SESSION['palata6']) {
            case "lobotomia":
				if($_SESSION['role']=='doc') { 
                	$data['sublevel']="level_6_view_doc.php";					
				} else $data['sublevel']="level_6_view.php";
                break;
            case "server1":
                $data['sublevel']="level_6_view_server1.php";
                break;
            case "server2":
                $data['sublevel']="level_6_view_server2.php";
                break;
            case "server3":
                $data['sublevel']="level_6_view_server3.php";
                break;
            case "operation":
                $data['sublevel']="level_6_view_operation.php";
				if($_SESSION['godmode']=='on'||$_SESSION['p6select']!="Лоботомия") 
				{
					$_SESSION['procedure'][6] = 1;
					$data['text'] = $nolobotomia_text;
				}
				else {
					$_SESSION['procedure'][6] = 2;
					$data['text'] = $lobotomia_text;
					$_SESSION['end'] = 'lobotomia';
				} 
                break;            
            default:
				if($_SESSION['role']=='doc') { 
					$data['sublevel']="level_6_view_doc.php";					
				} else $data['sublevel']="level_6_view.php";    
        };

		if(isset($_POST['moo'])){
			if($_SESSION['role']=='admin') $data['hint'] = '
				<div class="hint white black-bg-50">
					<p>Вдруг в коридоре раздаётся крик:</p>
					<p>- Админ?! Здесь есть админ?! Нужно срочно настроить Wi-Fi на нашем роутере, пока он ещё хоть что-то соображает!</p>
				</div>
				<div>
					<form method="post">
						<p class="center">                  
							<input class="codeinput" type="submit" value="Это я админ!">
							<input type="hidden" name="code" value="admin">                        
						</p>
					</form>
				</div>';
			else $data['hint'] = '
				<div class="hint white black-bg-50">
					<p>Доктор сказал '.$procedure.', значит '.$procedure.'!</p>
				</div>';			
		}
		return $data;
	}

}
