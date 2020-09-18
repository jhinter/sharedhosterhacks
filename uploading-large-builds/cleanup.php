<?php
    $files = [
        './public.zip',
        './remove_old.php',
        './extract.php',
        './cleanup.php'
    ];

    foreach ($files as $file) {
        if (file_exists($file)) {
            unlink($file);
        }
    }
?>