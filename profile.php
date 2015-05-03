<?php
session_start();
if(!isset($_SESSION['Uname'])){
	header("Location: Login.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Profile</title>

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.2.0/css/bootstrap-theme.min.css">
   
<script src="//cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
    $(function() {
        $("#accordion").accordion({
            collapsible: true,
            active: false
        });
    });
</script>
<script type="text/javascript">
var dialog;
$(function() {
    var form;
    function addTalent() {
        return;
    }
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 300,
      width: 350,
      modal: true,
      buttons: {
        "Add Talent": addTalent,
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
      }
    });
 
    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addTalent();
    });
  });
</script>
<script type="text/javascript">
function myFunction() {
	 dialog.dialog( "open" );
}
</script>
<style>
#basicdetail {
    
    height:20%;
    width:100%;
    padding:5px;
}
#events {
    
    background-color:green;
    height:70%;
    width:30%;
    float:right;
    padding:5px;	      
}
#arts {
    background-color:yellow;
    width:70%;
    height:70%;
    float:right;
    padding:10px;	 	 
}
#accordion {
    width:70%;
    height:70%;	 	 
}
#Footer {
	position:absolute;
	float:none;
	width: 100%;
	height: 10%;
	background-color:#000000;
}

</style>
	
</head>

<body>
        
<div id="basicdetail" title="Basic Detail">
<?php
	  if(isset($_COOKIE['MSGUN'])){
		  echo "<a id=\"Login\">User name is incorrect and retry</a>|";
	  }
	  if(isset($_COOKIE['MSGPW'])){
		  echo "<a id=\"Login\">Password is incorrect and retry</a>|";
	  }
	   if(isset($_SESSION['Uname'])){
			require("dbClass.php");
			$query="SELECT * FROM members WHERE MemberID='".$_SESSION['id']."';";
			$result=mysql_query($query);

			$Data=mysql_fetch_array($result);

			$queryscl="SELECT * FROM schools WHERE SchoolID='".$Data['SchoolID']."';";
			$resultscl=mysql_query($queryscl);
			$schl=mysql_fetch_array($resultscl);
			
				if(is_null($Data['MName'])){
					echo "<a>".$Data['FName']." ".$Data['LName']."</a>|";
				}else{
					echo "<a>".$Data['FName']." ".$Data['MName']." ".$Data['LName']."</a>|";
				}
			echo "<a href=\"Login.php\">LOGOUT</a>|";
	  }else{
		 echo "<a id=\"Login\">LOGIN</a>|";
	  }
		echo "</br>";
		echo "<p>" .$schl['SchoolName']. "-".$schl['City'] ."</p>";
 echo "<input type=\"text\" name=\"interests\" value=\"" .$Data['interests'] ."\" data-role=\"tagsinput\"  disabled/>"
	  
	  ?>

<a id="detailedit" href="FormEdit.php"> Edit Detail </a>

</div>
<div id="events" title="Upcoming Events">
<p>add new events and show current events</p>
</div>

<div id="dialog-form" title="Add new talent">
  <form>
    <fieldset>
      <label for="Desc">Name</label>
      <input type="text" name="name" id="name" value="Jane Smith" class="text ui-widget-content ui-corner-all">
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
    </fieldset>
  </form>
</div>

<div id=arts" title="Arts">
<h1> Talents
    <small>
        <span class="btn-group">
            <button class="btn btn-mini" onclick="myFunction()">Add</button>
        </span>
    </small>
</h1>
<div id="accordion">
<?php 
$query="SELECT * FROM talents WHERE MemberID='1';";
$result=mysql_query($query);

while($row = mysql_fetch_array($result)){
	echo "<h3> " . $row['Desc'] . "</h3>";
	echo "<div>";
	echo $row['ArtLink'];
	echo "<p/>";
	echo $row['VideoLink'];
	echo "</div>";
}
?>
</div>
</div>
      <div class="Footer" id="Footer">
        <div id="footernavi" class="footernavi" style="color:#CCC;"><a href="index.php">HOME</a> | <a id="Events">EVENTS</a>|<a id="AboutUs">ABOUT US</a> | <a id="Upload">DEVELOP</a> | <a href="index.html" id="NewsNavi">NEWS</a> </div>
        <div class="ContactUs" id="ContactUs" align="center"> <a href="http://www.theartnewspaper.com"><img src="img/mast.gif" width="200"/></a><br />

        </div>
        <div id="copyright" class="copyright">
          <p align="center" style="color:#999; font-family:Arial, Helvetica, sans-serif; font-size:11px;">Copyright © TalentAsia, 2015. All Rights Reserved</p>
        </div>
      </div>
    </div>


</body>
</html>
