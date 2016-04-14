<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>coupdate</title>
</head>

<body>
<?php
$HostName="localhost";
$db_name="jobdb";
$LoginName="root";
$LoginPassword="";

	$con = mysql_connect($HostName,$LoginName,$LoginPassword);
	if (!$con)
  	{
  	die('Could not connect: ' . mysql_error());
  	}
  
  	mysql_select_db($db_name , $con);
	
	$sql = "UPDATE company SET  co_name= '$_GET[c_name]',co_spcial='$_GET[c_spcial]',co_city='$_GET[c_city]'  WHERE  co_id= '$_GET[c_id]'" ;
	
	$result = mysql_query($sql,$con) ;
	
  mysql_close($con);
?>
</body>
</html>