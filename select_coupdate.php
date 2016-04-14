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
	$sql = "SELECT * FROM company" ;
	
	$result = mysql_query($sql,$con) ;
	?>

  <?php
	while($row = mysql_fetch_array($result)){
	?>
    <form name="myform" method="get" action="coupdate.php">
   <input type="hidden" name="c_id" value="<?php echo "$row[co_id]"?>" />
  Name:
 <input type="text" name="c_name" value="<?php echo "$row[co_name]"?>"/>
 spacial:
 <input type="text" name="c_spcial" value="<?php echo "$row[co_spcial]"?>"/>
city:
<select name="c_city">
<option></option>
<option <?php echo ($row['co_city']=='luxor')?'selected':'' ?>>luxor</option>
<option <?php echo ($row['co_city']=='aswan')?'selected':'' ?> >aswan</option>
<option <?php echo ($row['co_city']=='cairo')?'selected':'' ?>>cairo</option>
</select>

  <input type="submit" value="update" /><hr />
</form>
  <?php
	;}
	 mysql_close($con);
	?>















</body>
</html>