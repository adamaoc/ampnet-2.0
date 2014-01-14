<?php 

require_once $flexConfig;
require_once $flexDB;
require_once $flexValidate;
require_once $flexInput;
require_once $flexToken;
require_once $flexSessions;
require_once $flexRedirect;



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
				'required' => true,
				'email' => true),
			'phone' => array(
				'required' => false,
				'min' => 10,
				'max' => 13),
			'reason' => array(
				'required' => true),
			'message' => array(
				'required' => true,
				'min' => 4)
		));

		if($validation->passed()) {
			
			sendMessage($_POST['name'], $_POST['company'], $_POST['email'], $_POST['phone'], $_POST['reason'], $_POST['message'], $_POST['site']);

			Redirect::to("/success/");
			
		} else {
			$errors = array();
			foreach($validate->errors() as $error) {
				$errors[] .= $error;
			}
		}
	}
}