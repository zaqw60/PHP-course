<header style="text-align: center; background-color: gainsboro">
    <h1>CARD</h1>
    <div style="display: flex;
    justify-content: space-around">
        <div>
            <a href="../index.php"><button>главная сстраница</button></a>
            <a href="../registration/reg.php"><button>Регистрация и Вход</button></a>
        </div>
        <div style="display: flex;
    justify-content: space-around">
            <a href="../component/catalog.php"><button>Каталог</button></a>
            <form action="../component/basket.php?action=open" method="post" enctype="multipart/form-data">
                <input type="submit" name="basket"  value="Корзина">
            </form>
        </div>
    </div>
</header>
<container style="height: 100vh">
<div style="text-align: center">
<?php
require "config.php";
$id = (int)$_GET['id'];

$sql = "select title, price, img, description from goods where id = $id";
$res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));

if($data = mysqli_fetch_assoc($res)){?>
    <div style="border: 1px solid #f71212; text-align: center; display: inline-block; margin-top: 50px">
        <h3><?= $data['title'] ?></h3>
        <div style="display: flex; ">
            <img src="../images/<?= $data['img']?>" alt="">
            <div style="margin-left: 20px">
                <p style="width: 200px; margin: 10px"><?= $data['description'] ?></p>
                <h3 style="color: red; text-align: center">Цена : <?= $data['price'] ?></h3>
            </div>
        </div>
        <hr>
        <form action="basket.php?id_good=<?= $id ?>&action=add" method="post" enctype="multipart/form-data">
        <input type="submit" name="good"  value="Добавить в корзину" style="text-align: center; background-color: red;
    height: 40px">
        </form>
    </div>
    <?php
} ?>
</div>
</container>






