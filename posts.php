<?php
	session_start();
	if(!isset($_SESSION['User'])){
		header("Location: Login.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="styles/AdminStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="Loadposts">
<?php	
			require('dbClass.php');
			$query="SELECT * FROM post WHERE Confirm=0";
			$result=mysql_query($query);
	
			while($Data=mysql_fetch_array($result)){
				
				echo "<div id=".$Data['POSTID']." class=\"posts\">";
				
				echo "<div id=\"imagediv\"><img src=".$Data['path']." height=\"150px\" /></div>";
				
				echo "<div id=\"datadiv\">";
				
				echo "<b>".$Data['Title']."</b>";
				echo "<p align=\"justify\">".$Data['Description']."</p>";
				
				echo "<form action=\"postConfirm.php\" method=\"post\">";
    			echo "<input type=\"hidden\" name=\"hdnId\" value=".$Data['POSTID']." />";
    			echo "<input type=\"submit\" name=\"btnConfirm\" value=\"Confirm\" class=\"Button\" />";
				echo "</form>";
				echo "</div>";
				echo "</div>";
			}
		?>
</div>
</body>
</html>