<?php

$photos = scandir("small_images");
//print_r($photos);
for ($i=2; $i < count($photos); $i++) {
	if(($i-1) % 4 == 0){?>
	   <a data-fancybox href="images/<?= $photos[$i]?>"><img style="margin: 20px;" width="100" src="small_images/<?= $photos[$i]?>" alt=""></a><br>
	<?php } else { ?>
		<a data-fancybox href="images/<?= $photos[$i]?>"><img style="margin: 20px;" width="100" src="small_images/<?= $photos[$i]?>" alt=""></a>

<?php
}
}
?>

<form action="server.php" method="post" enctype="multipart/form-data">
	<p>Загрузка фото</p>
	<input type="file" name="photo" accept="image/*">
	<input type="submit" value="Сохранить" name="">
</form>




