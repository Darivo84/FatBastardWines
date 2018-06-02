<?php

$file_name = $_GET['file'];
 
// make sure it's a file before doing anything!
if(is_file($file_name))
{
 
    /*
        Do any processing you'd like here:
        1.  Increment a counter
        2.  Do something with the DB
        3.  Check user permissions
        4.  Anything you want!
    */
 
    // required for IE
    if(ini_get('zlib.output_compression')) { ini_set('zlib.output_compression', 'Off'); }
 
    // get the file mime type using the file extension
    switch(strtolower(substr(strrchr($file_name,'.'),1)))
    {
        case 'pdf': $mime = 'application/pdf'; break;
        case 'png': $mime = 'image/png'; break;
        case 'zip': $mime = 'application/zip'; break;
        //case 'jpeg':
        case 'jpg': $mime = 'image/jpg'; break;
        default: $mime = 'application/octet-stream';
        // default: $mime = 'application/force-download';
    }
    header('Pragma: public');   // required
    header('Expires: 0');       // no cache
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private',false);
    header('Content-Type: '.$mime);
   // header("Content-Type: application/octet-stream");
    header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: '.filesize($file_name));    // provide file size
    readfile($file_name);       // push it out
    exit();
 
}

?>
