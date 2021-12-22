<?php
require "views/config.php";
$nick = strip_tags($_POST['nick']);
$rev = strip_tags($_POST['rev']);
$sql = "INSERT INTO reviews (nickname, review) VALUES ('$nick','$rev')";
$res = mysqli_query($connect,$sql);
header("LOCATION: {$_SERVER['HTTP_REFERER']}");
?>