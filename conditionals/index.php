<?php

$month = 'June';


/*
 * If Statements
 */

// if($month == 'January') {
// 	echo 'It is Jan!';
// } elseif($month == 'February') {
// 	echo 'It is Feb!';
// } elseif($month == 'March') {

// } else {
// 	echo 'Not the right month!';
// }


/*
 * Switch Statements
 */

// switch($month) {
// 	case 'January':
// 		echo 'It is Jan!';
// 		break;

// 	case 'February':
// 		echo 'It is Feb!';
// 		break;

// 	case 'March':
// 		echo 'It is March!';
// 		break;		

// 	default:
// 		echo 'Not the right month!';
// }




/*
 * Lookups
 */

// $months = array(
// 	'January'   => 'It is Jan',
// 	'February'  => 'It is February',
// 	'March' 	=> 'It is March'
// );

// echo isset($months[$month]) ? $months[$month] : 'Not the right month!';
// echo $months['January'];



/*
 * and an or (or && and ||)
 */

if ( $month == 'May' or $month == 'June' ) {
	echo 'Is May or June';
} else {
	echo 'It is not one of those.';
}




