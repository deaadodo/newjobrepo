<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
	if (!$con){die('Could not connect: ' . mysql_error());}
  	mysql_select_db($db_name , $con);
		mysql_query("set names 'utf8';");
	$sql = "SELECT * FROM graduate" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form name="myform" method="get" action="grrupdate.php">
   <input type="hidden" name="g_id" value="<?php echo "$row[gr_id]"?>" />
  Name:
 <input type="text" name="g_name" value="<?php echo "$row[gr_name]"?>"/>
 spacial:
 <input type="text" name="g_spcial" value="<?php echo "$row[gr_spcial]"?>"/>
city:
<select name="g_city">
<option></option>
<option <?php echo ($row['gr_city']=='luxor')?'selected':'' ?>>luxor</option>
<option <?php echo ($row['gr_city']=='aswan')?'selected':'' ?> >aswan</option>
<option <?php echo ($row['gr_city']=='cairo')?'selected':'' ?>>cairo</option>
</select>

  <input type="submit" value="update" />
  
</form>
  <?php
	;}
	 mysql_close($con);
	?>





</body>
</html>