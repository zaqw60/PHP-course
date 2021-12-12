<?php
 $x = (int)$_POST['x'];
 $y = (int)$_POST['y'];
 $calc = (int)$_POST['calc'];

 print_r($_POST);

switch ($calc = $_POST['calc']){
    case "Сложить":
        $res = $x + $y;
        break;
    case "Вычесть":
        $res = $x - $y;
        break;
    case "Умножить":
        $res = $x * $y;
        break;
    case "Разделить":
        $y != 0 ? $res = $x / $y : $res = "На 0 делить низзя!";
        break;

}
header(("Location: calculator.php?res=$res"));