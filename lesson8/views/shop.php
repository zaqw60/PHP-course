<div style="padding-left: calc(50% - 570px); padding-right: calc(50% - 570px); ; background-color: aliceblue; height: 100vh">
    <h1 style="text-align: center; margin: 0">Самые популярные товары</h1>
    <div style="display: flex; flex-wrap: wrap; gap: 20px; padding: 20px 0">
        <?php
        require "views/config.php";

        $sql = "select * from goods INNER JOIN card ON goods.id = card.id_good ORDER BY count DESC LIMIT 6";
        $res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));
        if($data=mysqli_num_rows($res) < 3){
            $sql = "select * from goods";
            $res = mysqli_query($connect,$sql) or die("error".mysqli_error($connect));
        }

        while($data = mysqli_fetch_assoc($res)){?>
            <div style="display: flex; width: 360px">
                <div style="border: 1px solid #f71212; text-align: center">
                    <h3><?= $data['title'] ?></h3>
                    <div style="display: flex">
                        <img src="images_mini/<?= $data['img']?>" alt="">
                        <div>
                            <p style="height: 150px; margin: 10px"><?= $data['short_info'] ?></p>
                            <h3 style="color: red; text-align: center">Цена : <?= $data['price'] ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>