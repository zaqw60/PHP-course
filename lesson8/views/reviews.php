<div style="padding-left: calc(50% - 570px);
    padding-right: calc(50% - 570px)">
    <div style="background-color: aliceblue">
    <h2 style="text-align: center; margin: 0">Отзывы</h2>
    </div>
    <div style="background-color: darkgray; padding: 5px">
        <?php
        require "views/config.php";

        $sql = "SELECT * FROM reviews ORDER BY date DESC";
        $res = mysqli_query($connect,$sql);

        while ($data = mysqli_fetch_assoc($res)){ ?>
            <div style="width: 80%; margin: 20px auto; background-color: aliceblue; border-radius: 30px;">
                <div style="height: 15px;
    padding-left: 20px"><p>Автор : <?= $data['nickname']?></p></div><hr>
                <div style="padding: 0 20px"><?= $data['review']?></div><hr>
                <div style="text-align: right; padding-right: 20px"><p>дата создания : <?= $data['date']?></p></div>
            </div>
            <?php
        } ?>
    </div>
    <hr>
    <div style="display: flex">
    <form style="background-color: aliceblue; height: 20%" action="?cont=rev" method="post">
        <p><input type="text" name="nick" placeholder="nickname" value="<?= $_COOKIE['login'] ?>"></p>
        <textarea name="rev" cols="100" rows="5" placeholder="review"></textarea>
        <p><input type="submit" value="Отправить отзыв"></p>
    </form>
    </div>
</div>
