<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "login");
$output ="";

$allowed = array("pdf");

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
						
						
                  
						$sql = "INSERT INTO presentation(file,fid,subject,date) VALUES ('".$file."','".$_SESSION['id']."','".$_SESSION['sub']."',CURDATE());";
						if (mysqli_query($connect,$sql))
						{
							$filesize = filesize($file);
 
                             
					echo "<script>alert('File Uploded ');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 
						}
						
						
						else
							echo('Error : ' . mysqli_error($connect));
	}
	else{
		/*echo '<script language="javascript">alert("File Format not supported.Only Pdfs will be accepted")</script>';*/
		echo '<h1 style="color:red;">File Format not supported.Only Pdfs will be accepted</h1>';
		
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
	#grad1 {

  background-color: white; /* For browsers that do not support gradients */
  
}
#grad2 {

  background: linear-gradient(to right,#7b4397 0%,#dc2430 100%); /* For browsers that do not support gradients */
  
}
	#grad3 {

  background-color:#dc2430; /* For browsers that do not support gradients */
  
}
</style>
	
</head>

<body id="grad1" >

    <div id="wrapper" ">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id="grad2">
            
              
             <a class="navbar-brand" > <strong><font color="white">VNR VJIET- WIT & WIL &nbsp; &nbsp; &nbsp;</strong></font></a>
          
            <!-- /.navbar-header -->
            <a class="navbar-brand" > &nbsp;&nbsp;<font size="" color="white">Welcome <?php echo $_SESSION['user']; ?> (<?php echo $_SESSION['id']; ?>) </font>
           </a> <ul class="nav navbar-top-links navbar-right" id="grad2">

                <!-- /.dropdown -->
                <li class="dropdown" id="grad3">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="view_schedule.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
            <div class="navbar-default sidebar" role="navigation"  id="grad1">
                <div class="sidebar-nav navbar-collapse"  id="grad1">
                    <ul class="nav" id="side-menu"  id="grad1">
                        <li>
                            <a href="view_schedule.php"><i class="fa fa-edit fa-fw"></i> <font color="black">Upload WIT</a></font>
                        </li>
						<li>
                            <a href="endorsement.php"><i class="fa fa-edit fa-fw"></i> <font color="black">Endorsement</a></font>
                        </li>
                        <li>
                            <a href="student_feedback.php"><i class="fa fa-edit fa-fw"></i> <font color="black">WIL Reports</a></font>
                        </li>
						<li>
                            <a href="adjust_classes.php"><i class="fa fa-edit fa-fw"></i> <font color="black">Adjust Classes</a></font>
                        </li>   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload File</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
			<div class="container box">
				
				<form method="post" enctype="multipart/form-data">
					
					<label>Select File</label>
						
					<input type="file" name="file" id="file" required>
					<br /><p><font size="2" color="red">(File size less than 2mb)</font></p>
					<input type="submit" name="import" class="btn btn-info" value="Upload" />
					
				</form>
				<br />
				<br />
				<?php
				echo $output;
				?>
			</div>
		</div>
        <!-- /#page-wrapper -->

	</div>
    <!-- /#wrapper -->

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