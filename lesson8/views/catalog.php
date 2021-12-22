<div style="padding-left: calc(50% - 570px);
    padding-right: calc(50% - 570px); background-color: aliceblue">
    <h2 style="text-align: center; margin: 0">Каталог товаров</h2>
    <div style="display: flex; flex-wrap: wrap; gap: 20px; padding: 20px 0">
        <?php
        require "views/config.php";

        $sql = "select * from goods";
        $res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));

        while($data = mysqli_fetch_assoc($res)){?>
        <div style="display: flex; width: 360px">
        <div style="border: 1px solid #f71212; text-align: center">
            <h3><?= $data['title'] ?></h3>
            <div style="display: flex">
                <img src="images_mini/<?= $data['img']?>" alt="">
                <div>
                <p style="height: 150px; margin: 10px"><?= $data['short-info'] ?></p>
                <h3 style="color: red; text-align: center">Цена : <?= $data['price'] ?></h3>
                </div>
            </div>
            <hr>
            <a href="?cont=card&id=<?= $data['id'] ?>"><h2 style="text-align: center; color: red; height: 30px">КУПИТЬ</h2></a>
        </div>
        </div>
            <?php
        }
        ?>
    </div>
</div>

