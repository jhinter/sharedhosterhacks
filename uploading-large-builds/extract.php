<?php
  $archive = 'public.zip';
  $path = pathinfo(realpath($archive), PATHINFO_DIRNAME);

  $zip = new ZipArchive;
  $res = $zip->open($archive);
  if ($res === TRUE) {
    // extract it to the path we determined above
    $zip->extractTo($path);
    $zip->close();
    echo "$archive extracted to $path";
  } else {
    echo "Couldn't open $archive";
  }
?>