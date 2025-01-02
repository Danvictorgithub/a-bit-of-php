<?php
$string = "somestring";
$number = 42;
$float = 3.14;
$boolean = true;
$array = array(1, 2, 3);
$arrayMap = array("a" => 1, "b" => 2, "c" => 3);


/* echo var_dump($string); */
/* echo var_dump($number); */
/* echo var_dump($float); */
/* echo var_dump($boolean); */
/* echo var_dump($array); */
/* echo var_dump($arrayMap); */

/* echo $arrayMap["a"]; */


class Shape {
	public $side;
	public function __construct(int $side) {
		$this->side = $side;
	}
	function greet() {
		/* echo "Hi I am a Shape with $this->side {$this->side == 1 ? 'sides' : 'side'}\n"; */
	}
}

class Square extends Shape {
	public function __construct($side=4) {
		parent::__construct($side);
	}
}

$square = new Square();
$oneSide = new Shape(1);
$oneSide->greet();
echo "{{1 > 2 ? 'true' : 'false'}}";
