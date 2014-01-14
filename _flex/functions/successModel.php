<?php
$flexroot = $_SERVER['DOCUMENT_ROOT'];
$flexroot = explode('/', $flexroot);

$flexrootSession = $flexroot[0].'/'.$flexroot[1].'/'.$flexroot[2].'/'.$flexroot[3].'/'.'/flexhub/_flex/classes/Session.php';
require_once $flexrootSession;

$success = Session::get('success');
