<?php

define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);

define('BLOG_URL', 'http://'.$_SERVER["SERVER_NAME"].'/');


$homepage = BLOG_URL;

// Define Current Page //
$currentpage  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] : 'https://'.$_SERVER["SERVER_NAME"];
$currentpage .= $_SERVER["REQUEST_URI"];


// Define Pages //
$is_home = ($homepage==$currentpage);
define('IS_HOME', $is_home);
define('IS_ABOUT', (bool)strstr($_SERVER['REQUEST_URI'], '/about/'));
define('IS_WORK', (bool)strstr($_SERVER['REQUEST_URI'], '/work/'));
define('IS_CONTACT', (bool)strstr($_SERVER['REQUEST_URI'], '/contact/'));
define('IS_SUCCESS', (bool)strstr($_SERVER['REQUEST_URI'], '/success/'));
$is_about = IS_ABOUT;
$is_work = IS_WORK;
$is_contact = IS_CONTACT;
$is_success = IS_SUCCESS;


// Define FLEX Classes // 
$docArray = explode('/', DOC_ROOT);
define('FLEX_ROOT', $docArray[0].'/'.$docArray[1].'/'.$docArray[2].'/'.$docArray[3].$flexroot);
$flexParsedown 	= FLEX_ROOT.'_flex/classes/Parsedown.php';
$flexSessions 	= FLEX_ROOT.'_flex/classes/Session.php';
$flexInput 		= FLEX_ROOT.'_flex/classes/Input.php';
$flexToken 		= FLEX_ROOT.'_flex/classes/Token.php';
$flexConfig 	= FLEX_ROOT.'_flex/classes/Config.php';
$flexDB 		= FLEX_ROOT.'_flex/classes/DB.php';
$flexRedirect	= FLEX_ROOT.'_flex/classes/Redirect.php';
$flexValidate	= FLEX_ROOT.'_flex/classes/Validate.php';

// Define Work Directory //
$posts_dir = DOC_ROOT.'/_flex/data/work/';
$file_ext = "md";
define('POSTS_DIR', $posts_dir);
define('FILE_EXT', $file_ext);


