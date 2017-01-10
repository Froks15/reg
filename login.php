<?php
include "connect.php";
include_once "class_user.php";

session_start();

if (isset($_POST['enter'])) {

    $login = $_POST['login'];
    $password = md5($_POST['password']);

    $user = new Reg();

    if ($user->check_login($login) == false) {
        echo "Введите логин ";
    }

    if ($user->check_password($password) == false) {
        echo "Введите пароль ";
    }

    if ( $user->login_user($login,$password) == true) {
        $_SESSION['enter'] = $login;
            if ($_SESSION['enter']) {
                header("Location: index.php");
            }
    } else {
        echo "Попробуйте еще раз";
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php if ($_SESSION['enter']) :?>

        <span>Привет,</span> <?php echo $_SESSION['enter']; ?>
        <a href="index.php">На главную</a>

<?php else :?>

    <form method="post">
        <input type="text" name="login" placeholder="Ваш логин"> <br>
        <input type="password" name="password" placeholder="Ваш пароль"> <br>
        <input type="submit" name="enter" value="Авторизоваться"> <br>
    </form>

<?php endif ?>


</body>
</html>