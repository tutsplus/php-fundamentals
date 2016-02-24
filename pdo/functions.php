<?php

require 'config.php';

# mysql_connect('localhost', 'username', 'password');

$letter = 'J'; // temporary

try {
	$conn = new PDO('mysql:host=localhost;dbname=practice', $config['DB_USERNAME'], $config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$stmt = $conn->prepare('INSERT INTO users(username) VALUES(:username)');
	// $stmt->setFetchMode(PDO::FETCH_OBJ);

	$stmt->bindParam('username', $username, PDO::PARAM_STR);

	// Multiple bindings. Cool, huh?
	$users = array('AmyDoe', 'BobbyDoe', 'CliffDoe');
	foreach($users as $username) {
		$stmt->execute();
	}

	// $stmt->execute(array(
	// 	'letter' => $letter . '%'
	// ));

	// Will throw reference error
	// $stmt->bindParam(':letter', $letter . '%', PDO::PARAM_STR);
	// $stmt->execute();

	// $result = $stmt->fetchAll();

	// while($row = $stmt->fetch()) {
	// 	print_r($row);
	// }
} catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}