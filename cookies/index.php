<?php

// setcookie('fontSize', 25, time() + 60 * 30, '/');

// Need to access as an array?
setcookie('prefs[fontSize]', 25);
setcookie('prefs[favoriteCategory]', 'news');
setcookie('prefs[screenWidth]', '1024');
?>
<html>
<head>
	<title></title>
	<style>
	body {
		font-size: <?= htmlspecialchars($_COOKIE['fontSize']); ?>
	}
	</style>
</head>
<body>

	<?php
	if ( isset($_COOKIE['prefs']) ) {
		foreach($_COOKIE['prefs'] as $key => $val ) {
			echo '<li>' . htmlspecialchars($key) . ': ' . htmlspecialchars($val);
		}
	}
	?>

</body>
</html>