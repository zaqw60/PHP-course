<div style="text-align: center; ; background-color: aliceblue; height: 100vh">
<?php
require "views/config.php";
if(isset($_GET['error'])){?>
    <h2>Покупка возможна только зарегистрированными пользователями </h2>
        <?php
}else{
$id = (int)$_GET['id'];
$sql = "select title, price, img, description from goods where id = $id";
$res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));
if($data = mysqli_fetch_assoc($res)){?>
    <div style="border: 1px solid #f71212; text-align: center; display: inline-block; margin-top: 50px">
        <h3><?= $data['title'] ?></h3>
        <div style="display: flex; ">
            <img src="images/<?= $data['img']?>" alt="">
            <div style="margin-left: 20px">
                <p style="width: 200px; margin: 10px"><?= $data['description'] ?></p>
                <h3 style="color: red; text-align: center">Цена : <?= $data['price'] ?></h3>
            </div>
        </div>
        <hr>
        <form action="?cont=bas&action=add&id_good=<?= $id ?>" method="post"">
        <input type="submit" name="good"  value="Добавить в корзину" style="text-align: center; background-color: red;
    height: 40px">
        </form>
    </div>
    <?php
}else{ ?>
  <h2>Каталог пуст!</h2>
    <?php
}
}
    ?>
</div>







