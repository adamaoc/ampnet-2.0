<?php

function titleGen() {
	$uri = $_SERVER['REQUEST_URI'];
	
	$title = "Dallas, Texas Freelance Web Development, Design, and SEO making beautiful web pages for companies small and large in ".CITY_LIST.".";

	if($uri == "/about/") {
		$title = "About ampnet media - the Dallas, Texas Freelance Web Developer who is looking to help take your company get online.";
	} elseif ($uri == "/work/") {
		$title = "The ampnet media Portfolio where you can get a glimpse into what I've done and what I'm able to do.";
	} elseif ($uri == '/contact/') {
		$title = "Contact me with any questions. I service anywhere in the DFW area including ".CITY_LIST."!";
	}

	return $title;
}

function metaDesc() {
	
	$desc = "I am a web developer out of Dallas, Texas that wants to help your company dive into the vast ocean of the Internet. I serve the ".CITY_LIST." areas. I can make sure that you'll be found with first class SEO (search engine optimization). I'll make sure you'll be noticed and your users have a great experience with a great design focused on UX/UI (User Experience/User Interface) and your business goals in mind. I will also make sure you're able to connect with your audience like never before with outstanding social media integration, development, and consulting.";

	if($uri == "/blog/") {
		$desc = "The ampnet media blog...";
	}elseif ($uri == '/contact/') {
		$desc = "Have questions or concerns for me? Shoot me an email here and I'll get back with you as soon as possible. Give me your name, email address, city where you reside, and a detailed message here. I love hearing from my clients and potential clients, so if you have any questions or concerns please do not hesitate to contact me!";
	}

	return $desc;
}