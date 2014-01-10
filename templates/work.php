<section class="main-work">
	<div class="container">
		<h1>work <small>ampnet<span>(media)</span></small></h1>
		<section class="recent-work">
			<div class="container">
				<h3>Recent Work</h3>
				<ul class="work-list">
					<?php 
					$allworks = get_all_posts();
					foreach ($allworks as $work) {
						?>
						<li class="<?php echo $work['class_name']; ?>">
							<h4 class="list-title"><a href="http://<?php echo $work['work_url']; ?>" target="_blank"><?php echo $work['work_url']; ?></a></h4>
							<div class="img-wrap">
								<img src="/assets/img/<?php echo $work['img_url']; ?>" alt="<?php echo $work['img_alt']; ?>" />
							</div>
							<div class="text-wrap">
								<h5><?php echo $work['work_title']; ?></h5>
								<p><?php echo $work['work_intro'] ?> <a href="http://<?php echo $work['work_url']; ?>" target="_blank">checkout the site &raquo;</a></p>
							</div>
						</li>
						<?php
					}
					?>
				</ul>
			</div>
		</section>
	</div>
</section>