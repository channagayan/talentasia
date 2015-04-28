<?php
	session_start();
	
	if(isset($_SESSION['Uname'])){
		unset($_SESSION['Uname']);
		header("Location: index.php");
	}
	if(isset($_SESSION['User'])){
		unset($_SESSION['User']);
		header("Location: login.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TALENT ASIA</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.Textbox{
	background-color:#DDD;
	border:thin solid;
	border-color:#FFF;
	width:150px;
	color:#333;
}
</style>
</head>
<body>
<form action="LoginScript.php" method="post" name="login">
  <table border="0" align="center" width="350px">
    <tr>
      <td style="text-align:center; color:#666; font-family:Arial, Helvetica, sans-serif" width="150px">Username </td>
      <td width="200px"><input type="text" name="un" class="Textbox"></td>
    </tr>
    <tr>
      <td style="text-align:center; color:#666" width="150px">Password </td>
      <td width="200px"><input type="password" name="pwd" class="Textbox"></td>
    </tr>
    <tr>
      <td width="150px"></td>
      <td width="200px"><input type="submit"  name="btnSub" value="Login" id="submit">&nbsp;&nbsp;&nbsp;&nbsp;<label style="text-align:right; color:#666; font-size:12px; font-weight:bold;" >Register<a id="Register">here</a></label></td>
    </tr>
    <tr>
      <td colspan="2"><label style="text-align:left; color:#F00"></label></td>
    </tr>
  </table>
</form>
</body>
</html>