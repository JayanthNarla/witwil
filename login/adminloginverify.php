<?php 
	session_start();
	
	$errors   = array(); 
	
	$db = mysqli_connect('localhost', 'root', '', 'login');
	
	if (isset($_POST['login_btn'])) {
		login();
	}
	
	
	
	function login(){
		global $db, $username,$errors;

		// grap form values
		$username = strtoupper($_POST['username']);
		$password = $_POST['password'];

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = $password;

			$query = "SELECT * FROM admindb WHERE adminid='".$username."' AND password='".$password."' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				/*if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: admin/home.php');		  
				}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: index.php');
				}*/
				$_SESSION['user'] = $logged_in_user['adminName'];
				$_SESSION['id']=$username;
				$_SESSION['success']  = "You are now logged in";
				header('location:../adminDashboard/pages/dashboard.php');
				
			}else {
				//array_push($errors, "Wrong username/password combination");
														echo '<script language="javascript">alert("wrong credentials")</script>';

			}
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
	/*session_start();
	$db = mysqli_connect('localhost', 'root', '', 'login');
		  
    $myusername = e($_POST['username']);
    $mypassword = e($_POST['password']); 
      
    $sql = "SELECT * FROM adminDB WHERE adminId = '".$myusername."' and password = '".$mypassword."'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];
      
    $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
    if($count == 1) {
        session_register("myusername");
        $_SESSION['login_user'] = $myusername;
         
        header("location: admin/home.php");
    }else{
        $error = "Your Login Name or Password is invalid";
    }*/
   	
?>