<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

session_start();

$host = "localhost";
$username = "root";
$password = "root";
$dbname = "FlexHub";

// Create a global configuration
$GLOBALS['config'] = array(
	'mysql' => array(
		'host' 		=> $host,
		'username' 	=> $username,
		'password' 	=> $password,
		'db' 		=> $dbname
	),
	'session' => array(
		'session_name'	=> 'user',
		'token_name'	=> 'token'
	)
);

