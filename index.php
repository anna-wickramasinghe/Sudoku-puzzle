<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";

class Car{
	public $color;
	public $company;

	public function __construct($color, $company){
		$this->color = $color;
		$this->company = $company;

	}

	public function message(){
		return "this is my ".$this->color. " color " .$this->company. " made car.";

	}
}

$my_car = new Car("red", "BMW");


var_dump($my_car);













?> 

</body>
</html>