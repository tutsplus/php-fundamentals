<?php

$post = array(
	'author' 	   => 'Jeffrey Way',
	'title'		   => 'My Awesome Post',
	'body'   	   => 'Here is the body',
	'publish_date' => '6-10-2012',
	'category'     => 'Personal'
);

// $email = "<h1>{$post['title']}</h1>";
// $email .= "<p>By: {$post['author']}</p>";
// $email .= "<div>{$post['body']}";

//$email = sprintf("<h1>%s</h1><p>%s</p><div>%s</div>", $post['title'], $post['author'], $post['body']);

extract($post);


$email = <<<EOT
<h1>$title</h1>
<p>By: $author within the $category category.</p>

<div>$body</div>
EOT;

echo $email;