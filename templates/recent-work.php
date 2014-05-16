<section class="recent-work">
	<div class="container">
		<h3>Recent Work</h3>
		<ul class="work-list">
			<?php 
			$allworks = get_all_posts();
			$i = 0;
			
			foreach ($allworks as $work) {
				while ($i < 1) {
				?>
				<li class="<?php echo $work['class_name']; ?>">
					<div class="img-wrap">
						<a href="/work/<?php echo $work['class_name']; ?>/">
							<img src="/assets/img/<?php echo $work['img_url']; ?>" alt="<?php echo $work['img_alt']; ?>" />
						</a>
					</div>
					<div class="text-wrap">
						<h5><a href="/work/<?php echo $work['class_name']; ?>/"><?php echo $work['work_title']; ?></a></h5>
						<p><?php echo $work['work_intro'] ?> <a href="/work/<?php echo $work['class_name']; ?>/">check-out more &raquo;</a></p>
					</div>
				</li>
				<?php
				$i++;
				}
			}
			?>
		</ul>
	</div>
	<a href="/work/" class="full-link">check out all of my work</a>
</section>