<?php 

class Reg {

	function check_login($login_) {

		if($login_!=""){

		$login = $login_;
		$login = htmlspecialchars($login);
		$login = trim($login);
		$login = stripslashes($login);
		$login = strip_tags($login);
			return true;
		} else {
			return false;	
		}
	}

	function check_password($password_) {

		if($password_!=""){

		$password = $password_;
		$password = htmlspecialchars($password);
		$password = trim($password);
		$password = stripslashes($password);
		$password = strip_tags($password);
			return true;
		} else {
			return false;	
		}
	}

	function check_email($email_) {

		if($email_!=""){

		$email = $email_;
		$email = htmlspecialchars($email);
		$email = trim($email);
		$email = stripslashes($email);
		$email = strip_tags($email);
			return true;
		} else {
			return false;	
		}
	}

	function add_user($login_, $password_, $email_){
		
		if ($login_!="" && $password_!="" && $email_!="") {

			global $connect;

			$result = $connect->query("SELECT login FROM users WHERE login = '$login_'");

				if (mysqli_num_rows($result) > 0) {
					echo 'Логин занят';
				} else {
					$connect->query ("INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login_', '$password_', '$email_') ");
					echo 'Регистрация прошла успешно!';
				}
		}
		
	}
	
	
	function login_user($login_, $password_){
	
		if ($login_!="" && $password_!=""){

			global $connect;

			$result = $connect->query("SELECT login FROM users WHERE login = '$login_' AND password = '$password_'");

			if (mysqli_num_rows($result) > 0) {
				return true;
			} else {
				return false;
			}

		}
		
	}





}


?>