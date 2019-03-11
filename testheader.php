<a href="testheader.php" target="_blank">cc</a>
<?php
if(array_key_exists("If-Modified-Since",getallheaders()))
 echo "ok";
else 
 echo "false";
?>