<?php
/* METHOD ONE (ehh)
function set_count($file_name = 'counter.txt') {
	if ( file_exists($file_name) ) {
		// read the value
		$handle = fopen($file_name, 'r');
		
		// increment it by one
		$count = (int) fread($handle, 20) + 1;
		
		// write the new value
		// or use ftruncate()
		$handle = fopen($file_name, 'w');
		fwrite($handle, $count);
		
		// close
		fclose($handle);
	} else {
		// create it
		$handle = fopen($file_name, 'w+');
		$count = 1;
		
		// set a default value of 1
		fwrite($handle, $count);
		fclose($handle);
	}
	
	return $count;
}
*/

/* METHOD 2 (Better, but inconsistent)
function set_count($file_name = 'counter.txt') {
	if ( file_exists($file_name) ) {
		// read the value
		$count = (int) file_get_contents($file_name) + 1;
		file_put_contents($file_name, $count);
	} else {
		// create it
		
		// or use file_put_contents, like we did above.
		// It, too, will create the file, if it does not yet exist.
		$handle = fopen($file_name, 'w+'); 
		
		// set a default value of 1
		$count = 1;
		
		fwrite($handle, $count);
		fclose($handle);
	}
	
	return $count;
}
*/

/* METHOD 3
  Taking the file_put_contents technique that we learned in
  the example above, we can now rewrite the full function code, like so:
*/

function set_count($file_name = 'counter.txt') {
	if ( file_exists($file_name) ) {
		$count = (int) file_get_contents($file_name) + 1;
		file_put_contents($file_name, $count);
	} else {
		$count = 1;
		file_put_contents($file_name, $count);
	}
	
	return $count;
}

$count = set_count();

# Load the view
require 'index.tmpl.php';