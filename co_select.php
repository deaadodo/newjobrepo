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
    <form name="myform" method="post" >
<input type="hidden" name="c_id" value="<?php echo "$row[co_id]"?>" />
 name:<input type="text" name="c_name" value="<?php echo "$row[co_name]"?>" />

 spcial:<input type="text" name="c_spcial" value=" <?php echo "$row[co_spcial]"?>">
   city<select>
<option></option>
<option <?php echo ($row['co_city']=='luxor')?'selected':'' ?>>luxor</option>
<option <?php echo ($row['co_city']=='aswan')?'selected':'' ?> >aswan</option>
<option <?php echo ($row['co_city']=='qena')?'selected':'' ?>>cairo</option>


</select>
  
</form>

  <?php
	;}
	 mysql_close($con);
	
	?>
	 <?php
     echo "<a href='index.php'>index</a> ";
	 
	 
	 ?> 
