<?php include_once "connect.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
	<script src="main.js"></script>
</head>
<body>

<form method="post">

	<input type="text" name="login" placeholder="Введите логин*"> <br>
	<input type="password" name="password" placeholder="Введите пароль*"> <br>
	<input type="email" name="email" placeholder="Введите почту*"> <br>
	<input type="submit" value="Зарегестрироваться" name="reg">

</form>


<?php

if (isset($_POST['reg'])) {


	if( !empty($_POST['login']) ){

		$login = $_POST['login'];
		$login = htmlspecialchars($login);
		$login = trim($login);
		$login = stripslashes($login);
		$login = strip_tags($login);

	} else {
		echo "<div class='warning'>Введите логин!</div>";
	}

	if( !empty($_POST['password']) ){

		$password = $_POST['password'];
		$password = htmlspecialchars($password);
		$password = trim($password);
		$password = stripslashes($password);
		$password = strip_tags($password);

	} else {
		echo "<div class='warning'>Введите пароль!</div>";
	}

	if( !empty($_POST['email']) ){

		$email = $_POST['email'];
		$email = htmlspecialchars($email);
		$email = trim($email);
		$email = stripslashes($email);
		$email = strip_tags($email);

	} else {
		echo "<div class='warning'>Введите меил!</div>";
	}


	/********* Записываем в БД *********/


	if ($login && $password && $email) {
		$connect->query ("INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$password', '$email') ");
	}


	$result = $connect->query ("SELECT * FROM `users` ");


	/********* Записываем в БД *********/



}



?>

</body>
</html>