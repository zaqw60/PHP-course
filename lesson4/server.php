<?php
if($_FILES['photo']['size'] < 8000){
$path = "images/{$_FILES['photo']['name']}";
  move_uploaded_file($_FILES['photo']['tmp_name'], $path);
header("Location: index.php");
}else{
 echo "файл слишком большой";?>
 <a href="index.php">Вернуться на главную</a>
<?php
}
 ?>
