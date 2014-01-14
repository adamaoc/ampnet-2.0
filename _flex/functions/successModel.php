<?php
require_once $flexSessions;
require_once $flexRedirect;

if(Session::exists('success')) {
	$success = Session::flash('success');
} else {
	Redirect::to('/contact/');
}
