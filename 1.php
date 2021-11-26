<?php

$a = -2;//rand(-20,20);

$b = 0;//rand(-20,20);

if($a >= 0 && $b >=0){
	echo $a - $b;
}elseif ($a < 0 && $b <0) {
	echo $a * $b;
}else{
	echo $a + $b;
}



