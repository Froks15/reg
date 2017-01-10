<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Главная страница</h1>

<?php if ($_SESSION['enter']) :?>
    <span>Привет,</span> <?php echo $_SESSION['enter'];?>
    <h4 style="color:red">Информация, которая доступная только авторизованному пользователю.</h4>
<?php else :?>
    <a href="reg.php">Регестрация</a> <br>
    <a href="login.php">Авторизация</a>
<?php endif?>

</body>
</html>