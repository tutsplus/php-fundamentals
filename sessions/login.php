<?php

session_start();

// Just for now...
define('USERNAME', 'JeffreyWay');
define('PASSWORD', '1234');

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	// get their values
	$username = $_POST['username'];
	$password = $_POST['password'];

	// validate that against the records
	// Viewer: Can this be abstracted away to a reusable function?
	if ( $username === USERNAME && $password === PASSWORD ) {
		// credentials are correct

		// login + set session
		$_SESSION['username'] = $username;
		header("Location: admin.php");
	} else {
		$status = "Incorrect login credentials.";
	}
	
}

// Detect whether a specific form was submitted
// if ( isset($_POST['loginForm'])) {
// 	echo 'posted';
// }

?>

<!doctype html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Login</h1>
<form action="login.php" method="post">
	<ul>
		<li>
			<label for="username">Username: </label>
			<input type="text" name="username">
		</li>

		<li>
			<label for="password">Password: </label>
			<input type="password" name="password">
		</li>

		<li>
			<input type="submit" value="Login" name="loginForm">	
		</li>
	</ul>

	<?php if ( isset($status) ) : ?>
	<p><? echo $status; ?></p>
	<?php endif; ?>

</form>

</body>
</html>