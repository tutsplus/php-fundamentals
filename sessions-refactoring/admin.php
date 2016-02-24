<?php

include 'functions.php';

session_start();

if ( !is_logged_in() ) {
	header('location: login.php');
	die();
}

?>
<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello, <?php echo $_SESSION['username']; ?></h1>
	<a href="logout.php">Logout</a>
</body>
</html>