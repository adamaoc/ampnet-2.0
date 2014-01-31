<?php
$url = explode('/', $_SERVER['REDIRECT_URL']);
$fname = $url[2];

$post = getPost($fname);
?>
<section class="contact">
	<article class="container">
		<h1>Single blog post here</h1>
	</article>
</section>