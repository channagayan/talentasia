<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title id="Description"></title>
	
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap-theme.min.css">
   
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>

<link href="styles/style.css" rel="stylesheet" type="text/css" />

	</head>
	<body>
    <div id="EditAccount" style="font-family: Verdana; font-size: 13px; color:#FFF">
      <div> Edit account Detail </div>

<?php
session_start();
	   if(isset($_SESSION['Uname'])){
			require("dbClass.php");
			$query="SELECT * FROM members WHERE MemberID='".$_SESSION['id']."';";
			$result=mysql_query($query);

			$Data=mysql_fetch_array($result);

$gender = array(
	0 => "",
	1 => "",
	2=> ""

);
$gender[$Data['Gender']]="selected=\"selected\"";

			echo "<a href=\"Login.php\">LOGOUT</a>|";
	  }else{
		 echo "<a id=\"Login\">LOGIN</a>|";
	  }
	  
	  ?>
      <div style="font-family: Verdana; font-size: 13px; color:#FFF;">
        <form id="form" action="RegisterEditScript.php" method="post">
<input type="hidden" id="id" name="txtID" value ="<?php echo $Data['MemberID'] ?>
          <table class="table" cellpadding="5px">
            <tr>
              <td colspan="3">First Name </td>
              <td><input type="text" id="firstName" class="Textbox"  Name="txtFName" value="<?php echo $Data['FName'] ?>" /></td>
            </tr>
            
            <tr>
              <td colspan="3">Last Name </td>
              <td><input  type="text" id="lastName" class="Textbox" Name="txtLName" value="<?php echo $Data['LName'] ?>" /></td>
            </tr>
           
            <tr>
              <td colspan="3">Date of Birth </td>
              <td colspan="3"><input type="date" id="DOB" class="Textbox" Name="dtDOB" value="<?php echo $Data['DOB'] ?>"/></td>
            </tr>

<tr>
              <td colspan="3">Current Working Institute </td>
              <td colspan="3"><input type="text" id="Institute" class="Textbox" Name="txtInstitute" value="<?php echo $Data['institute'] ?>" /></td>
            </tr>
 	<tr>

              <td colspan="3">Gender </td>
              <td colspan="3">
<select name="rbGender" id=Gender">
  <option value="0" "<?php echo $gender[0] ?>">Male </option>
  <option value="1" "<?php echo $gender[1] ?>">Female</option>
  <option value="2" "<?php echo $gender[2] ?>">Not specify</option>

</select></td>
            </tr>
          
            <tr>
              <td colspan="3">Phone </td>
              <td colspan="3"><input type="tel" name="txtContact" class="Textbox" id="Contact" value="<?php echo $Data['Contact'] ?>"/></td>
            </tr>
            <tr>
              <td colspan="3">E-mail </td>
              <td colspan="3"><input type="email" name="txtMail" class="Textbox" id="Mail" value="<?php echo $Data['Email'] ?>"/></td>
            </tr>
	<tr>
              <td colspan="3">Interests </td>
              <td colspan="3"><input type="text" name="interests" class="Textbox" id="interests" data-role="tagsinput" value="<?php echo $Data['interests'] ?>"/></td>
            </tr>
	<tr>
              <td colspan="3">Education Qulification </td>
              <td colspan="3"><input type="text" name="education" class="Textbox" id="education" value="<?php echo $Data['education'] ?>"/></td>
            </tr>

	<tr>
              <td colspan="3">Professional Qulification </td>
              <td colspan="3"><input type="text" name="professional" class="Textbox" id="professional" value="<?php echo $Data['professional'] ?>"/></td>
            </tr>
	<tr>
              <td colspan="3">Experience </td>
              <td colspan="3"><input type="text" name="experience" class="Textbox" id="experience" value="<?php echo $Data['experience'] ?>"/></td>
            </tr>
            <tr>
              <td colspan="3"><input type="submit" value="Edit" id="submit"  Name="btnSubmit" /></td>
		<td colspan="3"><input type="reset" value="Cancel" id="submit"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
</body>
</html>
