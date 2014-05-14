<?php 
$workname = $_GET['filename'];
$work = get_single_work($workname);
?>
<article class="single-blogpost">
	<header class="blogheader" <?php if(!empty($work['img_url'])) { ?>style="background-image: url(<?php echo $work['img_url']; ?>);" <?php } ?>>
		<div class="colorwrap">
			<h1><?php echo $work['work_title']; ?></h1>
		</div>
	</header>
	
	<div class="contents container">
		<div class="img-wrap">
			<img src="/assets/img/<?php echo $work['img_url']; ?>" alt="<?php echo $work['img_alt']; ?>" />
		</div>
		<?php echo $work['work_intro']; ?>
		<nav class="back-to-blog"><a href="/work/">&laquo; back to work list</a></nav>
	</div>
</article>