<header style="text-align: center; background-color: gainsboro">
    <h1>ИНТЕРНЕТ МАГАЗИН</h1>
    <div style="display: flex;
    justify-content: space-around">
        <div>
            <a href="?cont=shop"><button>главная сстраница</button></a>
            <a href="?cont=reviews"><button>Отзывы</button></a>
            <a href="?cont=registration"><button>Регистрация и Вход</button></a>
            <?php
            if($_COOKIE['login'] == 'admin' && $_COOKIE['pass'] == '21232f297a57a5a743894a0e4a801fc3'){?>
                <a href="?cont=admin"><button>ADMIN</button></a>
            <?php
            }
            ?>
        </div>
        <div style="display: flex;
    justify-content: space-around">
            <a href="?cont=catalog"><button>Каталог</button></a>
            <form action="?cont=basket&action=open" method="post" enctype="multipart/form-data">
                <input type="submit" name="basket"  value="Корзина">
            </form>
        </div>
    </div>
</header>

