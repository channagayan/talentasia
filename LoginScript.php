<?php
	session_start();
	
	$MSGPW=false;
	$MSGUN=false;
	
	if(isset($_POST['btnSub'])){
		$UN=$_POST['un'];
		$PW=$_POST['pwd'];
		
		require("dbClass.php");
		
		$query="SELECT UName FROM users WHERE UName='$UN' AND UserLevel='1';";
		$result=mysql_query($query);
		
		if(mysql_num_rows($result)>0){
			
			$query="SELECT UName,MemberID FROM users WHERE UName='$UN' AND password='$PW';";
			$result=mysql_query($query);
			
			if(mysql_num_rows($result)>0){
				$_SESSION['User']=$UN;
				
				$data=mysql_fetch_array($result);
				$_SESSION['id']=$data['MemberID'];
				
				header("Location: Admin.php");
			}else{
				setcookie("MSGPW","true",time()+2);
				header("Location: Admin.php");
			}
		}else{
			$query="SELECT UName,MemberID FROM users WHERE UName='$UN' AND UserLevel='0';";
			$result=mysql_query($query);
			
			if(mysql_num_rows($result)>0){
				
				$query="SELECT UName,MemberID FROM users WHERE UName='$UN' AND password='$PW';";
				$result=mysql_query($query);
				
				if(mysql_num_rows($result)>0){
					$_SESSION['Uname']=$UN;
					
					$data=mysql_fetch_array($result);
					$_SESSION['id']=$data['MemberID'];
					header("Location: index.php");
				}else{
					setcookie("MSGPW","true",time()+2);
					header("Location: index.php");
				}
			}else{
				setcookie("MSGUN","true",time()+2);
				header("Location: index.php");
			}
		}
	}
?>