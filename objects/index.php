<?php

//$person = new stdClass;
//$person->first = "John";
//$person->last = "Doe";
//$person->job = "Teacher";



$person = array(
	'first' => 'John',
	'last' => 'Doe'
);

var_dump($person);

echo $person['first'];

$o = (object) $person;

echo $o->first;