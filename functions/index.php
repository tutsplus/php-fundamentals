<?php

// functions.php
//function pp($value) {
//	echo '<pre>';
//	print_r($value);
//	echo '</pre>';
//}
//$arr = array('name' => 'Joe', 'age' => 40, 'occupation' => 'teacher');
//pp($arr);

//function array_pluck($toPluck, $arr) {
//	$ret = array();
//	
//	foreach($arr as $item) {
//		$ret[] = $item[$toPluck];
//	}
//	
//	return $ret;
//}


function array_pluck($toPluck, $arr) {
	return array_map(function($item) use($toPluck) {
		return $item[$toPluck];
	}, $arr);
}

$people = array(
	array('name' => 'Jeffrey', 'age' => 27, 'occupation' => 'Web Developer'),
	array('name' => 'Joe', 'age' => 50, 'occupation' => 'Teacher'),
	array('name' => 'Jane', 'age' => 30, 'occupation' => 'Marketing')
);

$names = array_pluck('name', $people);
foreach($names as $name) {
	echo $name;
}
