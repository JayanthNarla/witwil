<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "login");
$output ="";
if(isset($_POST["import"]))
{
						$sql = "INSERT INTO disable(fid,reason) VALUES ('".$_SESSION['id']."','".$_POST['sub']."');";
						if (mysqli_query($connect,$sql))
						{
						echo '<script language="javascript">alert("Thank You!! File Uploded")</script>';
						header('location:http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php');
						}
						
						
						else
							echo('Error : ' . mysqli_error($connect));
	
 }
 
 
 
 
?>