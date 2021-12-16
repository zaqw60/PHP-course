<header style="text-align: center; background-color: gainsboro">
    <h1>ЛИЧНЫЙ КАБИНЕТ</h1>
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

<?php
if ($_GET['success'] && $_COOKIE['login']):?>
<h1>Уважаемый <?=$_COOKIE['login']?>, Ваша учетная запись  подтверждена!</h1>
<?php
endif;
