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


}




?>