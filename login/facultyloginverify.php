<?php
	session_start();

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "login");

	// variable declaration
	$errors   = array();
	
	//call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}
	function login(){
		global $db,$errors;

		// grap form values
		$username = strtoupper(e($_POST['username']));
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Id is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = $password;

			$query = "SELECT * FROM facultydb WHERE facultyId='".$username."' AND password='".$password."' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				
				$_SESSION['user'] = $logged_in_user['facultyName'];
				$_SESSION['id']=$username;
				$_SESSION['success']  = "You are now logged in";
				header('location:../facultyDashboard/pages/facdash.php');
				
			}else {
				//array_push($errors, "Wrong username/password combination");
														echo '<script language="javascript">alert("wrong credentials")</script>';

			}
		}
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
	
?>