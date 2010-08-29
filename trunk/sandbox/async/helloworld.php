<?php
header("Cache-Control: no-cache");
header("Pragma: no-cache");

$ip = GetHostByName($_SERVER['REMOTE_ADDR']);
echo "Hello user from $ip it is " .  date("h:i:s A") . " at the Ajaxref.com server";
?>
