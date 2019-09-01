<?php

    $f = "resume.pdf";

    $filename = basename($f);

    $filetype = filetype($f);

    $filesize = filesize($f);
    
    $path = "./resume.pdf";

    header('Content-Type: appliaction/octet-stream');
    header("Content-Tranfer-Encoding: Binary");
    // header("Content-Type: ".$filetype);
    // header("Content-Length: ".$filesize);
    header("Content-Disposition: attachment: filename=\"resume\"");

    readfile("./resume.pdf");



?>