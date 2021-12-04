<?php
$path = "images/{$_FILES['photo']['name']}";
if (move_uploaded_file($_FILES['photo']['tmp_name'], $path)) {
	echo "Фотография {$_FILES['photo']['name']} сохранена";
};
header("Location: index.php");
 ?>