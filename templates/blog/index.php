<?php 
// (
//     [pub_date] => 1/27/2014
//     [fname] => learning-from-the-best.md
//     [blog_title] =>  Learning from the best
//     [blog_subtitle] => How to learn from online blogs and videos
//     [main_img] =>  http://www.phpmysql.net/wp-content/uploads/2010/12/PHPLearn.jpg
//     [pub_status] => Published
//     [blog_intro] => line one - Lorem ipsum dolor si
//     [blog_content] => line one - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
// ) ?>
<section class="contact">
	<div class="container">
		<h1>Blogging with <small>ampnet(<span>media</span>)</small></h1>

	<?php 
		$allBlogs = getBlogs();
		foreach ($allBlogs as $blog) {
			$filename = $blog['fname'];
			$filename = explode('.', $filename);
			$bloglink = $filename[0];
	?>
		<article class="post">
			<h2>
				<a href="/blog/<?php echo $bloglink; ?>">
					<?php echo $blog['blog_title']; ?>
				</a>
			</h2>
			<h3><?php echo $blog['blog_subtitle']; ?></h3>
			<p><date class="metadata"><?php echo $blog['pub_date']; ?></date></p>
			<figure class="img-wrap">
				<img src="<?php echo $blog['main_img']; ?>" alt="<?php echo $blog['blog_title']; ?>" />
				<figcaption><?php echo $blog['blog_title']; ?></figcaption>
			</figure>
		</article>
	<?php } // off foreach ?>
	</div>
</section>