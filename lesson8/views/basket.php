<div style="margin: 0 20px; padding-left: calc(50% - 570px); padding-right: calc(50% - 570px); background-color: aliceblue">
    <h2 style="text-align: center; margin: 0">Корзина</h2>
    <div style="display: flex; justify-content: space-between">
        <div style="gap: 30px">
                <?php
                require "views/config.php";
            $sql = "SELECT id_good, count, goods.title, goods.price, goods.img FROM card JOIN goods ON card.id_good = goods.id WHERE id_user = (SELECT id FROM users WHERE login = '{$_COOKIE['login']}')";
            $res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));
                $count = 0;
                $sum = 0;
                while($data = mysqli_fetch_assoc($res)){
                    ?>
                    <div style="display: flex; border: 1px solid red; width: 600px; ; justify-content: space-between; margin: 20px 0">
                            <div style="display: flex">
                                <img src="images_mini/<?= $data['img'] ?>" alt="">
                                    <div style="padding: 10px">
                                        <h3 ><?= $data['title'] ?></h3>
                                        <p style=" color: #f71212">Цена :  <?= $data['price'] ?></p>
                                        <div style="display: flex">
                                        <h3 >кол-во : </h3>
                                        <form  style="padding: 20px" action="?cont=bas&action=edit&id_good=<?= $data['id_good'] ?>" method="post" enctype="multipart/form-data">
                                            <input style="width: 40px" name="count" type="number" placeholder="<?= $data['count'] ?>" value="<?= $data['count'] ?>">
                                            <input type="submit" name="basket"  value="Редактировать">
                                        </form>
                                        </div>
                                        <h3 style="margin: 10px; color: #f71212">Сумма : <?= $data['count'] * $data['price'] ?></h3>
                                    </div>
                            </div>
                            <div style="display: flex; align-items: center; margin-right: 50px;">
                                    <form action="?cont=bas&action=del&id_good=<?= $data['id_good'] ?>" method="post" enctype="multipart/form-data">
                                    <input style="height: 40px; background-color: salmon" type="submit" name="basket"  value="Удалить">
                                    </form>
                            </div>
                     </div>
            <?php
                $count += $data['count'];
                $sum += $data['count'] * $data['price'];
            }?>
        </div>
        <div style="margin: 20px 0; margin: 20px 0; width: 300px;">
                <?php
                if(isset($_GET['success']) == 'true'){?>

                    <h3>Товар добавлен в корзину.</h3>
                    <h3>Продолжите выбор</h3>
                    <a href="?cont=catalog"><button>Каталог</button></a>
                    <?php
                }?>
                    <h3>Оформите покупку, если вы зарегистрированы или зарегистрируйтесь</h3>
            <?php
            if(isset($_GET['error']) == 'error'){?>
                <p style="color: red">Некорректное кол-тво товаров</p>
            <?php
            }
            ?>
                <h3>Количество покупок : <?= $count?></h3>
                <h3>Стоимость покупок : <?= $sum?></h3>
                <form action="?cont=buy" method="post"">
                <input style="height: 40px; background-color: salmon" type="submit" name="basket"  value="Оформить покупку">
                </form>
        </div>
    </div>
</div>



