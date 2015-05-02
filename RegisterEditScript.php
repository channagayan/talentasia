<?php

	if(isset($_POST['btnSubmit'])){
		
		$ID=$_POST['txtID'];
		$Fname=$_POST['txtFName'];
		$Mname=$_POST['txtMName'];
		$Lnmae=$_POST['txtLName'];
		
		$Add1=$_POST['txtAdd1'];
		$Add2=$_POST['txtAdd2'];
		$Add3=$_POST['txtAdd3'];
		
		$country=$_POST['Country'];
		$Zip=$_POST['ZipCode'];
		
		
		$DOB=$_POST['dtDOB'];
		$Gender=$_POST['rbGender'];
		$Grade=$_POST['txtGrade'];
		
		$School=$_POST['ddSchool'];
		$Contct=$_POST['txtContact'];
		$Email=$_POST['txtMail'];
		$interests =$_POST['interests'];
		$education =$_POST['education'];

			require("dbClass.php");

			
			$query="UPDATE members SET FName='$Fname',MName='$Mname',LName='$Lnmae',Address1='$Add1',
Address2='$Add2',Address3='$Add3',Country='$country',Zip_Code='$Zip',DOB='$DOB',Grade='$Grade',SchoolID='$School'
,Gender='$Gender',Contact='$Contct',Email='$Email',interests='$interests',education='$education' WHERE MemberID='$ID'";
			$result=mysql_query($query) or die("Query Error".mysql_error());
			
			
			
			if(mysql_affected_rows()>0){
				echo "<script type=\"text/jscript\"> alert(\"Sucess\");</script>";
			}

		header("Location: FormEdit.php");
	}
?>
