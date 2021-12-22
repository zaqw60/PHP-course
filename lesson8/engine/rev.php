<?php
require "views/config.php";
$nick = strip_tags($_POST['nick']);
$rev = strip_tags($_POST['rev']);

if(isset($_POST['delete']) == 'Удалить'){
    $sql = "DELETE FROM `reviews` WHERE nickname = '{$_POST['nickname']}' AND date = '{$_POST['date']}'";
    $res = mysqli_query($connect,$sql);
    header("LOCATION: {$_SERVER['HTTP_REFERER']}");
}else{
    $sql = "INSERT INTO reviews (nickname, review) VALUES ('$nick','$rev')";
    $res = mysqli_query($connect,$sql);
    header("LOCATION: {$_SERVER['HTTP_REFERER']}");
}
?>