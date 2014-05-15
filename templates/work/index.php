<section class="main-work">
	<div class="container">
		<h1>work <small>ampnet<span>(media)</span></small></h1>
		<section class="recent-work">
			<div class="container">
				<h3 class="page-title"><?php 
					if(isset($page_title)) {
						echo $page_title;		
					}else {
						echo "<span>Portfolio</span> - DFW Web Development and Design";
					} ?></h3>
				<?php 
					if(isset($page_blurb)) {
						echo "<p class='page-blurb'>".$page_blurb."</p>";
					}
				?>
				<ul class="work-list">
					<?php 
					$allworks = get_all_posts();
					foreach ($allworks as $work) {
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
					}
					?>
				</ul>
			</div>
		</section>
	</div>
</section>
