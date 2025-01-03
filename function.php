<?php declare(strict_types=1);

/* declare(strict_types=1); */

/* function hello() */
/* { */
/* 	echo "Hello World\n"; */
/* } */

/* hello(); */

/* function greet(string $name) */
/* { */
/* 	echo "Hello {$name}\n"; */
/* } */
/**/
/* greet("Dan Victor"); */
/* greet(1.0); */


/* pass by referece */


/* $x = 5; */
/**/
/* function changeVal(&$value) { */
/* 	$value = 20; */
/* } */
/**/
/* changeVal($x); */
/**/
/* echo $x; */


/* function functionWithDefaultValue(string $value = "default") */
/* { */
/* 	echo $value; */
/* } */


/* functionWithDefaultValue(); */
/**/
/* functionWithDefaultValue("Dan Victor"); */

/* function sum(int ...$a) { */
/* 	echo var_dump($a); // Interesting..... */
/* } */
/**/
/* sum(); */

/* function sum(int ...$a) { */
/* 	$total = 0; */
/* 	foreach($a as $num) { */
/* 	$total += $num; */
/* 	} */
/* 	return $total; */
/* } */
/**/
/* echo sum(1,2,3,4); */
/**/

/* function addNumber(int $a,int $b) { */
/* return a + b; */
/* 									 } */
/**/
/* echo addNumber(1,"3"); */

