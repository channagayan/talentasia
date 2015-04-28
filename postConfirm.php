<?php
		require('dbClass.php');
			$id=$_POST['hdnId'];
			$query="UPDATE post SET Confirm=1 WHERE POSTID='$id'";
			mysql_query($query);
			
			if(mysql_affected_rows()){
				header("Location: Admin.php");
			}
?>