<?php
	/*
	basename
	dirname
	pathinfo
	substr
	extract
	*/
	
	$images = glob('img/*.{png,jpg,jpeg}', GLOB_BRACE);
	
	foreach($images as $img) {
		//$info = pathinfo($img);
		//$thumb_name = $info['filename'] . '-thumb.' . $info['extension'];
		
		// OR
		// $filename = pathinfo($img, PATHINFO_FILENAME);
		// $extension = pathinfo($img, PATHINFO_EXTENSION);
		// $thumb_name = "thumb-{$filename}.{$extension}";
		
		// OR
		extract(pathinfo($img));		
		$thumb_name = "thumb-{$filename}.{$extension}";
		
		echo $thumb_name . "\n";
	}
	
?>