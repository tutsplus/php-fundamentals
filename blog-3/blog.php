<?php

require 'functions.php';
require 'db.php';

// Connect to the db
$conn = Blog\DB\connect($config);
if ( !$conn ) die('Problem connecting to the db.');
