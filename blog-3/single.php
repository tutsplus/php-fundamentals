<?php

require 'blog.php';
use Blog\DB;

// Fetch all the posts
$post = DB\get_by_id( (int)$_GET['id'], $conn );

if ( $post ) {
	$post = $post[0];
	
	view('single', array(
		'post' => $post
	));
} else {
	header('location:/');
}
