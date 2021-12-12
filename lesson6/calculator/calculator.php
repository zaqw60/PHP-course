<div style="background-color: silver; height: 100vh">
<header style="height: 10%; text-align: center; background-color: aliceblue">
    <h1>calculator 1</h1>
    <a href="../index.php">На главную</a>
</header>
<?php
$res = $_GET['res'];
?>
<form style="text-align: center; height: 45%" action="server.php" method="post" enctype="multipart/form-data" >
    <input style="height: 50px; width: 100px; text-align: center; margin: 40px; font-size: xx-large; background-color: antiquewhite" type="text" name="x">
    <select name="calc" style="height: 40px">
        <option selected disabled>Выберите действие</option>
        <option value="Сложить">Прибавить</option>
        <option value="Вычесть">Вычесть</option>
        <option value="Умножить">Умножить</option>
        <option value="Разделить">Разделить на</option>
    </select>
    <input style="height: 50px; width: 100px; text-align: center; margin: 40px; font-size: xx-large; background-color: antiquewhite" type="text" name="y">
    <p><input style="height: 40px; border-radius: 10px" type="submit" value="Равно"></p>
    <h3 style="height: 50px; width: 300px; text-align: center; margin: 40px auto; font-size: xx-large; background-color: pink"><?= $res?></h3>
</form>
<hr style="border-color: fuchsia">

<header style="height: 50px; text-align: center; background-color: #93c2eb"><h1>calculator 2</h1></header>

<form style="text-align: center; height: 45%" action="server.php" method="post" enctype="multipart/form-data" >
    <input style="height: 50px; width: 100px; text-align: center; margin: 40px; font-size: xx-large; background-color: lightcyan" type="text" name="x">
    <input style="height: 50px; width: 100px; text-align: center; margin: 40px; font-size: xx-large; background-color: lightcyan" type="text" name="y"><br>
    <input style="height: 40px; background-color: aquamarine; border-radius: 10px" type="submit" name="calc" value="Сложить">
    <input style="height: 40px; background-color: cornflowerblue; border-radius: 10px" type="submit" name="calc" value="Вычесть">
    <input style="height: 40px; background-color: bisque; border-radius: 10px" type="submit" name="calc" value="Умножить">
    <input style="height: 40px; background-color: aqua; border-radius: 10px" type="submit" name="calc" value="Разделить">
    <h3 style="height: 50px; width: 300px; text-align: center; margin: 40px auto; font-size: xx-large; background-color: pink" ><?= $res?></h3>
</form>
</div>


