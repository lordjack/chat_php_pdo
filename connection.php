<?php
$con=mysql_connect("localhost","root","");
if (!$con) 
	{
		die ("Could not connect" . mysql_error());
	}
$data=mysql_select_db("CTS_DSWD_FO2",$con);
if (!$data) 
	{
		die ("Could not connect" . mysql_error());
	}
?>