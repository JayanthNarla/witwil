<?php 

	
	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	
$db = mysqli_connect('localhost', 'root', '', 'login');
//if button is clicked
	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$address = $_POST['address'];

		mysqli_query($db, "INSERT INTO info (name, address) VALUES ('$name', '$address')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: form.php');
	}
	if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: form.php');
}
	//retrieve records
	$results = mysqli_query($db, "SELECT * from info");
	
	
	
	
	
	?>