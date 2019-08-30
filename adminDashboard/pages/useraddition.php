<?php 
 
	session_start();
	

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "login");

	// variable declaration
	$username = "";
	$empid    = "";
	$email="";
	$errors   = array();
	$suc="";
	
	if (isset($_POST['register_btn'])) {
		adduser();
	}
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../../homepage.php");
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
	function adduser(){
		global $db, $errors,$suc;
		$username= e($_POST['username']);
		$empid       =  e($_POST['empid']);
		$email=e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "username is required"); 
		}
		if (empty($empid)) { 
			array_push($errors, "Empid is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO facultyDB (facultyName, facultyId, email, password) 
						  VALUES('".$username."', '".$empid."','".$email."', '".$password."')";
			mysqli_query($db, $query);
			$suc="user succesfully created";
			echo $suc .'<br>';
			header('location: createuser.php');

		}

	}
	
	
	

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	
	
	
	
	
	

?>