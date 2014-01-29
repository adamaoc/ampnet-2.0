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
// )
	$allBlogs = getBlogs();
	foreach ($allBlogs as $blog) {
?>

	<h1><?php echo $blog['blog_title']; ?></h1>
	<h2><?php echo $blog['blog_subtitle']; ?></h2>
	<img src="<?php echo $blog['main_img']; ?>" alt="<?php echo $blog['blog_title']; ?>" />

<?php } // off foreach ?>