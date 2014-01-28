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

            	// Define the work url
                $work_url = trim(str_replace(array("\n", '*'), '', $fcontents[1]));

				// Define the image url
				$img_url = trim(str_replace(array("\n", '*'), '', $fcontents[2]));

				// Define the image alt text
				$img_alt = str_replace(array("\n", '*'), '', $fcontents[3]);

				// Define the class name
				$class_name = trim(str_replace(array("\n", '*'), '', $fcontents[4]));

				// Define the date
				$pub_order = trim(str_replace(array("\n", '*', 'order -'), '', $fcontents[5]));

                // Define the introductory paragraph
                $work_intro = Parsedown::instance()->parse($fcontents[7]);
                
                // Define the work content
                // $work_content = Parsedown::instance()->parse(join('', array_slice($fcontents, 6, $fcontents.length -1)));
                
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
?>