<?php

/* File to write errors to */
$theFile = "jserror.txt";

/* pull the error information from the query string */
if (isset($_GET['url']))
    $url = htmlentities(substr(urldecode($_GET['url']),0,1024));
else
    $url = "";

if (isset($_GET['message']))
    $message = htmlentities(substr(urldecode($_GET['message']),0,1024));
else
    $message = "";

if (isset($_GET['line']))
    $line = htmlentities(substr(urldecode($_GET['line']),0,1024));
else
    $line = "";


/* record the Browser, IP address and time */
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$userIP =  $_SERVER['REMOTE_ADDR'];;
$currentTime = date("M d y h:i:s A");

/* open the file and get the contents */
$filehandle = fopen($theFile, "r");
if ($filehandle)
{
    $data = fread($filehandle, filesize($theFile));
    fclose($filehandle);
}
else
    die('Failed to read file');


/* open the file and write line to the top of the file */    
$filehandle = fopen($theFile, "w+");
if ($filehandle) 
{
    fwrite($filehandle,"$userAgent\t $url\t $line\t $message\t $userIP @ $currentTime \n");
    fwrite($filehandle, $data);
    fclose($filehandle);
}
else
    die('Failed to write file');

// send the right headers
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("HTTP/1.1 204 No Content\n\n");
exit();     
?>
