<?php

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
        <meta name="description" content="I'm a web developer in Dallas, Texas.">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/assets/css/main.css">

        <?php //<script src="js/vendor/modernizr-2.6.2.min.js"></script> ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

	<?php
		// import the nav menu
		require_once "templates/nav.php";
		// ender templates here - 
		// if homepage show homepage ext.
		require_once "templates/homepage.php";
		require_once "templates/about-flash.php";
	?>  

        <?php //<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> ?>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>

        <script src="/assets/js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>