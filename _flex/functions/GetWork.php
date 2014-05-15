<?php 

require_once $flexParsedown;

function get_all_posts() {

    $handle = "./_flex/data/work/";
    
    if($handle = opendir(POSTS_DIR)) {

        $files = array();
        $filetimes = array();

        while (false !== ($entry = readdir($handle))) {
            
            if(substr(strrchr($entry,'.'),1)==ltrim(FILE_EXT, '.')) {

                // Define the work file.
                $fcontents = file(POSTS_DIR.$entry);
                
            	$work_title = str_replace(array("\n", '*'), '', $fcontents[0]);

                // Define work Sub-Title
                $work_subtitle = str_replace(array("\n", '*'), '', $fcontents[1]);

                // Define the work url
                $work_url = trim(str_replace(array("\n", '*'), '', $fcontents[2]));

                // Define Main Banner Image
                $banner_img = trim(str_replace(array("\n", '*'), '', $fcontents[3]));

                // Define Banner BG-Color
                $banner_bgcolor = trim(str_replace(array("\n", '*'), '', $fcontents[4]));

                // Define the image url
                $img_url = trim(str_replace(array("\n", '*'), '', $fcontents[5]));

                // Define the image alt text
                $img_alt = str_replace(array("\n", '*'), '', $fcontents[6]);

                // Define the class name
                $class_name = trim(str_replace(array("\n", '*'), '', $fcontents[7]));

                // Define the date
                $pub_order = trim(str_replace(array("\n", '*', 'order -'), '', $fcontents[8]));

                // Define the introductory paragraph
                $work_intro = Parsedown::instance()->parse($fcontents[10]);
                
                $files[] = array('pub_order' => $pub_order, 'fname' => $entry, 'work_title' => $work_title, 'work_url' => $work_url, 'img_url' => $img_url, 'img_alt' => $img_alt, 'class_name' => $class_name, 'work_intro' => $work_intro);

            }
        }
        array_multisort($files);
        return $files;

    } else {
        return false;
    }
}

// $allworks = get_all_posts();
// echo "<pre>";
// print_r($allworks);
// echo "</pre>";

function get_single_work($fname) {

    $fname = explode('/', $fname);
    $fname = $fname[1];
    $fname = $fname.'.md';
    // Define the work file.
    $fcontents = file(POSTS_DIR.$fname);


    // Define the Blog Title
    $work_title = str_replace(array("\n", '*'), '', $fcontents[0]);
    $title_count = str_word_count($work_title);
    if($title_count > 2) {
        $title_arr = explode(" ", $work_title);
        $new_title .= "<span>";
        $i = 1;
        foreach ($title_arr as $word) {
            $new_title .= $word." ";
            if($i > 2) {
                $new_title .= "</span>";
            }
            $i++;
        }
        
        $work_title = $new_title;
    }

    // Define work Sub-Title
    $work_subtitle = str_replace(array("\n", '*'), '', $fcontents[1]);

    // Define the work url
    $work_url = trim(str_replace(array("\n", '*'), '', $fcontents[2]));

    // Define Main Banner Image
    $banner_img = trim(str_replace(array("\n", '*'), '', $fcontents[3]));

    // Define Banner BG-Color
    $banner_bgcolor = trim(str_replace(array("\n", '*'), '', $fcontents[4]));

    // Define the image url
    $img_url = trim(str_replace(array("\n", '*'), '', $fcontents[5]));

    // Define the image alt text
    $img_alt = str_replace(array("\n", '*'), '', $fcontents[6]);

    // Define the class name
    $class_name = trim(str_replace(array("\n", '*'), '', $fcontents[7]));

    // Define the date
    $pub_order = trim(str_replace(array("\n", '*', 'order -'), '', $fcontents[8]));

    // Define the introductory paragraph
    $work_intro = Parsedown::instance()->parse($fcontents[10]);
   
    // Define the work content
    $work_content = Parsedown::instance()->parse(join('', array_slice($fcontents, 9, $fcontents.length -1)));

    $work_post = array('pub_order' => $pub_order, 'fname' => $fname, 'work_title' => $work_title, 'work_subtitle' => $work_subtitle, 'banner_img' => $banner_img, 'banner_bgcolor' => $banner_bgcolor, 'work_url' => $work_url, 'img_url' => $img_url, 'img_alt' => $img_alt, 'class_name' => $class_name, 'work_intro' => $work_intro, 'work_content' => $work_content);
    
    return $work_post;
}
?>