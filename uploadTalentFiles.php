<?php
session_start();
if(!isset($_SESSION['Uname'])){
	header("Location: Login.php");
}
$uname = $_SESSION['Uname'];

$target_dir = "uploads/".$uname."/";
$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
$video_link = $_POST["videoLink"];
$desc = $_POST["desc"];
echo getcwd();
if (!file_exists($target_dir)) {
	mkdir("./".$target_dir, 0777, true);
}
$message = "place :".$target_dir." file ".$target_file . "  desc ". $desc . " vid " . $video_link;
echo $message;
if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], "./".$target_file)) {
	echo "The file ". basename( $_FILES["imageToUpload"]["name"]). " has been uploaded.";
} else {
	$target_file = '';
	echo "Sorry, there was an error uploading your file.";
}
//only parsing for youtube videos others are not supported.
parse_str( parse_url( $video_link, PHP_URL_QUERY ), $my_array_of_vars );
echo $my_array_of_vars['v'];
$query="INSERT INTO `talents`(`MemberID`, `Desc`, `ArtLink`, `VideoLink`) VALUES ('".
		$_SESSION['id']."','".
		$desc."','".
		$target_file."','".
		$my_array_of_vars['v']."');";
require("dbClass.php");
$result=mysql_query($query);
echo $query;
?>