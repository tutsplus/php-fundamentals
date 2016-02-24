<?php

function is_logged_in() {
	return isset($_SESSION['username']);
}

function validate_user_creds($username, $password) {
	return ($username === USERNAME && $password === PASSWORD);
}