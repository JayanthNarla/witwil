<?php 
	session_start();

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "login");

	// variable declaration
	$id = "";
	$errors   = array();
	$suc="";
	
	if (isset($_POST['remove_btn'])) {
		removeuser();
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
	function removeuser(){
		global $db, $errors,$id,$suc;
		$id = e($_POST['id']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($id)) { 
			array_push($errors, "ID is required"); 
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "delete from facultyDB where facultyId='".$id."';";
			mysqli_query($db, $query);
			$query = "delete from adminDB where adminId='".$id."';";
			mysqli_query($db, $query);
			$suc="user succesfully removed";			
			echo $suc .'<br>';
			header('location: removeuser.php');

		}

	}

?>