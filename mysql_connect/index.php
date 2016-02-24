<?php 
require 'functions.php';
require 'config.php';

$conn = connect($config['DB_HOST'],
				$config['DB_USERNAME'],
				$config['DB_PASSWORD'],
				'practice');

$results = query('SELECT * FROM users', $conn);

require 'index.view.php';
