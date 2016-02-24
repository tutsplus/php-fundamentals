<?php

require 'blog.php';
use Blog\DB;

// Fetch all the posts
$posts = DB\get('posts', $conn);

view('index', array(
	'posts' => $posts,
	'name' => 'John Doe'
));
