<?php

//THIS RETURNS THE IMAGE
header('Content-Type: image/gif');
readfile('tracking.gif');


//THIS IS THE SCRIPT FOR THE ACTUAL TRACKING
$date = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
$txt = $date.",". $_SERVER['REMOTE_ADDR'];
$myfile = file_put_contents('log.txt', $txt.PHP_EOL , FILE_APPEND);
exit;

?>

