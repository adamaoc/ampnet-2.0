<?php 
$workname = $_GET['filename'];
$work = get_single_work($workname);
?>
<article class="single-blogpost single-work">
	<header class="blogheader" <?php if(!empty($work['banner_img'])) { ?>style="background-image: url('<?php echo $work['banner_img']; ?>');" <?php } ?>>
		<div class="colorwrap">
			<h1 style="background-color: rgba(<?php echo $work['banner_bgcolor']; ?>);">
				<?php echo $work['work_title']; ?>
				<small><?php echo $work['work_subtitle']; ?></small> 
			</h1>
		</div>
	</header>
	
	<div class="contents container">
		<h4><a href="<?php echo $work['work_url']; ?>">Check out <?php echo $work['work_url']; ?> &raquo;</a></h4>
		<div class="img-wrap work-img">
			<img src="/assets/img/<?php echo $work['img_url']; ?>" alt="<?php echo $work['img_alt']; ?>" />
		</div>
		<?php echo $work['work_content']; ?>
		<nav class="back-to-blog"><a href="/work/">&laquo; back to work list</a></nav>
	</div>
</article>