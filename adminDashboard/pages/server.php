<?php 
	session_start();
	if(!isset($_SESSION['user'])){
			header("Location: ../../homepage.php");
	}	
	$db = mysqli_connect('localhost', 'root', '', 'login');

	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$date = $_POST['date']; 

		mysqli_query($db, "INSERT INTO holidays(reason, date) VALUES ('$name', '$date')"); 
		 echo "<script>alert('Data Added');window.location.href='http://10.45.8.185/witnwil/adminDashboard/pages/holiday.php';  </script>"; 
	}

if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$date = $_POST['date'];

	mysqli_query($db, "UPDATE holidays SET reason='$name', date='$date' WHERE id=$id");
	 echo "<script>alert('Data Updated');window.location.href='http://10.45.8.185/witnwil/adminDashboard/pages/holiday.php';  </script>"; 
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM holidays WHERE id=$id");
	echo "<script>alert('Data Deleted');window.location.href='http://10.45.8.185/witnwil/adminDashboard/pages/holiday.php';  </script>"; 
}
