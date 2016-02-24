<?php

class House {
	public $color = 'white';
	public $rooms = 3;
	public $for_sale = true;

	public function __construct($color = null)
	{
		if ( $color ) {
			$this->color = $color;
		}
	}

	public function add_room()
	{
		$this->rooms++;
	}

	public function sell()
	{
		$this->for_sale = false;
	}
}

$house = new House('red');
$house->add_room();
$house->add_room();

echo "This {$house->color} house has {$house->rooms} rooms. ";

echo ($house->for_sale)
	? "It is for sale."
	: "It is not for sale.";


echo "<br>";

$house2 = new House();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->add_room();
$house2->sell();

echo "This {$house2->color} house2 has {$house2->rooms} rooms. ";
echo ($house2->for_sale)
	? "It is for sale."
	: "It is not for sale.";
