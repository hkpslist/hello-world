<?php
   $data = implode($_POST,"\n");
   file_put_contents("./post.txt",$data);
   echo "write ".$data;
?>