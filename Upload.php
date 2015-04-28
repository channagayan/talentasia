<?php
session_start();

if(!isset($_SESSION['Uname'])){
	header("Location: Login.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title id="Description"></title>
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){	
	$('#FileUpload').change(function() {
		var file = $(this).get(0).files[0];
		//var preview = $('#preview');
		$('#viewImage').css({'background-image':'url(img/loading.gif)','background-repeat':'no-repeat'});
		var img = document.createElement('img');
		img.src = window.URL.createObjectURL(file);
		$('#viewImage').html(img);
		var reader = new FileReader();
		reader.onload = function(e) {
			$('#viewImage').css('background-image','none');
			window.URL.revokeObjectURL(this.src);
		}
		reader.readAsDataURL(file);
		$('#viewImage img').css({'height':'150px','margin':'-35px 0 0 0','max-width':'290px'});
	});
});
</script>
</head>
<body>
<form id="form" action="postUpload.php" method="post" enctype="multipart/form-data">
  <table class="table" cellpadding="5px" border="0" cellspacing="0">
    <tr>
      <td>Choose a File</td>
      <td><input type="file" id="FileUpload" class="Textbox" name="txtUpload" /></td>
      <td rowspan="5" id="viewImage"></td>
    </tr>
    <tr>
      <td>Catgory</td>
      <td><select Name="Catagory" class="Textbox" id="Catagory">
          <option value="portrait">portrait</option>
          <option value="PerfomingArt">Performing art</option>
        </select></td>
    </tr>
    <tr>
      <td>Title </td>
      <td><input  type="text" id="Title" class="Textbox" Name="txtTitle" /></td>
    </tr>
    <tr>
      <td>Description </td>
      <td><textarea name="txtDescription" id="Description" class="Textbox"></textarea></td>
    </tr>
    <tr>
      <td><input type="submit" value="Upload" id="submit"  Name="btnUpload" /></td>
    </tr>
  </table>
</form>
</body>
</html>