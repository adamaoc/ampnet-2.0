<?php
$fname = $_GET['filename'];
$post = getPost($fname);
?>
<section class="contact">
	<article class="container">
		<h1><?php echo $post['title']; ?></h1>
		<img src="<?php echo $post['main_img']; ?>" alt="<?php echo $post['title']; ?>" />
		<h2><?php echo $post['subtitle']; ?></h2>
		<p><meta><?php echo $post['pub_date']; ?></meta></p>
		<div class="contents">
			<?php echo $post['blog_content']; ?>
		</div>
		<nav class="back-to-blog"><a href="/blog/">&laquo; back to blog list</a></nav>
	</article>
</section>