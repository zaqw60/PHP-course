<?php

function mathOperation($arg1, $arg2, $operation){
	switch ($operation) {
		case '+':

			function sum($arg1, $arg2){
				return $arg1 + $arg2;
			}
			echo sum($arg1, $arg2);
			break;

		case '-':
			function sub($arg1, $arg2){
				return $arg1 - $arg2;
			}
			echo sub($arg1, $arg2);
			break;

		case '/':
			function div($arg1, $arg2){
				return $arg1 / $arg2;
			}
			echo div($arg1, $arg2);
			break;

		case '*':
			function mul($arg1, $arg2){
				return $arg1 * $arg2;
			}
			echo mul($arg1, $arg2);
			break;

		 default:
		 	 echo "Задайте другую операцию ;-)";
			break;
	}
}

mathOperation(5, 4, "+");