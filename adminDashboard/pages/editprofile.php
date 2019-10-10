<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: ../../homepage.php");
}	

$connect = mysqli_connect("localhost", "root", "", "login");
$output ="";
$query = "SELECT file FROM profimg WHERE faculty_id='".$_SESSION['id']."'";
$result = mysqli_fetch_assoc(mysqli_query($connect, $query));
$num=mysqli_num_rows(mysqli_query($connect, $query));
echo "<script>console.log(".json_encode($num).")</script>";
$allowed = array("jpg", "png", "gif", "bmp","jpeg");

if(isset($_POST["import"]))
{
	$file =$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path = "uploads/" .$file;
    $file1 = explode (".",$file) ;
    $index = sizeof($file1);
    $ext = $file1[$index-1];
	if(in_array($ext,$allowed))
	{
                        move_uploaded_file($tmp_name,$path);
                        $retfacid="SELECT faculty_id from profimg where faculty_id='".$_SESSION['id']."';";
                        $ret=mysqli_fetch_assoc(mysqli_query($connect,$retfacid));
                        // echo "<script>console.log(".json_encode($ret['faculty_id']).")</script>";
                        if($ret['faculty_id']==$_SESSION['id']){
                            echo "<script>console.log(".json_encode($retfacid).")</script>";
                            $sql = "UPDATE profimg SET faculty_id='".$_SESSION['id']."',file='".$file."';";
                            // echo "<script>alert('File Uploded ');window.location.href='./userprofile.php';  </script>"; 
                            if (mysqli_query($connect,$sql))
						{
							// $filesize = filesize($file);
 
                            // $query = "SELECT file FROM profimg WHERE faculty_id='".$_SESSION['id']."'";
                            // $result = mysqli_fetch_assoc(mysqli_query($connect, $query));

                            // echo "<script>console.log(".json_encode($result['file']).")</script>";
                            // $actual_image_name = $result['file'];

					    echo "<script>alert('File Uploded ');window.location.href='./userprofile.php';  </script>"; 
						}
						
						
						else{
                            echo('Error : ' . mysqli_error($connect));
                        }
                            

                        } else{
                            
						$sql = "INSERT INTO profimg(file,faculty_id) VALUES ('".$file."','".$_SESSION['id']."');";
						if (mysqli_query($connect,$sql))
						{
							// $filesize = filesize($file);

                            // $query = "SELECT file FROM profimg WHERE faculty_id='".$_SESSION['id']."'";
                            // $result = mysqli_fetch_assoc(mysqli_query($connect, $query));

                            // echo "<script>console.log(".json_encode($result['file']).")</script>";
                            // $actual_image_name = $result['file'];

					echo "<script>alert('File Uploded ');window.location.href='./userprofile.php';  </script>"; 
						}
						
						
						else
                            echo('Error : ' . mysqli_error($connect));
                    }
	}
	else{
		/*echo '<script language="javascript">alert("File Format not supported.Only Pdfs will be accepted")</script>';*/
		echo '<h1 style="color:red;">File Format not supported.</h1>';
		
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="../style.css">

    <title>WIT & WIL</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
#profDets{
    margin-top: 1 rem;
    display: flex;
    justify-content: space-evenly;
}

    ._profile {
	height: 10em; /* height == width */
	width: 10em;
  background:#DCDCDC;
	border: 2px solid black;
	border-radius: 50%;
	overflow: hidden;
}
/* profile head */
._head {
	background:royalblue;
	border-radius: 100%;
	width: 45%;
	height: 45%;
	margin: 15% auto 5%;
}
/* profile body */
._body {
	background:royalblue;
	width: 65%;
	height: 40%;
	margin: auto;
	border-top-left-radius: 50%;
	border-top-right-radius: 50%;
}
	#grad1 {

  background-color: white; /* For browsers that do not support gradients */
  
}
#grad2 {

  background: linear-gradient(to right,#7b4397 0%,#dc2430 100%); /* For browsers that do not support gradients */
  
}
	#grad3 {

  background-color:#dc2430; /* For browsers that do not support gradients */
  
}

#updatebutton{
    margin-top: 50px;
}
</style>
<!-- <script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script> -->
</head>

<body id="grad1">

   <div id="wrapper" ">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id="grad2">
            
              
             <a class="navbar-brand" > <strong><font color="white">VNR VJIET- WIT & WIL &nbsp; &nbsp; &nbsp;</strong></font></a>
          
            <!-- /.navbar-header -->
            <a class="navbar-brand" > &nbsp;&nbsp;<font size="" color="white">Welcome <?php // echo $_SESSION['user']; ?> <?php //echo $_SESSION['id']; ?> Admin  </font>
           </a> <ul class="nav navbar-top-links navbar-right" id="grad2">

                <!-- /.dropdown -->
                <li class="dropdown" id="grad3">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                                <ul class="dropdown-menu dropdown-user">
                        <li><a href="userprofile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="changepwd.php"><i class="fa fa-gear fa-fw"></i> Change password</a>
                        </li>
                        <li class="divider"></li>
                         <li><a href="../../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user --> 
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation" id="grad1">
                <div class="sidebar-nav navbar-collapse" id="grad1">
                    <ul class="nav" id="side-menu" id="grad1">
                        
                         
                        <li>
                            <a href="dashboard.php"><i class="fa fa-edit fa-fw"></i> <font color="black">Dashboard</a></font>
                        </li>
						 <li>
                            <a href="createuser.php"><i class="fa fa-edit fa-fw"></i> <font color="black">Add User</a></font>
                        </li>
                        <li>
                            <a href="removeuser.php"><i class="fa fa-edit fa-fw"></i><font color="black"> Remove User</a></font>
                        </li>
						<li>
                            <a href="addtable.php"><i class="fa fa-edit fa-fw"></i><font color="black"> Update TimeTable</a></font>
                        </li>
						<li>
                            <a href="removetable.php"><i class="fa fa-edit fa-fw"></i><font color="black"> Remove TimeTable</a></font>
                        </li>
						<li>
                            <a href="holiday.php"><i class="fa fa-edit fa-fw"></i> <font color="black"> Edit Holidays</a></font>
                        </li>
						<li>
                            <a href="changepassword.php"><i class="fa fa-edit fa-fw"></i> <font color="black"> Change password</a></font>
                        </li>
                        <li>
                            <a href="editprofile.php"><i class="fa fa-edit fa-fw"></i> <font color="black">Edit Profile</a></font>
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

<div>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Hello Admin</h1>
                </div>
                <!-- </div> -->
  </div>
  <div>
  <div class="container" id="upload">
				
				<form method="post" enctype="multipart/form-data">
					
					<label>Select Image</label>
						
					<input type="file" name="file" id="file" required>
					<br /><p><font size="2" color="red">(File size less than 2mb)</font></p>
					<input type="submit" name="import" class="btn btn-info" value="Upload" />
					
				</form>
                </div>
</div>
<!-- </div> -->
<!-- <div id="profDets">

    <div id="about-img">
        <img class="profile-photo" align="middle" height="250px" width="200px" src="./uploads/<?php echo $actual_image_name; ?>" />
    </div>
    <table>
                        <caption><h3><u>User Details<u></h3></caption>
                    <tr>
                    
                    <td><h4><b>Name</b></h4></td>
                    <td><h4>:</h4></td>
                    <td><h4><?php echo $_SESSION['user']; ?></h4></td>
                    </tr>
                    <tr>
                <td><h4> <b>Id</b></h4></td>
                <td><h4>:</h4></td>
                <td><h4><?php echo $_SESSION['id']; ?></h4></td>
                </tr>
    </table>

    

</div> -->
<!-- <center>
<div id="updatebutton"><form>
<input type="submit" name="update" value="update" class="btn btn-info"></form>
</div>
</center> -->

                <!-- /.col-lg-12 -->
            </div>
	
	
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<!-- <script>

    <?php 
        if($num!=0) {
    ?>
        document.getElementById("upload").style.display="none";
        document.getElementById("profDets").style.display="flex";
        document.getElementById("updatebutton").style.display="block";
    <?php } else { ?>
        document.getElementById("upload").style.display="block";
        document.getElementById("profDets").style.display="none";
        
    <?php
    } 
    ?>

</script> -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
