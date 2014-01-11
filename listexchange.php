<?php
header("Cache-Control: no-cache");
header("Pragma: no-cache");
header("Content-Type: text/html");

$url = "http://58.27.84.166/mcconline/migrate/main_index.php";
$result = file_get_contents($url);

/* Check response status */
list($version,$status,$msg) = explode(' ',$http_response_header[0], 3);
if ($status != 200)
echo "Your call to the web service returned an error status of $status.";
else
echo $result;



?>