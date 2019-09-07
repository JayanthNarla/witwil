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
      echo 'Your Password has been sent to your mail';
    } 
    catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
  }
  // else{
  //   echo "Enter correct details. ".$_POST['id']." $emailTo      $f_id   ".$_POST['email']."";
  // }

  
// }
?>

<?php
session_start();
?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="styles.css" />

<style>
	#grad1 {

  background-color: white; /* For browsers that do not support gradients */
  
}
#grad2 {

  background: linear-gradient(to right,#7b4397 0%,#dc2430 100%); /* For browsers that do not support gradients */
  
}
	#grad3 {

  background-color:#dc2430; /* For browsers that do not support gradients */
  
}
/* Style all input fields */
input {
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
}

/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>
</head>
<body>
<form name="frmChange" method="post" action="" autocomplete="off" >
<!-- 
Admin id :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="adminid" span id="currentPassword" required>
<br> -->
Faculty id :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="id" span id="currentPassword" required>
<br>
Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="email" name="email" span id="currentPassword" required>
<br>

<input type="submit" name="submit" value="Submit" >

</form>
<!-- <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("newPassword");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>        -->
				
				
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