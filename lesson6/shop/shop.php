<container style="height: 100vh">
    <header style="height: 10%;text-align: center; background-color: gainsboro"> <h1>SHOP</h1><br>
        <a href="../index.php">На главную</a>
    </header>
<div style="display: flex;     display: flex; flex-wrap: wrap; gap: 20px">
<?php
require "config.php";

$sql = "select * from goods";
$res = mysqli_query($connect,$sql);

while($data = mysqli_fetch_assoc($res)){?>
<div style="display: flex; ">
<div style="border: 1px solid #f71212">
    <h3><?= $data['title'] ?></h3>
    <div style="display: flex; ">
        <img src="images_mini/<?= $data['img']?>" alt="">
        <div>
        <p style="width: 200px; max-height: 150px; margin: 10px"><?= $data['short-info'] ?></p>
        <h3 style="color: red; text-align: center">Цена : <?= $data['price'] ?></h3>
        </div>
    </div>
    <hr>
    <a href="card.php?id=<?= $data['id'] ?>"><h2 style="text-align: center; color: red; height: 30px">КУПИТЬ</h2></a>
</div>
</div>
    <?php
}
?>
</div>
</container>
