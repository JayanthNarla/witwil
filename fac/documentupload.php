<?php
//session_start();

if(isset($_POST['btn']))
{
docupload(); 

}
function docupload(){
	$subject=$_POST['new'];
$_SESSION['sub']=$subject;	
header('location:http://localhost:10080/vinny/facultyDashboard/pages/document.php');
exit();
}

?>