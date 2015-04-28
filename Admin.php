<?php
session_start();
if(!isset($_SESSION['User'])){
	header("Location: Login.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
<link href="styles/AdminStyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$('#Panals').load('posts.php');
			
		   $("#banner").click(function(){
		   	$('#Panals').load('Banner_Uploading.php');
		    //$('#Panals').css("background-color","#CCC");
		   }); 
		   
		   $("#Confirmation").click(function(){
		   	$('#Panals').load('posts.php');
		    //$('#Panals').css("background-color","#CCC");
				/*var isready=Boolean(true);
				$.ajax({ 
					type :'post',
					url: 'postConfirm.php',
					data: {ready:isready},
					success: function(data){ 
						//$('#Loadposts').remove('#'+id );
						$('#Panals').html(data).fadeIn('slow');
						//$('#test').css({'height':'50px','width':'500px','background-color':'#666'});
					}
				});*/
		   });

		 });
	</script>
</head>

<body>
<div class="Buttonpanal" id="Buttonpanal">
	<a id="Genaral" class="links">Genaral</a><br />
	<a id="banner" class="links">Banner Images Upload</a><br />
	<a id="Confirmation" class="links">Confirmation</a><br />
    <a id="video" class="links">Video Upload</a><br />
    <a id="News" class="links">News</a></div>
<div id="Panals">
</div>
</body>
</html>
