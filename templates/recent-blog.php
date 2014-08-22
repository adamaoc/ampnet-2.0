<section class="recent-work">
	<div class="container">
		<h3>Recent Blog Post</h3>
		<ul class="work-list">
			<?php 
			$allBlogs = getBlogs();
			$i = 0;
			
			foreach ($allBlogs as $blog) {
				while ($i < 1) {
					$filename = $blog['fname'];
					$filename = explode('.', $filename);
					$bloglink = $filename[0];
				?>
				<li class="<?php echo $blog['class_name']; ?>">
					<div class="img-wrap">
						<a href="/blog/<?php echo $bloglink; ?>/">
							<img src="<?php echo $blog['main_img']; ?>" alt="<?php echo $blog['blog_title']; ?>" />
						</a>
					</div>
					<div class="text-wrap">
						<h5><a href="/blog/<?php echo $bloglink; ?>/" class="title"><?php echo $blog['blog_title']; ?> <?php echo $blog['blog_subtitle']; ?></a></h5>
						<p><?php echo $blog['blog_intro'] ?> <a href="/blog/<?php echo $bloglink; ?>/">read more &raquo;</a></p>
					</div>
				</li>
				<?php
				$i++;
				}
			}
			?>
		</ul>
	</div>
	<a href="/blog/" class="full-link">check out all of my blog posts</a>
</section>