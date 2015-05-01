<?php

	if(isset($_POST['btnSubmit'])){
		
		$Fname=$_POST['txtFName'];
		$Mname=$_POST['txtMName'];
		$Lnmae=$_POST['txtLName'];
		
		$Add1=$_POST['txtAdd1'];
		$Add2=$_POST['txtAdd2'];
		$Add3=$_POST['txtAdd3'];
		
		$country=$_POST['Country'];
		$Zip=$_POST['ZipCode'];
		
		$Uname=$_POST['txtUName'];
		$PW=$_POST['txtPW'];
		$PWConferm=$_POST['txtPWConfirm'];
		
		$DOB=$_POST['dtDOB'];
		$Gender=$_POST['rbGender'];
		$Grade=$_POST['txtGrade'];
		
		$School=$_POST['ddSchool'];
		$Contct=$_POST['txtContact'];
		$Email=$_POST['txtMail'];
		$interests =$_POST['interests'];
		$education =$_POST['education'];

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
			
			$query="INSERT INTO members VALUES ('$MaxMemberID','$Fname','$Mname','$Lnmae','$Add1','$Add2','$Add3','$country','$Zip','$DOB','$Grade','$School','$Gender','$Contct','$Email','$interests','$education');";
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
