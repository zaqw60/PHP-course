<header style="text-align: center; background-color: gainsboro">
    <h1>Регистрация и Авторизация</h1>
    <div style="display: flex;
    justify-content: space-around">
        <div>
            <a href="../index.php"><button>главная сстраница</button></a>
            <a href="../registration/reg.php"><button>Регистрация и Вход</button></a>
        </div>
        <div style="display: flex;
    justify-content: space-around">
            <a href="../component/catalog.php"><button>Каталог</button></a>
            <form action="../component/basket.php?action=open" method="post" enctype="multipart/form-data">
                <input type="submit" name="basket"  value="Корзина">
            </form>
        </div>
    </div>
</header>

<div style="padding-left: calc(50% - 570px); padding-right: calc(50% - 570px)">

<?php
if ($_GET['success'] == 'true' && $_COOKIE['login']){?>
            <h1>Уважаемый <?=$_COOKIE['login']?>, Ваша учетная запись  подтверждена!</h1>
            <?php
                }else{?>
            <h1>Зарегистрируйтесь!</h1>
            <?php
                    }
                        ?>
            <form action="server.php" method="post">
            <p>Login</p>
            <input type="text" name="login">
            <p>Password</p>
            <input type="password" name="pass">
            <input type="submit" name="reg"  value="Регистрация">
            <input type="submit" name="reg"  value="Авторизация">
            </form>
        </div>