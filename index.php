<?php

require_once "_flex/core/init.php";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>ampnet(media) - Adam Moore developing in Dallas, Texas</title>
        
        <meta name="description" content="Dallas Texas based Web Design and Development. I'm an innovative developer that can help your company dive into the vast ocean of the Internet.">
        <meta name="author" content="ampnetmedia.com">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="/assets/img/favicon.ico">

        <meta name="google-site-verification" content="fSdVe-xL70WGQ4EdrP7dZemxzq1oYbc_GI48aFY1_0w" />
        <meta name="msvalidate.01" content="B038142E19DDC9427F7BB86F8022EE9C" />

        <link rel="stylesheet" href="/assets/css/main.css">

        <link rel="apple-touch-icon" href="/assets/img/touch-icon-iphone.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/touch-icon-ipad.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/touch-icon-iphone-retina.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/touch-icon-ipad-retina.png" />

        <?php //<script src="js/vendor/modernizr-2.6.2.min.js"></script> ?>
        <meta property="twitter:account_id" content="32184368" />
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

	<?php
		// import the nav menu - same on all pages
		require_once "templates/nav.php";
		// render templates here - 
		// if homepage show homepage ext.
		if($is_home) {
            require_once "_flex/functions/GetWork.php";
			require_once "templates/homepage.php";
			require_once "templates/about-flash.php";
			require_once "templates/recent-work.php";
		}else if($is_about) {
			require_once "templates/about.php";
			require_once "templates/about-flash.php";
		}else if($is_work) {
            require_once "_flex/functions/GetWork.php";
			require_once "templates/work.php";
		}else if($is_contact) {
            require_once "templates/contact.php";
        }else if($is_success) {
            require_once "templates/success.php";
        }else if($is_blog) {
            require_once "_flex/functions/GetBlogs.php";
            if($is_post) {
                require_once "templates/blog/single.php";
            }else{
                require_once "templates/blog/index.php";
            }
        }

		// page footer - same on all pages
		require_once "templates/footer.php";
	?>  

        <?php //<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> ?>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>

        <script src="/assets/js/main.js"></script>

        <script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-9674179-2']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
        </script>
    </body>
</html>
