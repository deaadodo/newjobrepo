<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>gr_insert</title>
</head>

<body>
<?php 
$HostName="localhost";
$db_name="jobdb";
$LoginName="root";
$LoginPassword="";


$con = mysql_connect($HostName,$LoginName,$LoginPassword);
if (!$con){die('Could not connect: ' . mysql_error());}
mysql_select_db($db_name , $con);
if ( isset($_POST['g_name']) && isset($_POST['g_spcial'])&& isset($_POST['g_City']) ) {
$sql = "INSERT INTO graduate (gr_name,gr_spcial,gr_city) VALUES
 ('$_POST[g_name]' ,'$_POST[g_spcial]','$_POST[g_City]')" ;
} else {
$sql = '';
}


mysql_query($sql,$con) ;

mysql_close($con);

?>
<a href="index.php">الرئيسية</a>

</body>
</html>