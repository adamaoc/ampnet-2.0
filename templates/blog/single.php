<?php
$fname = $_GET['filename'];
$post = getPost($fname);
?>

<article class="single-blogpost">
	<header class="blogheader" <?php if(!empty($post['main_img'])) { ?>style="background-image: url(<?php echo $post['main_img']; ?>);" <?php } ?>>
		<div class="colorwrap">
			<h1><?php echo $post['title']; ?> <small><?php echo $post['subtitle']; ?></small></h1>
		</div>
	</header>
	
	<div class="contents container">
		<p><meta>published on <?php echo $post['pub_date']; ?></meta></p>
		<?php echo $post['blog_content']; ?>
		<nav class="back-to-blog"><a href="/blog/">&laquo; back to blog list</a></nav>
	</div>
</article>
