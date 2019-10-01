<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: ../../homepage.php");
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

<!-- <script type="text/javascript">
function noBack(){window.history.forward();}
noBack();
window.onload=noBack;
window.onpageshow=function(evt){if(evt.persisted)noBack();}
window.onunload=function(){void(0);}
</script> -->
</head>
<body id="grad1">
<div id="wrapper" >

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" id="grad2">
            
              
             <a class="navbar-brand" > <strong><font color="white">VNR VJIET- WIT & WIL &nbsp; &nbsp; &nbsp;</strong></font></a>
          
            <!-- /.navbar-header -->
            <a class="navbar-brand" > &nbsp;&nbsp;<font size="" color="white">Welcome  </font>
           </a> <ul class="nav navbar-top-links navbar-right" id="grad2">

                <!-- /.dropdown -->
                <li class="dropdown" id="grad3">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                            <a href="index.php"><i class="fa fa-user fa-fw"></i> <font color="black">Dashboard</a></font>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Computer Science & Engineering<span class="fa arrow"></span></a></font>
                        
                            <ul  class="nav nav-second-level">
                                <li>
                                    <a href="cse.php"> <font color="black">Faculty</a></font>
                                </li>
                                <li>
                                    <a href="scse.php"><font color="black">Student</a></font>
                                </li>         
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Civil Engineering<span class="fa arrow"></span></a></font>
                        
                            <ul  class="nav nav-second-level">
                                <li>
                                    <a href="ce.php"> <font color="black">Faculty</a></font>
                                </li>
                                <li>
                                    <a href="sce.php"><font color="black">Student</a></font>
                                </li>         
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Electrical & Electronics Engineering<span class="fa arrow"></span></a></font>
                        
                            <ul  class="nav nav-second-level">
                                <li>
                                    <a href="eee.php"> <font color="black">Faculty</a></font>
                                </li>
                                <li>
                                    <a href="seee.php"><font color="black">Student</a></font>
                                </li>         
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Mechanical Engineering<span class="fa arrow"></span></a></font>
                        
                            <ul  class="nav nav-second-level">
                                <li>
                                    <a href="me.php"> <font color="black">Faculty</a></font>
                                </li>
                                <li>
                                    <a href="sme.php"><font color="black">Student</a></font>
                                </li>         
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Electronics and Communication Engineering<span class="fa arrow"></span></a></font>
                        
                            <ul  class="nav nav-second-level">
                                <li>
                                    <a href="ece.php"> <font color="black">Faculty</a></font>
                                </li>
                                <li>
                                    <a href="sece.php"><font color="black">Student</a></font>
                                </li>         
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Electronics & Instrumentation Engineering<span class="fa arrow"></span></a></font>
                        
                            <ul  class="nav nav-second-level">
                                <li>
                                    <a href="eie.php"> <font color="black">Faculty</a></font>
                                </li>
                                <li>
                                    <a href="seie.php"><font color="black">Student</a></font>
                                </li>         
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Information Technology<span class="fa arrow"></span></a></font>
                        
                            <ul  class="nav nav-second-level">
                                <li>
                                    <a href="it.php"> <font color="black">Faculty</a></font>
                                </li>
                                <li>
                                    <a href="sit.php"><font color="black">Student</a></font>
                                </li>         
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Automobile Engineering<span class="fa arrow"></span></a></font>
                        
                            <ul  class="nav nav-second-level">
                                <li>
                                    <a href="ae.php"> <font color="black">Faculty</a></font>
                                </li>
                                <li>
                                    <a href="sae.php"><font color="black">Student</a></font>
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
		</div>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">ECE Reports</h1>
                </div>
           
            </div>
 
<br>
 
 
<?php

if(isset($_POST['submit']))
{
$sdate = $_POST["sdate"] ;
$edate =  $_POST["edate"] ;

}
?>
          <?php
                
		  if(isset($_POST['submit']))	  
		  {			  
		    include "connection.php" ?>
			Submission Between <?php echo $sdate;?> and  <?php echo $edate;?> <br><br>
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th width="60px"> No</th>
				  <th>Faculty Id</th>
				  <th>Faculty Name</th>
                  <th>Subject</th>
                  <th>File</th>
             
                </tr>
              </thead>
              <tbody>
			
			  <?php
			  
	$con = mysqli_connect('localhost','root',''); 
	
	mysqli_select_db($con,'login'); 

			    $no=1;
				$result = mysqli_query($con,"SELECT * FROM presentation WHERE date BETWEEN '$sdate' AND '$edate' and fid LIKE '%ECE%';");
							
				while($data = mysqli_fetch_object($result) ):
			  ?>
                <tr>
				  <td><?php echo $no;?></td>
                  <td><?php echo $data->fid ?></td>
				  <?php
				  		  
				  $variable=$data->fid; 
				  $result2 = mysqli_query($con,"SELECT * FROM facultydb WHERE facultyId='".$variable."';");
				  $data2= mysqli_fetch_object($result2);
				  
				  
				  ?>
				  <td><?php echo $data2->facultyName ?></td>
                  <td><?php echo $data->subject?></td>
				  <td> <a href="../../facultyDashboard/pages/uploads/<?php echo $data->file?>" target="new"> <?php echo $data->file ?> </a> </td>
				  
                </tr>
			  <?php
				$no++;
				endwhile;
				
			  ?>
              </tbody>
		</table>
		<?php }  ?>
		  
		  
<form method="post">
 <pre>

<label>year : </label>  <select name="year" id="year" required><option value="">--- Select ---</option>
<?php
$connect = mysqli_connect("localhost", "root", "", "login");
$list=mysqli_query($connect,"select distinct(year) from ttinfo where dept ='ECE';");

while($row_list = mysqli_fetch_assoc($list)){

?>

<option><?php echo $row_list['year']; ?>  </option>


<?php } ?>
 </select>   <label> Section : </label>  <select name="sec" id="sec" required><option value="">--- Select ---</option>
<?php

$list1=mysqli_query($connect,"select distinct(sec) from ttinfo where dept ='ECE' ;");

while($row_list1 = mysqli_fetch_assoc($list1)){

?>

<option><?php echo $row_list1['sec']; ?>  </option>


<?php } ?>
 </select>     <input type="submit" name="yearb" class="btn btn-primary" value="select" />  
</pre>
</form>
<br>
<?php
if (isset($_POST['yearb'])) 
{ 
$_SESSION['year']=$_POST['year'];
$_SESSION['sec']=$_POST['sec'];
?>
<form method="post">
<fieldset>
  
  <pre>
 
Subject    : <select name="new" id="new" required>
<option value="">--- Select ---</option>
<?php
$list=mysqli_query($connect,"select distinct(subject) from ttinfo where year ='".$_SESSION['year']."' and sec='".$_SESSION['sec']. "'  and dept='ECE'");
while($row_list = mysqli_fetch_assoc($list)){
?>
<option> <?php echo $row_list['subject']; ?>       </option>
<?php } ?>
    </select>  <input type="submit" name="display" class="btn btn-primary" value="Display" />  
<?php } ?>
</pre>

   </form >  


   
<?php
                
		  if(isset($_POST['display']))
{
           $sub = $_POST["new"] ;
           $_SESSION['sub'] = $sub;
        //    echo "<script>console.log(".json_encode($_SESSION['sub']).")</script>";
		     ?>
			 
			 
			 
			 
			   <label>year &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;: </label>  <?php echo $_SESSION['year']; ?><br>
			  <label>sec &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;       : </label>  <?php echo $_SESSION['sec']; ?><br>
			  <label>subject    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;          : </label>  <?php echo $_POST['new']; ?><br>
			 
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th width="60px"> No</th>
				  <th>Faculty Id</th>
				  <th>Faculty Name</th>
                  <th>Subject</th>
                  <th>File</th>
             
                </tr>
              </thead>
              <tbody>
			
			  <?php
			  
	$con = mysqli_connect('localhost','root',''); 
	
	mysqli_select_db($con,'login'); 

			    $no=1;
			    $r_fid= mysqli_query($con,"SELECT faculty_id FROM ttinfo WHERE subject='".$_POST['new']."' and year= '".$_SESSION['year']."' and sec='".$_SESSION['sec']."' and dept='ECE' limit 1;");
				$data2 = mysqli_fetch_assoc($r_fid);
                // echo "<script>console.log(".json_encode($data2).")</script>";
				$result = mysqli_query($con,"SELECT * FROM presentation WHERE  fid='".$data2['faculty_id']."' and subject like '{$sub}%'  ;");
                while($data = mysqli_fetch_object($result) ):
                    // echo "<script>console.log(".json_encode($data).")</script>";
			  ?>
                <tr>
				  <td><?php echo $no;?></td>
                  <td><?php echo $data->fid ?></td>
				  <?php
				  		  
				  $variable=$data->fid; 
				  $result2 = mysqli_query($con,"SELECT * FROM facultydb WHERE facultyId='".$variable."';");
				  $data2= mysqli_fetch_object($result2);
				  
				  
				  ?>
				  <td><?php echo $data2->facultyName ?></td>
                  <td><?php echo $data->subject?></td>
				  <td> <a href="../../facultyDashboard/pages/uploads/<?php echo $data->file?>" target="new"> <?php echo $data->file ?> </a> </td>
				  
                </tr>
			  <?php
				$no++;
				endwhile;
				
			  ?>
              </tbody>
		</table>
        <?php }  ?>
        <form method="post">
 <fieldset>
 
  <pre>
Start date : <input type="date" name="sdate" id="sdate">  End date : <input type="date" name="edate" id="edate">   <input type="submit" name="submit" class="btn btn-primary" value="Search" />
 </fieldset>
 
  </pre>
</form> 
         </div>
         
         
        <!-- /#page-wrapper -->

    
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
