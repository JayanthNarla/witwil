<?php 
// include('tableremoval.php') ;
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


<?php 
session_start();
	// connect to database
	$db = mysqli_connect("localhost", "root", "", "login");

	// variable declaration
	$subject = "";
	$repfac    = "";
	// $email="";
	// $errors   = array();
	// $suc="";
  
  
?>

<body id="grad1">

   <div id="wrapper">

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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
                              <a href="classtransfer.php"><i class="fa fa-edit fa-fw"></i> <font color="black"> Class Tranfer</a></font>
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


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Class Transfer</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!--<div class="header">
		<h2>Admin - create user</h2>
	</div>-->
  <?php
    if(isset($_POST['replace'])){
      $query = "select faculty_id,subject from ttinfo where subject='".$_POST['subject']."';";
      $r=mysqli_fetch_assoc(mysqli_query($db, $query));
      $ori_facid=$r['faculty_id'];
      $ori_subject=$r['subject'];
      $verifyID = "select facultyId from facultydb where facultyId='".$_POST['facid']."'";
      $verid=mysqli_query($db,$verifyID);
      $num=mysqli_num_rows($verid);
      if($ori_subject && $num==1){
        $update_query="UPDATE ttinfo SET faculty_id='".$_POST['facid']."' where faculty_id='".$ori_facid."'";
        $res=mysqli_query($db,$update_query);
        echo "<script>alert('Class transfered Successfully');</script>";
        } 
        else if($ori_subject==null){
          echo "<script>alert('Enter correct subject');</script>";
        }else{
          echo "<script>alert('No faculty with that ID present! enter correct ID.');</script>";
        }        
      
      echo "<script>console.log(".json_encode($num).")</script>";
    }
  ?>
  <form method="post">
<?php // echo display_error(); ?>

    <div class="input-group">
      <label>Enter Subject: </label>
      <input type="text" name="subject" value="<?php echo $subject; ?>" required>
    </div>
    <div class="input-group">
      <label>Enter replacement faculty ID: </label>
      <input type="text" name="facid" value="<?php echo $repfac; ?>" required>
    </div>
    <!-- <div class="input-group">
      <label>Emp Id</label>
      <input type="text" name="empid" value="<?php echo $empid; ?>">
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div> -->
    <div class="input-group">
      <button type="submit" class="btn" name="replace">Tranfer Class</button>
    </div>
</form>


	
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