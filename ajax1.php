<?php
   header("Content-type:text/html;charset=utf-8");
   //$username = $_POST['username'];
   $username = $_GET['username'];
   $data=array("a","b","c");
   $str="<font>".$username."可以注册</font>";
   for($i=0;$i<sizeof($data);$i++)
   {
	   if($username==$data[$i])
	   {
		   $str = "<font color='red'>{$data[$i]}已经存在</font>";
		   break;
	   }
   }
   echo $str;
?>