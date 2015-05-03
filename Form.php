<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title id="Description"></title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap-theme.min.css">
   
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){	
	$('#profilePicture').change(function() {
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
    <div id="createAccount" style="font-family: Verdana; font-size: 13px; color:#FFF">
      <div> Create a new account </div>
      <div style="font-family: Verdana; font-size: 13px; color:#FFF;">
        <form id="form" action="RegisterScript.php" method="post" enctype="multipart/form-data">

    
          <table class="table" cellpadding="5px">

<tbody style="outline: thin solid black;">
		<tr>
    	 	<td>Profile Picture</td>
     	 	<td><input type="file" id="profilePicture" class="Textbox" name="txtPic" /></td>
      		<td rowspan="5" id="viewImage"></td>
    		</tr>
            <tr>
              <td colspan="3">First Name </td>
              <td><input type="text" id="firstName" class="Textbox"  Name="txtFName" /></td>
            </tr>
            <tr>
              <td colspan="3">Last Name </td>
              <td><input  type="text" id="lastName" class="Textbox" Name="txtLName" /></td>
            </tr>
  	<tr>
              <td colspan="3">Date of Birth </td>
              <td colspan="3"><input type="date" id="DOB" class="Textbox" Name="dtDOB" /></td>
            </tr>

 	<tr>
              <td colspan="3">Current Working Institute </td>
              <td colspan="3"><input type="text" id="Institute" class="Textbox" Name="txtInstitute" /></td>
            </tr>
 	<tr>
              <td colspan="3">Gender </td>
              <td colspan="3">
<select name="rbGender" id=Gender">
  <option value="M">Male</option>
  <option value="F">Female</option>
  <option value="N">Not specify</option>

</select></td>
            </tr>
            <tr>
              <td colspan="3">Phone </td>
              <td colspan="3"><input type="tel" name="txtContact" class="Textbox" id="Contact"/></td>
            </tr>
            <tr>
              <td colspan="3">E-mail </td>
              <td colspan="3"><input type="email" name="txtMail" class="Textbox" id="Mail"/></td>
            </tr>
           
           

</tbody>

<tbody style="outline: thin solid black;">
            <tr>
              <td colspan="3">Choose your username </td>
              <td colspan="3"><input  type="text" id="userName" class="Textbox" Name="txtUName"/></td>
            </tr>
            <tr>
              <td colspan="3">Create a password </td>
              <td colspan="3"><input type="password" id="password" class="Textbox" Name="txtPW"/></td>
            </tr>
            <tr>
              <td colspan="3">Confirm your password </td>
              <td colspan="3"><input type="password" id="passwordConfirm" class="Textbox" Name="txtPWConfirm" /></td>
            </tr>
          
           
</tbody>
</fieldset>
<tr>
</tr>
<tbody style="outline: thin solid black;">
	<tr>
              <td colspan="3">Interests </td>
              <td colspan="3"><input type="text" name="interests" class="Textbox" id="interests" data-role="tagsinput"></td>
            </tr>
	<tr>
              <td colspan="3">Education Qulification </td>
              <td colspan="3"><input type="text" name="education" class="Textbox" id="education"/></td>
            </tr>
	<tr>
              <td colspan="3">Professional Qulification </td>
              <td colspan="3"><input type="text" name="professional" class="Textbox" id="professional"/></td>
            </tr>
	<tr>
              <td colspan="3">Experience </td>
              <td colspan="3"><input type="text" name="experience" class="Textbox" id="experience"/></td>
            </tr>
</tbody>
            <tr>
              <td colspan="3"><input type="submit" value="Create account" id="submit"  Name="btnSubmit" /></td>
            </tr>

          </table>

        </form>

      </div>
    </div>
</body>
</html>
