<?php
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/config.php';
require_once "definitions.php";

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


if($is_contact) {
    require_once "_flex/functions/Email.php";
    require_once "_flex/functions/contact.php";
}
if($is_success) {
	require_once "_flex/functions/successModel.php";
}