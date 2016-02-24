<?php

function view($path, $data = null) 
{
	if ( $data ) {
		extract($data);
	}
	include "views/{$path}.view.php";
}
