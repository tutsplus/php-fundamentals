<?php

function view($path, $data = null) 
{
	if ( $data ) {
		extract($data);
	}

	$path .= '.view.php';

	include "views/layout.php";
}
