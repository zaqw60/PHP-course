<?php
if($_FILES['photo']['size'] < 4500000){
$path = "images/{$_FILES['photo']['name']}";
  move_uploaded_file($_FILES['photo']['tmp_name'], $path);
header("Location: index.php");
}else{
 echo "файл слишком большой";
}
 ?>
