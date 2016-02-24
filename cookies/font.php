<?php

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	setcookie('font_size', (int) $_POST['font-size'], time() + 60 * 60);
	header('Location: font.php');
}

// Ehhh...
// if ( isset($_POST['font-size']) ) {
// 	$font_size = $_POST['font-size'];
// } else if( isset($_COOKIE['fontSize']) ) {
// 	$font_size = $_COOKIE['fontSize'];
// } else {
// 	$font_size = 16;
// }

$font_size = isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] . 'px' : '16px';


?>
<!doctype html>
<html>
<head>
	<title></title>
	<style>
	body {
		font-size: <?= htmlspecialchars($font_size) . ';'; ?>
	}
	li { list-style: none; }
	ul, li { margin: 0; padding: 0; }

	</style>
</head>
<body>

	<form action="" method="post">
		<li>
			<label for="font-size">Your Preferred Font Size?</label><br>
			<select name="font-size" id="font-size">
				<option value="10">10</option>
				<option value="20">20</option>
				<option value="30">30</option>
				<option value="40">40</option>
			</select>
		</li>

		<li>
			<input type="submit" name="submit" value="Submit">
		</li>
	</form>

	<h2>My Page</h2>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

</body>
</html>