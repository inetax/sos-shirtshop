<?php
header("Cache-Control: no-cache");
header("Pragma: no-cache");

$responseType = $_GET["responsetype"];
$badXML = $_GET["badxml"];

header("Content-Type: " . $responseType);
sleep(5);
print "<?xml version='1.0' encoding='UTF-8'?>\n";
print "<packet>\n<headers>Some headers here or there</headers>\n<payload> This isn't much of a change but I just changed the XML response ";
if ($badXML == "false")print "</payload>\n";
print "</packet>\n";

?>
