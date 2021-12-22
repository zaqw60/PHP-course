<?php
require "views/config.php";
$login = (!empty($_POST['login'])) ? strip_tags($_POST['login']) : "";
$pass = (!empty($_POST['pass'])) ? md5(strip_tags($_POST['pass'])) : "";
$ident = (!empty($_POST['ident'])) ? strip_tags($_POST['ident']) : "";
if($ident == 'Выход' && !empty($_COOKIE['login'])){
    setcookie("login", "");
    setcookie("pass", "");
    header("location:index.php");
}elseif($ident == 'Авторизация') {
    $sql = "SELECT id, role FROM users WHERE login = '$login' AND pass = '$pass'";
    $res = mysqli_query($connect, $sql) or die("error" . mysqli_error($connect));
    if (mysqli_num_rows($res) == 1) {
        setcookie("login", $login);
        setcookie("pass", $pass);
        $data = mysqli_fetch_assoc($res);
        if ($data['role'] == 1) {
            header("location:?cont=admin");
        } else {
            header("Location:?cont=registration&success=true");
        }
    }
    } elseif ($ident == 'Регистрация') {

        $sql = "INSERT INTO users (login, pass) VALUES ('$login','$pass')";
        $res = mysqli_query($connect, $sql) or die("error" . mysqli_error($connect));
        if ($res) {
            header("location:?cont=registration&reg=true");
        } else {
            header("location:?cont=registration&reg=false");
        }
    } else {
        header("Location:?cont=registration&success=false");
    }


