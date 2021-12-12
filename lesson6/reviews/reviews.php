<container style="height: 100vh">
    <header style="height: 10%;text-align: center; background-color: gainsboro"> <h1>REVIEWS</h1><br>
        <a href="../index.php">На главную</a>
    </header>
    <div style="height: 70%; background-color: darkgray; padding: 5px">
    <?php
    require "config.php";

    $sql = "SELECT * FROM reviews WHERE 1";
    $res = mysqli_query($connect,$sql);

    while ($data = mysqli_fetch_assoc($res)){ ?>
        <div style="width: 80%; margin: 20px auto; background-color: aliceblue"><div style="height: 20px">Автор : <?= $data['nickname']?></div><hr><div><?= $data['review']?></div><hr><div style="text-align: right">дата создания : <?= $data['date']?></div></div>
        <?php
    } ?>
    </div>
<hr>
    <form style="background-color: aliceblue; height: 20%" action="server.php" method="post" enctype="multipart/form-data" >
<p><input type="text" name="nick" placeholder="nickname"></p>
<textarea name="rev" cols="100" rows="5" placeholder="review"></textarea>
<p><input type="submit" value="Отправить отзыв"></p>
</container>