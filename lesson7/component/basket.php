<header style="text-align: center; background-color: gainsboro">
    <h1>BASKET</h1>
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
<?php
require "config.php";
$id_good = (int)$_GET['id_good'];
$action = $_GET['action'];
if($action == 'add') {
    $sql = "select id from goods where id = $id_good";
    $res = mysqli_query($connect, $sql) or die("error".mysqli_error($connect));
    if (!$data = mysqli_fetch_assoc($res)) {
        echo "Такого товара не существует!";
        }else{
        $sql = "select id from card where id_good = $id_good";
        $res = mysqli_query($connect, $sql) or die("error".mysqli_error($connect));
        if ($data = mysqli_fetch_assoc($res)) {
            $sql = "UPDATE card SET count = (count + 1) WHERE id_good = $id_good";
            $res = mysqli_query($connect, $sql) or die("error".mysqli_error($connect));
            header("LOCATION: catalog.php");
        }else{
            $sql = "INSERT INTO card(id_good, count) VALUES ($id_good, count + 1)";
            $res = mysqli_query($connect, $sql) or die("error".mysqli_error($connect));
            header("LOCATION: {$_SERVER['HTTP_REFERER']}");
        }
    }


}elseif ($action == 'open'){
    ?>
    <div style="margin: 20px;    margin: 20px; display: flex; flex-direction: column; gap: 30px; padding-left: calc(50% - 570px);
    padding-right: calc(50% - 570px); align-items: center">
    <?php
    $sql = "SELECT goods.title, goods.img, goods.price, count FROM card INNER JOIN goods ON card.id_good = goods.id";
    $res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));

    while($data = mysqli_fetch_assoc($res)){?>
        <div style="display: flex; border: 1px solid red; width: 800px; ; justify-content: space-between">
            <div style="display: flex">
            <img src="../images_mini/<?= $data['img'] ?>" alt="">
                <div>
                    <h3 style="margin: 10px"><?= $data['title'] ?></h3>
                    <p style="margin: 10px; color: #f71212">Цена :  <?= $data['price'] ?></p>
                    <p style="margin: 10px">кол-во : <input style="width: 50px" type="number" placeholder="<?= $data['count'] ?>" value="<?= $data['count'] ?>"><form  method="post" enctype="multipart/form-data">
                        <input type="submit" name="basket"  value="Редактировать"></form></p>
                    <h3 style="margin: 10px; color: #f71212">Сумма : <?= $data['count'] * $data['price'] ?></h3>
                </div>
            </div>
            <div style="display: flex; align-items: center; margin-right: 50px;">
                    <form method="post" enctype="multipart/form-data">
                    <input style="height: 40px; background-color: salmon" type="submit" name="basket"  value="Удалить">
                    </form>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
<?php
}



