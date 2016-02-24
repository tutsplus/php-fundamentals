<?php
session_start();

session_destroy();
$_SESSION = array();
// delete the cookie. (Next lesson)

header('Location: login.php');