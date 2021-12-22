<?php
require "views/config.php";

$title = strip_tags($_POST['title']);
$price = (int)$_POST['price'];
$short_info = strip_tags($_POST['short_info']);
$description = strip_tags($_POST['description']);
$id = (int)$_POST['id'];
if(isset($_POST['redact'])){
    $sql = "UPDATE goods SET title='$title', price='$price',short_info='$short_info',description='$description' WHERE id='$id'";
    $res = mysqli_query($connect, $sql) or die("error".mysqli_error($connect));
    header("location:?cont=admin&redact=redact&id=$id");
}elseif (isset($_POST['delete'])){
    $sql = "DELETE FROM goods WHERE id='$id'";
    $res = mysqli_query($connect, $sql) or die("error".mysqli_error($connect));
    var_dump($sql);
    header("location:?cont=admin&cat=cat");
}
