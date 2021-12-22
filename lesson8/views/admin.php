<div style="display: flex;flex-direction: column; padding-left: calc(50% - 570px); padding-right: calc(50% - 570px); background-color: aliceblue">
    <h1 style="text-align: center; margin: 0">Рабочее место администратора</h1>
    <div>
        <form method="post" enctype="multipart/form-data">
            <input type="submit" name="cat"  value="каталог товаров">
            <input type="submit" name="orders"  value="заказы">
            <input type="submit" name="reviews"  value="отзывы">
        </form>
        <form action="?cont=reg" method="post">
            <input type="submit" name="ident"  value="Выход">
        </form>
    </div>
    <div style="gap: 20px; display: flex; flex-direction: column; padding: 20px 0">

        <?php
        require "views/config.php";
        if(isset($_POST['cat']) || isset($_GET['cat'])){
        $sql = "select * from goods";
        $res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));
        while($data = mysqli_fetch_assoc($res)){?>
            <div style="display: flex; width: 600px; border: 1px solid #f71212; text-align: center; justify-content: space-between;
    padding: 0 20px">
                    <h3><?= $data['title'] ?></h3>
                            <h3 style="color: red; text-align: center; padding: 0 20px">Цена : <?= $data['price'] ?></h3>
                    <form style="margin-top: 20px" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id"  value="<?= $data['id'] ?>">
                        <input type="submit" name="redact"  value="редактировать">
                    </form>
            </div>
            <?php
        }
        }elseif (isset($_POST['redact']) || isset($_GET['redact'])) {
            (int)$_POST['id'] ? $id = (int)$_POST['id'] : $id = (int)$_GET['id'];
        $sql = "SELECT * FROM goods WHERE id = $id";
        $res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));
        if($data = mysqli_fetch_assoc($res)){?>
        <div style="border: 1px solid #f71212; text-align: center; margin-top: 50px">
            <form  action="?cont=redact" method="post" enctype="multipart/form-data" >
            <h3><textarea class="input" name="title" rows="1" cols="40"><?= $data['title'] ?></textarea></h3>
            <div style="display: flex; ">
                <img src="images/<?= $data['img']?>" alt="">
                <div style="margin-left: 20px; display: flex; flex-direction: column">
                    <textarea class="input" name="short_info" rows="5" cols="40"><?= $data['short_info'] ?></textarea>
                    <textarea class="input" name="description" rows="5" cols="40"><?= $data['description'] ?></textarea>
                    <h3 style="color: red; text-align: center">Цена : <input style="width: 100px; height: 30px" name="price" type="number" placeholder="<?= $data['price'] ?>" value="<?= $data['price'] ?>"></h3>
                </div>
            </div>
            <hr>
            <input type="hidden" name="id"  value="<?= $id ?>">
            <input type="submit" name="redact"  value="Редактировать" style="text-align: center; background-color: red;
    height: 40px">

            </form>
            <form  action="?cont=redact" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="id"  value="<?= $id ?>">
            <input type="submit" name="delete"  value="Удалить" style="text-align: center; background-color: red;
    height: 40px">
            </form>
        </div>
        <?php
        }
        }elseif(isset($_POST['reviews']) || isset($_GET['redact'])){?>

        <div style="background-color: darkgray; padding: 5px">
            <?php
            require "views/config.php";

            $sql = "SELECT * FROM reviews ORDER BY date DESC";
            $res = mysqli_query($connect,$sql);

            while ($data = mysqli_fetch_assoc($res)){ ?>
                <div style="width: 80%; margin: 20px auto; background-color: aliceblue; border-radius: 30px; display: flex;
    justify-content: space-between;">
                    <div style="width: 90%">
                    <div style="height: 15px;
    padding-left: 20px"><p>Автор : <?= $data['nickname']?></p></div><hr>
                    <div style="padding: 0 20px"><?= $data['review']?></div><hr>
                    <div style="text-align: right; padding-right: 20px"><p>дата создания : <?= $data['date']?></p></div>
                    </div>
                    <form  style="margin: 30px 0;" action="?cont=rev" method="post" enctype="multipart/form-data" >
                        <input type="hidden" name="date"  value="<?= $data['date']?>">
                        <input type="hidden" name="nickname"  value="<?= $data['nickname']?>">
                        <input type="submit" name="delete"  value="Удалить" style="text-align: center; background-color: red;
    height: 40px">
                    </form>
                </div>
                <?php
            } ?>
        </div>
        <?php
        }elseif(isset($_POST['orders']) || isset($_GET['orders'])){?>
            <div>
                        <?php
                    $sql = "SELECT * FROM users";
                    $res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));
                    while($data = mysqli_fetch_assoc($res)){
                        ?>
                        <div style="border: 1px solid red; display: flex; padding: 10px; margin: 20px 0">
                            <h1><?= $data['login']?></h1>
                            <div style="display: flex; flex-direction: column">
                            <?php
                            $sql1 = "SELECT id_good, count, goods.title, goods.price, goods.img FROM card JOIN goods ON card.id_good = goods.id WHERE id_user = (SELECT id FROM users WHERE login = '{$_COOKIE['login']}')";
                            $res1 = mysqli_query($connect,$sql1) or die("error".mysqli_error($connect));
                            $count = 0;
                            $sum = 0;
                            while($data1 = mysqli_fetch_assoc($res1)){
                                ?>
                                <div style="display: flex; justify-content: space-between">
                                    <div style="display: flex">
                                            <h3 style="margin: auto 20px" ><?= $data1['title'] ?></h3>
                                            <h3 style=" color: #f71212">Цена :  <?= $data1['price'] ?></h3>
                                                <h3 style="margin: auto 20px">кол-во : <?= $data1['count'] ?> шт.</h3>
                                            <h3 style="color: #f71212">Сумма : <?= $data1['count'] * $data1['price'] ?></h3>
                                    </div>
                                </div>
                                <?php
                                $count += $data1['count'];
                                $sum += $data1['count'] * $data1['price'];
                            }?>
                            </div>
                            <div><h3>Количество покупок : <?= $count?></h3>
                                <h3>Стоимость покупок : <?= $sum?></h3></div>
                        </div>
                    <?php
                    }?>
            </div>
                <?php
        }?>
    </div>
</div>
