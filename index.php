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

	<input type="text" name="login" placeholder="Введите логин"> <br>
	<input type="password" name="password" placeholder="Введите пароль"> <br>
	<input type="email" name="email" placeholder="Введите почту"> <br>
	<input type="submit" value="Зарегестрироваться" name="reg">

</form>


<?php

if (isset($_POST['reg'])) {

	$login = $_POST['login'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	
}




?>

</body>
</html>