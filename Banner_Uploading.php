<?php
session_start();
if(!isset($_SESSION['User'])){
	header("Location: Login.php");
}
if(isset($_POST['btnUpload'])){
	
	//Uploding file to server
	if(isset($_FILES['txtFile'])){
 	if (file_exists("BannerImages/" . $_FILES["txtFile"]["name"]))
      {
      	echo $_FILES["txtFile"]["name"] . " already exists. ";
      }
    else
      {
      	move_uploaded_file($_FILES["txtFile"]["tmp_name"],
      	"BannerImages/" . $_FILES["txtFile"]["name"]);
      	$Path ="BannerImages/" . $_FILES["txtFile"]["name"];
		
		require("dbClass.php");
		$query="INSERT INTO bannerimages VALUES ('$Path');";
		$result=mysql_query($query);
		
		if(mysql_affected_rows()>0){
			echo "<script>alert(\"".$_FILES["txtFile"]["name"]." Successfuly Uploaded\");</script>";
		}
      }
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="styles/AdminStyle.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <form action="" method="post" enctype="multipart/form-data">
    <table >
      <tr>
        <td width="150px"> Title</td>
        <td width="150px"><input type="text" name="txtTitle" class="TextBox" /></td>
      </tr>
      <tr>
        <td width="150px">Owner</td>
        <td width="150px"><input type="text" name="txtOwner" class="TextBox" /></td>
      </tr>
      <tr>
        <td width="150px">Contact No</td>
        <td width="150px"><input type="text" name="txtContact" class="TextBox" /></td>
      </tr>
      <tr>
        <td width="150px"></td>
        <td width="150px"><input type="file" name="txtFile" class="TextBox" /></td>
      </tr>
      <tr>
        <td width="150px"></td>
        <td width="150px"><input type="submit" name="btnUpload" value="UPLOAD" class="Button" id="Upload" /></td>
      </tr>
    </table>
  </form>
</body>
</html>
