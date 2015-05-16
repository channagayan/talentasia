<?php

	if(isset($_POST['btnSubmit'])){
		
		$Fname=$_POST['txtFName'];
		$Lnmae=$_POST['txtLName'];
		
	
		
		$Uname=$_POST['txtUName'];
		$PW=$_POST['txtPW'];
		$PWConferm=$_POST['txtPWConfirm'];
		
		$DOB=$_POST['dtDOB'];
		$Gender=$_POST['rbGender'];
		$institute=$_POST['txtInstitute'];

		$Contct=$_POST['txtContact'];
		$Email=$_POST['txtMail'];
		$interests =$_POST['interests'];
		$education =$_POST['education'];
		$professional =$_POST['professional'];
		$experience =$_POST['experience'];

  //  if (isset($_FILES['txtPic']) && $_FILES['txtPic']['size'] > 0) { 
        // Temporary file name stored on the server
        $tmpName  = $_FILES['txtPic']['tmp_name'];  
        // Read the file 
        $fp      = fopen($tmpName, 'r');
        $image = fread($fp, filesize($tmpName));
        $image = addslashes($image);
        fclose($fp);


		if($PW==$PWConferm){
			require("dbClass.php");
			$query="SELECT MAX( MemberID ) as MaxMembrID FROM members";
			$result=mysql_query($query) or die("Query Error".mysql_error());
			
			$MaxMemberID=0;
			
			if(mysql_num_rows($result)>0 && $result!=0){
				
				while($data=mysql_fetch_array($result)){
					$MaxMemberID =$data['MaxMembrID']+1;
				}
			}
			
			$query="INSERT INTO members VALUES ('$MaxMemberID','$Fname','$Lnmae','$DOB','$Gender','$institute','$Contct','$Email','$interests','$education','$professional','$experience','$image');";
			$result=mysql_query($query) or die("Query Error".mysql_error());
		
			$query="INSERT INTO users VALUES ('$Uname','$MaxMemberID','$PW','0')";
			$result=mysql_query($query) or die("Query Error".mysql_error());
			
			if(mysql_affected_rows()>0){
				echo "<script type=\"text/jscript\"> alert(\"Sucess\");</script>";
			}
		}
		header("Location: index.php");



	}
?>
