<?php
$url = explode('/', $_SERVER['REDIRECT_URL']);
$fname = $url[2];
print_r($_GET);
$post = getPost($fname);
?>
<section class="contact">
	<article class="container">
		<h1>Single blog post here</h1>
		<?php var_dump($post); ?>
	</article>
</section>