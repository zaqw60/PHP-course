<?php
require "../component/config.php";
//var_dump($_POST);//reg - Регистрация, reg - Авторизация
$login = (!empty($_POST['login'])) ? strip_tags($_POST['login']) : "";
$pass = (!empty($_POST['pass'])) ? strip_tags($_POST['pass']) : "";
$reg = (!empty($_POST['reg'])) ? strip_tags($_POST['reg']) : "";

$sql = "SELECT id FROM users WHERE login = '$login' AND pass = '$pass'";
$res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));

if (mysqli_num_rows($res) == 1){
    setcookie("login", $login);
    setcookie("pass",$pass);
    header("Location:reg.php?success=true");
}else{
    header("Location:reg.php?success=false");
}

//INSERT INTO users(login, pass, role) VALUES ($login,$pass,0)
