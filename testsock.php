<?php
$fp = fsockopen("127.0.0.1", 80, $errno, $errstr, 30);
if (!$fp) {
    echo "$errstr ($errno)<br />\n";
} else {
    $out = 'GET / HTTP/1.1'."\r\n";
    $out .= 'Host: 127.0.0.1'."\r\n";
    $out .= "\r\n\r\n";
	echo $out;
    fwrite($fp, $out);
    while (!feof($fp)) {
        echo fgets($fp, 128);
    }
    fclose($fp); 
}
?> 