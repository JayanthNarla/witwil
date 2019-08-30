<?php
//session_start();

if(isset($_POST['btn']))
{
docupload(); 

}
function docupload(){
	$subject=$_POST['new'];
$_SESSION['sub']=$subject;	
 $connect = mysqli_connect("localhost", "root", "", "login");
 $sql="SELECT * FROM presentation WHERE fid = '".$_SESSION['id']."' and subject='".$_SESSION['sub']."';" ;
 $sql1="SELECT * FROM disable WHERE fid ='".$_SESSION['id']."' and subject='".$_SESSION['sub']."';" ;
$sql2="SELECT * FROM swap WHERE facultyid ='".$_SESSION['id']."' and subject='".$_SESSION['sub']."';" ;
$result = mysqli_query($connect,$sql);
$result1 = mysqli_query($connect,$sql1);
$result2 = mysqli_query($connect,$sql2);

 $row = mysqli_num_rows($result);
  $row1 = mysqli_num_rows($result1);
   $row2 = mysqli_num_rows($result2);
 
 
if($row>0) 
{
 echo "<script>alert('Already uploaded');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 

}



else if($row1>0)
{
echo "<script>alert('Class is disabled');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 

}

else if($row2>0) 
{
   echo "<script>alert('Class is swapped');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 

}
	 

	 
    else{
header('location:http://10.45.8.185/witnwil/facultyDashboard/pages/document.php');
exit();
}
}

?>








