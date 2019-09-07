<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require ('../');

require ('../PHPMailer/src/Exception.php');
require ('../PHPMailer/src/PHPMailer.php');
require ('../PHPMailer/src/SMTP.php');

$con=mysqli_connect("localhost","root","","login");
if(mysqli_connect_errno()){
  echo "Failed to connect: ". mysqli_connect_errno();
}

// Instantiation and passing `true` enables exceptions

if(isset($_POST["email"])){
  $send_mail='websitedb1@gmail.com';
  $send_pwd='website@2019';

  $sql = "SELECT * FROM facultydb WHERE facultyId ='".$_POST['id']."' ";
  $res = mysqli_query($con, $sql);
  $r = mysqli_fetch_assoc($res);
  $pwd = $r['password'];
  $emailTo = $r['email'];
  $f_id = $r['facultyId'];

  // if($f_id==$_POST["id"] && $emailTo == $_POST["email"]){
    $mail = new PHPMailer(true);
    try {
      //Server settings
      // $mail->SMTPDebug = 2;                                       // Enable verbose debug output
      $mail->isSMTP();                                            // Set mailer to use SMTP
      $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
      $mail->Username   = $send_mail;                     // SMTP username
      $mail->Password   = $send_pwd;                               // SMTP password
      $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
      $mail->Port       = 587;                                    // TCP port to connect to

      //Recipients
      $mail->setFrom($send_mail, 'WIT-WIL');
      $mail->addAddress($emailTo);     // Add a recipient
      $mail->addReplyTo('no-reply@gmail.com', 'No Reply');

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
      $mail->Subject = 'Your password';
      $mail->Body    = "Your password for WIT-WIL Website is <h1>$pwd</h1>";

      $mail->send();
	  //echo 'Your Password has been sent to your mail';
	  echo '<script type="text/JavaScript">  
      alert("Your Password has been sent to your mail"); 
      </script>'; 
    } 
    catch (Exception $e) {
	  //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	  echo '<script type="text/JavaScript">  
      alert(Message could not be sent. Mailer Error: {$mail->ErrorInfo}); 
      </script>'; 
    }
  }
  // else{
  //   echo "Enter correct details. ".$_POST['id']." $emailTo      $f_id   ".$_POST['email']."";

			//echo '<script type="text/JavaScript">  
			//alert("Enter correct details."); 
			//</script>'; 
  // }

  
// }
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wit and Wil</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	

</head>
<body>

	
	

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/3.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
			<!--	<form class="login100-form validate-form flex-sb flex-w" method="post" action="adminlogin.php">-->
				<form class="login100-form validate-form flex-sb flex-w" name="frmChange" method="post" action="" autocomplete="off" >
					<span class="login100-form-title p-b-53">
						Forgot password
					</span>


				

					
					
					<div class="p-t-31 p-b-9">
						<span class="txt1">
							Faculty Id
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Faculty Id is required">
					<input  class="input100" type="text" name="id" span id="currentPassword" required>
			<!--	<input class="input100" type="text" name="username" >-->
						<span class="focus-input100"></span>
					</div>
					
					<div class="p-t-13 p-b-9">
						<span class="txt1">
							Enter your Email
						</span>

						
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Email is required">
					<input class="input100" type="email" name="email" span id="currentPassword" required>
						<!--<input class="input100" type="password" name="password" >-->
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<input class="login100-form-btn" type="submit" name="submit" value="Submit" >
					</div>
					<br>
					<a href="facultylogin.php" class="txt2 bo1 m-l-5 p-t-31">
							<h5><font color="black"> Go Back</font></h5>
					</a>
					<a href="../homepage.php" class="txt2 bo1 m-l-5 p-t-31">
							<h5><font color="black">Homepage</font></h5>
						</a>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>



</body></html>


<?php


// $conn = mysqli_connect("localhost", "root", "", "login") or die("Connection Error: " . mysqli_error($conn));

// if (count($_POST) > 0) {
//     $result = mysqli_query($conn,  "SELECT * from admindb WHERE adminId='" . $_POST["adminid"]. "'");
//     $row = mysqli_fetch_array($result);
	
	
    
//     if ($_POST["newPassword"] == $_POST["confirmPassword"] && $_POST["email"] == $row["email"]) {
//         mysqli_query($conn, "UPDATE admindb set password='" . $_POST["newPassword"] . "' WHERE adminId='" . $_POST["adminid"]. "'");
        
// 		  echo "<script>alert('password changed');window.location.href='http://10.45.8.185/witnwil/homepage.php';  </script>"; 
		
//     } 
	
// 	else
//           echo '<script language="javascript">alert(" informaion is wrong")</script>';
// }

?>