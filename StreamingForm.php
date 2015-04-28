<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title id="Description"></title>
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
    <div id="createAccount" style="font-family: Verdana; font-size: 13px; color:#000">
      <div align="justify">In order to do your event broadcasts please fill out the following?<br />We will get back to you within 24 hours.<br /><br /></div>
      <div style="font-family: Verdana; font-size: 13px; color:#FFF;">
        <form id="form" action="" method="post">
          <table class="table" cellpadding="5px">
            <tr>
              <td colspan="3">First Name </td>
              <td><input type="text" id="firstName" class="Textbox"  Name="txtFName" /></td>
            </tr>
            <tr>
              <td colspan="3">Last Name</td>
              <td><input  type="text" id="lastName" class="Textbox" Name="txtLName" /></td>
            </tr>
            <tr>
              <td colspan="3">Contact</td>
              <td><input type="tel" id="Contact" class="Textbox"  Name="Contact" /></td>
            </tr>
            <tr>
              <td colspan="3">E-mail</td>
              <td colspan="3"><input type="email" id="email" class="Textbox" Name="email" /></td>
            </tr>
            <tr>
              <td colspan="3">Catgory</td>
              <td><select name="Catgory" class="Textbox"> 
              		<option value="" selected>SELECT</option>
                  	<option value="Musical">Musical</option>
                  	<option value="Drama">Drama</option>
                  	<option value="Social">Social</option>
                  	<option value="Party">Party</option>
                </select></td>
            </tr>
            <tr>
              <td colspan="3">Event Name</td>
              <td><input  type="text" id="Event" class="Textbox" Name="Event" /></td>
            </tr>
            <tr>
              <td colspan="3">Producer Name</td>
              <td><input  type="text" id="Producer" class="Textbox" Name="Producer" /></td>
            </tr>
            <tr>
              <td colspan="3">Sponsor Name</td>
              <td colspan="3"><input  type="text" id="Sponcer" class="Textbox" Name="Sponcer"/></td>
            </tr>
            <tr>
              <td colspan="3">Date</td>
              <td colspan="3"><input type="text" id="Date" class="Textbox" Name="Date"/></td>
            </tr>
            <tr>
              <td colspan="3">Place</td>
              <td colspan="3"><textarea id="Place" class="Textbox" name="Place"></textarea></td>
            </tr>
            <tr>
              <td colspan="3"><input type="submit" value="Submit" id="submit"  Name="btnSubmit" /></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
</body>
</html>