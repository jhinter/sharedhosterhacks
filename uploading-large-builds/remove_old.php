<?php
    // 
    function unlinkr($dir, $pattern = "*") {
        // find all files and folders matching pattern
        $files = glob($dir . "/$pattern"); 

        foreach($files as $file){ 
            // if it's a directory, delete files inside it     
            if (is_dir($file) and !in_array($file, array('..', '.')))  {
                unlinkr($file, $pattern);
                rmdir($file);
            } else if(
                is_file($file) and
                ($file != __FILE__) and // make sure you don't delete the current script
                ($file != $dir."/extract.php") and
                ($file != $dir."/public.zip") and
                ($file != $dir."/cleanup.php")) {
                unlink($file); 
            }
        }
    }

    // current working directory
    $dir = getcwd();
    unlinkr($dir);
?>