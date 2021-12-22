<?php
require "views/config.php";
$count = (int)$_POST['count'];
$id_good = (int)$_GET['id_good'];
$action = strip_tags($_GET['action']);
if($action == 'add' && isset($_COOKIE['login']) && isset($_COOKIE['pass'])) {
    $sql = "select id_good, id_user from card WHERE id_good = $id_good AND id_user = (SELECT id FROM users WHERE login = '{$_COOKIE['login']}')";
    $res = mysqli_query($connect, $sql) or die("error" . mysqli_error($connect));
    $data = mysqli_num_rows($res);
    if ($data > 0) {
        $sql = "UPDATE card SET count = (count + 1) WHERE id_good = $id_good AND id_user = (SELECT id FROM users WHERE login = '{$_COOKIE['login']}')";
        $res = mysqli_query($connect, $sql) or die("error" . mysqli_error($connect));
    } else {
        $sql = "INSERT INTO card(id_good, count, id_user ) VALUES ($id_good, count + 1, (SELECT id FROM users WHERE login = '{$_COOKIE['login']}'))";
        $res = mysqli_query($connect, $sql) or die("error" . mysqli_error($connect));
    }
    header("LOCATION:?cont=basket&success=true");
}elseif ($action == 'del'){
    $sql = "DELETE FROM card WHERE id_good = $id_good";
    $res = mysqli_query($connect, $sql) or die("error" . mysqli_error($connect));
    header("LOCATION:?cont=basket");
}elseif ($action == 'edit'){
    if($count < 0){
        header("LOCATION:?cont=basket&error=error");
    }else {
        $sql = "UPDATE card SET count = $count WHERE id_good = $id_good";
        $res = mysqli_query($connect, $sql) or die("error" . mysqli_error($connect));
        header("LOCATION:?cont=basket");
    }
}else{
    header("LOCATION:?cont=card&error=error");
}