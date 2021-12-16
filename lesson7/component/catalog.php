<header style="text-align: center; background-color: gainsboro">
    <h1>CATALOG</h1>
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
<div style="display: flex;     display: flex; flex-wrap: wrap; gap: 20px; padding-left: calc(50% - 570px);
    padding-right: calc(50% - 570px); margin-top: 20px">
<?php
require "config.php";

$sql = "select * from goods";
$res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));

while($data = mysqli_fetch_assoc($res)){?>
<div style="display: flex; width: 360px">
<div style="border: 1px solid #f71212; text-align: center">
    <h3><?= $data['title'] ?></h3>
    <div style="display: flex">
        <img src="../images_mini/<?= $data['img']?>" alt="">
        <div>
        <p style="height: 150px; margin: 10px"><?= $data['short-info'] ?></p>
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
