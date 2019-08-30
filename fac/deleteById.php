<?php 
	$con = mysqli_connect('localhost','root',''); 
	
	mysqli_select_db($con,'timetable'); 
 

$id = $_GET['id']; 

mysqli_query($con,"DELETE FROM presentation fid='".$_SESSION['id']."' and day='".date('l')."';");

header("Location: delete.php"); 
?>


