задание 1<br>


<?php
$i = 1;
while($i <= 100){
     if($i % 3 == 0){
     echo $i . " ";
    $i++;
}
$i++;
}
?>
<hr>

задание 2<br>



<?php

$i = 0;
do{
	if($i == 0){
echo "$i - ноль.<br/>";
$i++;
}elseif ($i % 2 != 0){
	echo "$i - нечетное число.<br/>";
	$i++;
}
	echo "$i - четное число.<br/>";
	$i++;
}
 while ($i <= 9);

?>
<hr>

задание 3<br>

<?php

$arr = [
	"Московская область" => ["Москва","Зеленоград","Клин"],
	"Ленинградская область" => ["Санкт-Петербург","Всеволожск","Павловск","Кронштадт"],
	"Рязанская область" => ["Рязань","Новомичуринск","Скопин"]
];

foreach($arr as $reg => $town){
	if(is_array($town)){
		echo $reg.": <br>".implode(", ",$town)."<br>";
	}
	}
?>
<hr>

задание 4<br>


<?php


function translit($str){
	$alph = [
	"а" => "a",
	"б" => "b",
	"в" => "v",
	"г" => "g",
	"д" => "d",
	"е" => "e",
	"ё" => "e",
	"ж" => "zh",
	"з" => "z",
	"и" => "i",
	"й" => "y",
	"к" => "k",
	"л" => "l",
	"м" => "m",
	"н" => "n",
	"о" => "o",
	"п" => "p",
	"р" => "r",
	"с" => "s",
	"т" => "t",
	"у" => "u",
	"ф" => "f",
	"х" => "h",
	"ц" => "c",
	"ч" => "ch",
	"ш" => "sh",
	"щ" => "sch",
	"ь" => "'",
	"ы" => "y",
	"ъ" => "''",
	"э" => "e",
	"ю" => "yu",
	"я" => "ya"
];
	return strtr($str,$alph);
};
//print_r($alph);
echo translit("Бесплатный сервис Google позволяет мгновенно переводить слова");

?>
<hr>




задание 5<br>


<?php

function replace($str){
	return str_replace(" ", "_", $str);
}

echo replace("Бесплатный сервис Google позволяет мгновенно переводить слова");

?>
<hr>


задание 6<br>

<?php

$menu = [
	"Программы обучения" => [
		"Программирование", "Машинное обучение", "Веб разработка", "Анализ данных", "Мобильная разработка", "IT инфрастуктура", "Тестирование", "Разработка игр", "Информационная безопасность", "Какой язык программирования выбрать"
	],
	"База знаний" => ["Все материалы", "Материалы", "Программирование", "Маркетинг", "Дизайн", "Управление", "Форум", "Истории успеха", "Для детей и подростков"],
	"Мероприятия" => ["Личные консультации", "Карьерный план", "Путь в IT", "Востребованный специалист", "Карьерная мастерская", "Веб-дизайнер", "Карьера руководителя", "Путь новичка", "Онлайн-встреча с CEO GeekBrains"],
	"Поиск работы" => ["Компании", "Проекты", "Вакансии", "Как начать карьеру в IT?", "Работать в Geekbrains", "Карьерная мастерская", "Карьерный план на всю жизнь"],
	"Тестирование" => ["Все тесты", "Профориентация", "Подбор профессии"],
	"О компании" => ["О Geekbrains", "Лицензия", "Вакансии", "Партнёрам", "Контакты"],
	"Экспертам" => ["Стать экспертом", "Подать заявку на эксперта", "Подать заявку на ревьюера", "Подать заявку на наставника", "Подать заявку на декана", "Подать заявку на методиста", "Подать заявку на автора", "Подать заявку на помощника в обучении", "Подать заявку на позицию преподаватель", "Подать заявку на ментора"],
];

foreach($menu as $ul => $li){
		echo "<ul>".$ul."<li><a href='#'>".implode("</a></li><li><a href='#'>",$li)."</a></li></ul>";
	}
?>
<hr>



задание 7<br>


<?php
for ($i = 1; $i <= 9; print_r($i++)){};
?>


<hr>



задание 9<br>



<?php

echo "Первоначальный текс - 'Бесплатный сервис Google позволяет мгновенно переводить слова'<br>";

function trans($str){
	$alph = [
	"а" => "a",
	"б" => "b",
	"в" => "v",
	"г" => "g",
	"д" => "d",
	"е" => "e",
	"ё" => "e",
	"ж" => "zh",
	"з" => "z",
	"и" => "i",
	"й" => "y",
	"к" => "k",
	"л" => "l",
	"м" => "m",
	"н" => "n",
	"о" => "o",
	"п" => "p",
	"р" => "r",
	"с" => "s",
	"т" => "t",
	"у" => "u",
	"ф" => "f",
	"х" => "h",
	"ц" => "c",
	"ч" => "ch",
	"ш" => "sh",
	"щ" => "sch",
	"ь" => "'",
	"ы" => "y",
	"ъ" => "''",
	"э" => "e",
	"ю" => "yu",
	"я" => "ya"
	];

	$str = strtr($str,$alph);

		function rep($str){
		return str_replace(" ", "_", $str);
			};

	return rep($str);
};

echo "Видоизмененный текст - ".trans("'Бесплатный сервис Google позволяет мгновенно переводить слова'");



