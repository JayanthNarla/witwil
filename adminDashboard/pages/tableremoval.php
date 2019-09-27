<?php 
	session_start();
	if(!isset($_SESSION['user'])){
    header("Location: ../../homepage.php");
}

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "login");

	// variable declaration
	//$id = "";
	$errors   = array();
	//$suc="";
	
	if (isset($_POST['remove_btn'])) {
		removetable();
	}
	
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}
	function removetable(){
		global $db, $errors;
		//$id = e($_POST['id']);
		
		// form validation: ensure that the form is correctly filled

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
			$query = "delete from ttinfo;";
			mysqli_query($db, $query);
			  echo "<script>alert('Table Deleted');window.location.href='http://10.45.8.185/witnwil/adminDashboard/pages/removetable.php';  </script>"; 
			//header('location: removetable.php');

		}

	}

?>