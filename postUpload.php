<?php
	session_start();
	$Category=$_POST['Catagory'];
	$Title=$_POST['txtTitle'];
	$Description=$_POST['txtDescription'];
	
	//Uploding file to server
	if(isset($_FILES['txtUpload'])){
 	if (file_exists("Post/" .$_SESSION['id']."-".$_FILES["txtUpload"]["name"]))
      {
      	echo $_FILES["txtUpload"]["name"] . " already exists. ";
      }
    else
      {
		$Path ="Post/" .$_SESSION['id']."-".$_FILES["txtUpload"]["name"];
      	move_uploaded_file($_FILES["txtUpload"]["tmp_name"],
      	$Path);
      	
		
		require("dbClass.php");
		$query="INSERT INTO post (MemberID,Category,Title,Description,Path,confirm) VALUES ('".$_SESSION['id']."','$Category','$Title','$Description','$Path',0);";
		$result=mysql_query($query);
		
		if(mysql_affected_rows()>0){
			/*echo "<script>alert(".$_FILES['txtUpload']['name']."\" Successfuly Uploaded\");</script>";*/
			header("Location: index.php");
		}
      }
	}
?>