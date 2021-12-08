<?php
require "config.php";

$sql = "SELECT * FROM gallery ORDER BY count DESC";
$res = mysqli_query($connect,$sql);

while ($data = mysqli_fetch_assoc($res)){?>
        <a href="fullimage.php?img=<?= $data['name']?>&count=<?= $data['count']?>&id=<?= $data['id']?>"><img style="margin: 20px;" width="100" src="small_images/<?= $data['name']?>" alt=""></a>
<?php
}
?>

<!--<form action="server.php" method="post" enctype="multipart/form-data">-->
<!--	<p>Загрузка фото</p>-->
<!--	<input type="file" name="photo" accept="image/*">-->
<!--	<input type="submit" value="Сохранить" name="">-->
<!--</form>-->




