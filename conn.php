<?php
  define('HOST','localhost');
  define('USERNAME','root');
  define('PASSWORD','root');
  define('DBNAME','doctor');
  define('TABLENAME','d_doctor');
  $responsemsg = array('code'=>0,'msg'=>'error','data'=>'');

  $conn =  new mysqli(HOST,USERNAME,PASSWORD);
  $conn->set_charset("utf8");
  $conn->select_db(DBNAME);
  $result = $conn->query("select * from d_doctor");
  while($row = $result->fetch_array(MYSQLI_ASSOC))
  {
	  $responsemsg['data'][] = $row;
  }
  $conn->close();
  echo json_encode($responsemsg);
