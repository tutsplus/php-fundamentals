<?php

require 'functions.php';
use Blog\DB;

$conn = DB\connect($config);
if ( $conn ) {
	$users = DB\get('users', $conn);
} else die('Could not connect');
?>
<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		if ( $users ) {
			foreach($users as $user) {
				echo "<li>{$user['username']}</li>";
			}
		} else {
			echo "No rows returned.";
		}
	?>
</body>
</html>