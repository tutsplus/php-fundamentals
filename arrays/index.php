<?php
// $tuts_sites = array('nettuts+', 'psdtuts+', 'webdesigntuts+', 'wptuts+', 'mobiletuts+'); 
// $tuts_sites = ['nettuts+', 'psdtuts+', 'webdesigntuts+', 'wptuts+', 'mobiletuts+']; // only in PHP 5.4+

// Associative Array
$tuts_sites = array(
	'nettuts' => 'http://net.tutsplus.com',
	'psdtuts' => 'http://psd.tutsplus.com',
	'wptuts' => 'http://wp.tutsplus.com',
);

?>
<!doctype html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	<h1>Tuts+ Sites</h1>
	<ul>
		<?php 

		// foreach($tuts_sites as $site) {
		// 	echo "<li>$site</li>";
		// }

		// foreach($tuts_sites as $name => $url) {
		// 	echo "<li><a href='$url'>" . ucwords($name) . "+</a></li>";
		// }

		foreach($tuts_sites as $name => $url) : ?>
			<li>
				<a href="<?= $url; ?>"><?= $name; ?></a>
			</li>
		<?php endforeach ?>
	</ul>
</body>
</html>