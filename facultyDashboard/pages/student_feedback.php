<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
<script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script>
</head>

<body id="grad1">

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
                        <li><a href="facdash.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="changepwd.php"><i class="fa fa-gear fa-fw"></i> Change password</a>
                        </li>
                        <li class="divider"></li>
                          <li><a href="http://10.45.8.185/witnwil/login/facultylogin.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                    <h1 class="page-header">Student WIL Reports</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<form method="post">
          Subject <select name="subject1" id="subject1"><option value="">--- Select ---</option>
<?php
$connect1= mysqli_connect("localhost", "root", "","login");						
$list1=mysqli_query($connect1,"select  distinct(subject) from ttinfo where faculty_id ='".$_SESSION['id']."'  ;");
while($row_list1 = mysqli_fetch_assoc($list1)){

?>
<option>    <?php echo $row_list1['subject']; ?>  </option>
<?php

}?>
</select>
<input type="submit" name="sub" class="btn btn-primary" value="Display" />
<form>
<br>
<br>
<?php
                
		  if(isset($_POST['sub']))
               { 
		   ?>
<table class="table table-bordered">
  <thead>
   <tr>
    <th><font face="comic sans ms">Rollno</font></th>
    <th><font face="comic sans ms">Subject	</font></th>
	<th><font face="comic sans ms"> Unit </font></th>
	<th><font face="comic sans ms"> Files </font></th>
  </tr>
   </thead>
    <tbody>
                        <?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"login");
//	$q="select count(*) \"total\"  from studentdoc where faculty='".$_SESSION['user']."' ";
	//$ros=mysqli_query($link,$q);
	//$row=(mysqli_fetch_array($ros));
//	$total=$row['total'];
	//$dis=3;
	//$total_page=ceil($total/$dis);
	//$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	//$k=($page_cur-1)*$dis;
	$q="SELECT * FROM studentdoc where faculty='".$_SESSION['user']."' and subject='".$_POST['subject1']."'";
	$ros=mysqli_query($link,$q);
	
	while($data=mysqli_fetch_array($ros)):
	?>	
		<tr>
				  
                  <td><?php echo $data['rollno'] ?></td>
                  <td><?php echo $data['subject']?></td>
				    <td><?php echo $data['unit']?></td>
				  <td> <a href="http://10.45.8.185/witnwil/studentDashboard/pages/upload/<?php echo $data['file']?>" target="new"><?php echo $data['file']?></a></td>
				  
                </tr>
			  <?php

				endwhile;
			  ?>
              </tbody>
		</table>
	
     <?php

			   }
			  ?>

                
                
            </div>
            <!-- /.row -->
           
               
            </div>
            <!-- /.row -->
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
