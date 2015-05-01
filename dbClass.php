<?php
	$con=mysql_connect("Localhost","root","") or die("DB Connection Error ".mysql_error());
	$db=mysql_select_db("talentas_talantasia",$con) or die("DB Error ".mysql_errno());
?>
