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
    <form name="myform" method="post" >
<input type="hidden" name="g_id" value="<?php echo "$row[gr_id]"?>" />
  graduate name:<input type="text" name="g_name" value="<?php echo "$row[gr_name]"?>" />



  graduate spcial:<input type="text" name="g_spcial" value=" <?php echo "$row[gr_spcial]"?>">
  graduate city:<input type="text" name="g_city" value=" <?php echo "$row[gr_city]"?>">
  
 
</form>


  <?php
	;}
	 mysql_close($con);
	?>
	 <?php
     echo "<a href='index.php'>index</a> ";
	 
	 
	 ?>  