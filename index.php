<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

if ($_SESSION['enter']){
    echo "Привет, " . $_SESSION['enter'] . "<br>";
} else {

    echo " <a href=\"reg.php\">Регестрация</a> <br>
           <a href=\"login.php\">Авторизация</a> ";
}

?>

</body>
</html>