<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>grrdelete</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="jobdb";
$LoginName="root";
$LoginPassword="";   
?>
<?php

	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$person_id= $_GET['g_id'] ;
	if ( isset($_GET['g_id'])) {
	$sql = "DELETE FROM graduate WHERE gr_id ='$person_id'" ;}
	
	mysql_query($sql,$con) ;
	
  mysql_close($con);
  
?>

<a href="index.php">الرئيسية</a>












</body>
</html>