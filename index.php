<?php
include "connect.php";
include_once "class_user.php";

// test
if (isset($_POST['reg'])) {

	$login = $_POST['login'];
	$password = $_POST['password'];
	$email = $_POST['email'];


	$user = new Reg();
	
	if ($user->check_login($login) == false) {
		echo "Введите логин ";
	}

	if ($user->check_password($password) == false) {
		echo "Введите пароль ";
	}

	if ($user->check_email($email) == false) {
		echo "Введите меил ";
	}


	/********* Записываем в БД *********/

	$user->add_user($login, $password, $email);


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">

	<input type="text" name="login" placeholder="Введите логин*" value="<?php echo $login ?>"> <br>
	<input type="password" name="password" placeholder="Введите пароль*"> <br>
	<input type="email" name="email" placeholder="Введите почту*" value="<?php echo $email ?>"> <br>
	<input type="submit" value="Зарегестрироваться" name="reg">

</form>

</body>
</html>