<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery</title>
<link href="styles/style.css" type="text/css" rel="stylesheet"  />
</head>

<body>
<?php
			require('dbClass.php');
			$query="SELECT m.MemberID,p.Category,p.Title,p.Description,p.path,m.FName,m.MName,m.LName,s.SchoolName,m.Grade,m.Email FROM post as p inner join members as m on p.MemberID=m.MemberID inner join schools as s on m.SchoolID=s.SchoolID where Confirm=1;";
			$result=mysql_query($query);
	
			while($Data=mysql_fetch_array($result)){
				
				echo "<div id=".$Data['POSTID']." class=\"posts\">";
				
				echo "<div id=\"imagediv\"><img src=".$Data['path']." /></div>";
				
				echo "<div id=\"datadiv\">";
				echo "<b>".$Data['Title']."</b>";
				echo "<p align=\"justify\">".$Data['Description']."</p>";
				if(is_null($Data['MName'])){		
					echo "<p align=\"justify\">".$Data['FName']." ".$Data['LName']."</p>";
				}else{
					echo "<p align=\"justify\">".$Data['FName']." ".$Data['MName']." ".$Data['LName']."</p>";
				}
				echo "<p align=\"justify\">".$Data['SchoolName']."</p>";
				echo "<p align=\"justify\">".$Data['Grade']."</p>";
				echo "<p align=\"justify\">".$Data['Email']."</p>";
				echo "</div>";
				echo "</div>";
			}

?>

</body>
</html>