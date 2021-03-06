<?php 

require_once $flexParsedown;

function getBlogs() {

    $handle = "./_flex/blog/posts/";
    
    if($handle = opendir(BLOG_DIR)) {

        $files = array();
        $filetimes = array();

        while (false !== ($entry = readdir($handle))) {
            
            if(substr(strrchr($entry,'.'),1)==ltrim(FILE_EXT, '.')) {

                // Define the blog file.
                $fcontents = file(BLOG_DIR.$entry);
                
                // Define the Blog Title
            	$blog_title = str_replace(array("\n", '*'), '', $fcontents[0]);

            	// Define the Blog SubTitle
                $blog_subtitle = trim(str_replace(array("\n", '*'), '', $fcontents[1]));

				// Define the Published Date
				$pub_date = trim(str_replace(array("\n", '*'), '', $fcontents[2]));

				// Define the Main Blog Image
				$main_img = trim(str_replace(array("\n", '*'), '', $fcontents[3]));
                
                if(empty($main_img) OR $main_img == "default") {
                    $main_img = "/assets/img/default-pattern.jpg";
                }
                
				// Define the Published Status (Published || Draft)
				$pub_status = trim(str_replace(array("\n", '*'), '', $fcontents[4]));

                // Define the introductory paragraph
                $blog_intro = Parsedown::instance()->parse($fcontents[6]);
                
                // Define the blog content
                $blog_content = Parsedown::instance()->parse(join('', array_slice($fcontents, 6)));
                
                $files[] = array('pub_date' => $pub_date, 'fname' => $entry, 'blog_title' => $blog_title, 'blog_subtitle' => $blog_subtitle, 'main_img' => $main_img, 'pub_status' => $pub_status, 'blog_intro' => $blog_intro, 'blog_content' => $blog_content);

            }
        }
        array_multisort($files, SORT_DESC);
        return $files;

    } else {
        return false;
    }
}

function getPost($fname) {

    $fname = explode('/', $fname);
    $fname = $fname[1];
    $fname = $fname.'.md';
    // Define the blog file.
    $fcontents = file(BLOG_DIR.$fname);


    // Define the Blog Title
    $blog_title = str_replace(array("\n", '*'), '', $fcontents[0]);
    $title_count = str_word_count($blog_title);
    if($title_count > 2) {
        $title_arr = explode(" ", $blog_title);
        $new_title .= "<span>";
        $i = 1;
        foreach ($title_arr as $word) {
            $new_title .= $word." ";
            if($i > 2) {
                $new_title .= "</span>";
            }
            $i++;
        }
        
        $blog_title = $new_title;
    }

    // Define the Blog SubTitle
    $blog_subtitle = trim(str_replace(array("\n", '*'), '', $fcontents[1]));

    // Define the Published Date
    $pub_date = trim(str_replace(array("\n", '*'), '', $fcontents[2]));

    // Define the Main Blog Image
    $main_img = trim(str_replace(array("\n", '*'), '', $fcontents[3]));
    
    if(empty($main_img) OR $main_img == "default") {
        $main_img = "/assets/img/default-pattern.jpg";
    }

    // Define the Published Status (Published || Draft)
    $pub_status = trim(str_replace(array("\n", '*'), '', $fcontents[4]));

    // Define the introductory paragraph
    $blog_intro = Parsedown::instance()->parse($fcontents[6]);
    
    // Define the blog content
    $blog_content = Parsedown::instance()->parse(join('', array_slice($fcontents, 6)));

    $blog_post = array("title" => $blog_title, "subtitle" => $blog_subtitle, "pub_date" => $pub_date, "main_img" => $main_img, "pub_status" => $pub_status, "blog_intro" => $blog_intro, "blog_content" => $blog_content);
    
    return $blog_post;
}