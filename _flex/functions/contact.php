<?php 
// require_once "parsedown.php";
$flexroot = $_SERVER['DOCUMENT_ROOT'];
$flexroot = explode('/', $flexroot);
$flexrootValidate = $flexroot[0].'/'.$flexroot[1].'/'.$flexroot[2].'/'.$flexroot[3].'/'.'/flexhub/_flex/classes/Validate.php';
$flexrootInput = $flexroot[0].'/'.$flexroot[1].'/'.$flexroot[2].'/'.$flexroot[3].'/'.'/flexhub/_flex/classes/Input.php';
$flexrootToken = $flexroot[0].'/'.$flexroot[1].'/'.$flexroot[2].'/'.$flexroot[3].'/'.'/flexhub/_flex/classes/Token.php';
$flexrootSession = $flexroot[0].'/'.$flexroot[1].'/'.$flexroot[2].'/'.$flexroot[3].'/'.'/flexhub/_flex/classes/Session.php';
$flexrootConfig = $flexroot[0].'/'.$flexroot[1].'/'.$flexroot[2].'/'.$flexroot[3].'/'.'/flexhub/_flex/classes/Config.php';
$flexrootDB = $flexroot[0].'/'.$flexroot[1].'/'.$flexroot[2].'/'.$flexroot[3].'/'.'/flexhub/_flex/classes/DB.php';

require_once $flexrootConfig;
require_once $flexrootDB;
require_once $flexrootValidate;
require_once $flexrootInput;
require_once $flexrootToken;
require_once $flexrootSession;

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {

		$validate = new Validate();

		$validation = $validate->check($_POST, array(
			'name' => array(
				'required' => true,
				'min' => 4),
			'company' => array(
				'required' => true,
				'min' => 3),
			'email' => array(
				'required' => false,
				'email' => true),
			'phone' => array(
				'required' => false,
				'min' => 10,
				'max' => 13),
			'reason' => array(
				'required' => true)
		));

		if($validation->passed()) {
			echo "Passed";

		} else {
			$errors = array();
			foreach($validate->errors() as $error) {
				$errors[] .= $error;
			}
		}
	}
}