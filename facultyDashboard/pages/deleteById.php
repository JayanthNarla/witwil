<?php 
	$con = mysqli_connect('localhost','root',''); 
	
	mysqli_select_db($con,'login'); 
 

$id = $_GET['id']; 

mysqli_query($con,"DELETE FROM presentation where id = '$id'"); 

header("Location: displaydoc.php"); 
?>


