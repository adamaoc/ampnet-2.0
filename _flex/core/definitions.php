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
define('IS_WORKS', (bool)strstr($_SERVER['REQUEST_URI'], '/work/'));
define('IS_CONTACT', (bool)strstr($_SERVER['REQUEST_URI'], '/contact/'));
define('IS_SUCCESS', (bool)strstr($_SERVER['REQUEST_URI'], '/success/'));
// define('IS_404', (bool)strstr($_SERVER['REQUEST_URI'], '/404/'));

define('IS_BLOG', (bool)strstr($_SERVER['REQUEST_URI'], '/blog/'));

$filename = $_GET['filename'];
$postname = $filename;
if(!empty($postname)) {
  define('IS_POST', (bool)strstr($_SERVER['REQUEST_URI'], $postname));
  $is_post = IS_POST;
}

$workname = $_GET['filename'];
if(!empty($workname)) {
	define('IS_WORK', (bool)strstr($_SERVER['REQUEST_URI'], $workname));
	$is_work = IS_WORK; 
}

$is_about = IS_ABOUT;
$is_works = IS_WORKS;
$is_contact = IS_CONTACT;
$is_success = IS_SUCCESS;
$is_blog = IS_BLOG;
// $is_404 = IS_404;
$is_local = defineLocals();

// Define FLEX Classes // 
define('FLEX_ROOT', $docPath);
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

// Define Blog Directory
$blog_dir = DOC_ROOT.'/_flex/blog/posts/';
define('BLOG_DIR', $blog_dir);

// Define city list
define('CITY_LIST', "Dallas, Kaufman, Forney, Rockwall, Heath, and more");