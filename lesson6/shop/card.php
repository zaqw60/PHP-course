<container style="height: 100vh">
    <header style="height: 10%;text-align: center; background-color: gainsboro"> <h1>CARD</h1><br>
        <a href="shop.php">На главную</a>
    </header>
<div style="text-align: center">
<?php
require "config.php";
$id = (int)$_GET['id'];

$sql = "select title, price, img, description from goods where id = $id";
$res = mysqli_query($connect,$sql);

while($data = mysqli_fetch_assoc($res)){?>
    <div style="border: 1px solid #f71212; text-align: center; display: inline-block">
        <h3><?= $data['title'] ?></h3>
        <div style="display: flex; ">
            <img src="images/<?= $data['img']?>" alt="">
            <div style="margin-left: 20px">
                <p style="width: 200px; margin: 10px"><?= $data['description'] ?></p>
                <h3 style="color: red; text-align: center">Цена : <?= $data['price'] ?></h3>
            </div>
        </div>
        <hr>
        <a href="#"><h2 style="text-align: center; color: red">КУПИТЬ</h2></a>
    </div>
    <?php
} ?>
</div>
</container>






