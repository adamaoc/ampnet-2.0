<?php
//	[name] => Adam Moore
//  [company] => txgarage
//  [email] => adamaoc@gmail.com
//  [phone] => 2147094699
//  [reason] => Looking for a quote
//  [message] => This is the message
//  [site] => ampnetmedia
//  [token] => 3457e1fba42739527883454f2f8002e5

function sendMessage($name, $company, $email, $phone, $reason, $message, $site) {
	
	$EmailFrom = $email;
	$EmailTo = "contact@ampnetmedia.com";

	// prepare email body text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $name;
	$Body .= " (".$company.")";
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Phone: ";
	$Body .= $phone;
	$Body .= "\n";
	$Body .= "Reason: ";
	$Body .= $reason;
	$Body .= "\n";
	$Body .= "Message: ";
	$Body .= $message;
	$Body .= "\n";

	$Subject = "";
	$Subject .= "Contact message from ";
	$Subject .= $site;

	$success = array(
		'name' => $name, 
		'company' => $company, 
		'email' => $email, 
		'phone' => $phone, 
		'reason' => $reason, 
		'message' => $message);
	// set session
	Session::flash('success', $success);
	
	// send email 
	// mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
}

function validate_send_email($Name, $City, $address, $Email, $Message) {
	$EmailFrom = "contact@ampnetmedia.com";
	$EmailTo = "adam@ampnetmedia.com";
	$Subject = "New message from ampnetmedia - ";
	$Name = Trim(stripslashes($Name)); 
	$City = Trim(stripslashes($City)); 
	$address = Trim(stripslashes($address));
	$Email = Trim(stripslashes($Email)); 
	$Message = Trim(stripslashes($Message)); 

	// validation
	$validationOK=true;

	$error = array();

	if (isset($address)) {
		if ($address == '' or $address == ' ') {
			$validationOK = true;
		}else{
			var_dump($address);
			$validationOK = false;
			$error[] = "We're sorry, something went wrong here... Please try again.";
		}
	}
	if (isset($Name)) {
		if ($Name == '' or $Name == ' ') {
			$validationOK = false;
			$error[] = "Please enter a name in the Name field."; 
		}
	}
	if (isset($City)) {
		if ($City == '' or $City == ' ') {
			$validationOK = false;
			$error[] = "Please enter a city and state for our convinence."; 
		}
	}

	if (isset($Email)) {
		$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
		if (!preg_match($pattern, $Email)) {
			$validationOK = false;
			$error[] = "Please enter a valid Email address";
		}
	}

	if (isset($Message)) {
		if ($Message == '' or $Message == ' ') {
			$validationOK = false;
			$error[] = "Please enter a message into the Message box."; 
		}
	}

	if (!$validationOK) {
		$emailStatus = $error;
		
	} else {
		sendMessage($Name, $City, $Email, $Message, $EmailTo, $Subject, $EmailFrom);
		$emailStatus = 'success';
		// print "<meta http-equiv=\"refresh\" content=\"0;URL=/contact/contactthanks\">";
	}

	return $emailStatus;
}
?>