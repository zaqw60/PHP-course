<?php
require "config.php";
$id = $_GET['id'];
$img = $_GET['img'];
$count = $_GET['count'];
$sql = "UPDATE gallery SET count = count + 1 WHERE id = $id";
$res = mysqli_query($connect,$sql);
?>

<img style="height: 90%; margin: 0 auto" src="images/<?= $img?>" alt="">
<h2>Просмотров - <?= ++$count?></h2>
<a href="index.php">Вернуться на главную</a>