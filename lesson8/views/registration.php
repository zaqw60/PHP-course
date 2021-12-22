<div style="padding-left: calc(50% - 570px); padding-right: calc(50% - 570px); ; background-color: aliceblue">
    <h2 style="text-align: center; margin: 0">Регистрация</h2>

<?php
if (isset($_GET['success']) == 'true' || isset($_COOKIE['login'])){?>
    <div style=" height: 100vh">
            <h1 style="margin: 0">Уважаемый <?=$_COOKIE['login']?>, Ваша учетная запись  подтверждена!</h1>
            <form action="?cont=reg" method="post">
                <input type="submit" name="ident"  value="Выход">
            </form>
    </div>
            <?php
                }elseif(isset($_GET['reg']) == 'true'){?>
        <div style=" height: 100vh">
                    <h1>Вы успешно зарегистрированы! Войдите на сайт, используя свои логин и пароль!</h1>
                    <form action="?cont=reg" method="post">
                        <p>Login</p>
                        <input type="text" name="login">
                        <p>Password</p>
                        <input type="password" name="pass">
                        <input type="submit" name="ident"  value="Авторизация">
                    </form>
        </div>
    <?php
    }else{
    ?>
    <div style=" height: 100vh">
            <h1 style="margin: 0">Зарегистрируйтесь!</h1>


          <form action="?cont=reg" method="post">
            <p>Login</p>
            <input type="text" name="login">
            <p>Password</p>
            <input type="password" name="pass">
           <input type="submit" name="ident"  value="Регистрация">
           <input type="submit" name="ident"  value="Авторизация">
           </form>
    </div>

<?php }

