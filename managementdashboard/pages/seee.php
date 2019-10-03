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
                        <li>
                            <a href="deleterep.php"><i class="fa fa-trash" aria-hidden="true"></i> <font color="black">Delete All Reports</a></font>
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
                    <h1 class="page-header">EEE Reports</h1>
                </div>
           
            </div>
 <form method="post">
 <pre>

<label>year : </label>  <select name="year" id="year" required><option value=""><?php if(isset($_POST['year'])){ echo $_POST['year']; } else{ echo "---Select---"; } ?></option>
<?php
$connect = mysqli_connect("localhost", "root", "", "login");
$list=mysqli_query($connect,"select distinct(year) from ttinfo where dept ='EEE';");

while($row_list = mysqli_fetch_assoc($list)){

?>

<option><?php echo $row_list['year']; ?>  </option>


<?php } ?>
 </select>   <label> Section : </label>  <select name="sec" id="sec" required><option value=""><?php if(isset($_POST['sec'])){ echo $_POST['sec']; } else{ echo "---Select---"; } ?></option>
<?php

$list1=mysqli_query($connect,"select distinct(sec) from ttinfo where dept ='EEE';");

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
<option value=""><?php if(isset($_POST['new'])){ echo $_POST['new']; } else{ echo "---Select---"; } ?></option>
<?php
$list=mysqli_query($connect,"select distinct(subject) from ttinfo where year ='".$_SESSION['year']."' and sec='".$_SESSION['sec']."'");
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
		   
		     ?>
			 
  	 <table class="table table-bordered">
              <thead>
                <tr>
				   <th></th>
                   <th>Unit 1</th>
				   <th>Unit 2</th>
                   <th>Unit 3</th>
                   <th>Unit 4</th>
                   <th>Unit 5</th>
                </tr>
              </thead>
              <tbody>
			
			  <?php
			

				
				$total="SELECT COUNT(rollno) as tat FROM studentdb WHERE year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."' " ;
				$uni1="SELECT COUNT(rollno) as tat1 FROM studentdoc where year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."' and  subject='".$_POST['new']."' and unit='UNIT 1'" ;
				$uni2="SELECT COUNT(rollno) as tat2 FROM studentdoc where year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."' and  subject='".$_POST['new']."' and unit='UNIT 2'" ;
				$uni3="SELECT COUNT(rollno) as tat3 FROM studentdoc where year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."' and  subject='".$_POST['new']."' and unit='UNIT 3'" ;
				$uni4="SELECT COUNT(rollno) as tat4 FROM studentdoc where year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."' and  subject='".$_POST['new']."' and unit='UNIT 4'" ;
				$uni5="SELECT COUNT(rollno) as tat5 FROM studentdoc where year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."' and  subject='".$_POST['new']."' and unit='UNIT 5'" ;
				
				$result = mysqli_query($connect,$total);
				$result1 = mysqli_query($connect,$uni1);
				$result2 = mysqli_query($connect,$uni2);
				$result3 = mysqli_query($connect,$uni3);
				$result4 = mysqli_query($connect,$uni4);
				$result5 = mysqli_query($connect,$uni5);
				$total = mysqli_fetch_assoc($result);
				$unit1 = mysqli_fetch_assoc($result1);
				$unit2 = mysqli_fetch_assoc($result2);
				$unit3 = mysqli_fetch_assoc($result3);
				$unit4 = mysqli_fetch_assoc($result4);
				$unit5 = mysqli_fetch_assoc($result5);
				
				
					
			  ?>
			  
			  
			 
			  <label>year &nbsp;   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;: </label>  <?php echo $_SESSION['year']; ?><br>
			  <label>sec &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;       : </label>  <?php echo $_SESSION['sec']; ?><br>
			  <label>subject    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;          : </label>  <?php echo $_POST['new']; ?><br>
			  <label>Total no of students  &nbsp;:</label>  	<?php echo $total['tat']; ?>
			  
			  <br>
                <tr>
				  <td>Submitted</td>
				  <td><?php echo $unit1['tat1']?></td>
                  <td><?php echo $unit2['tat2']?></td>
                  <td><?php echo $unit3['tat3']?></td>
				  <td> <?php echo $unit4['tat4']?></td>
				 <td> <?php echo $unit5['tat5']?></td>
                </tr>
			  <?php
				
				
				
			  ?>
              </tbody>
		</table>
			 
			 
			 
			 
		<table class="table table-bordered">
              <thead>
                <tr>
                  
				  <th>Roll no</th>
                  <th>Subject</th>
                  <th>File</th>
             
                </tr>
              </thead>
              <tbody>
			
			  <?php
			

			    $no=1;
				$result = mysqli_query($connect,"SELECT * FROM studentdoc WHERE subject='".$_POST['new']."' and year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."' ");
				while($data = mysqli_fetch_object($result) ):
			  ?>
                <tr>
				  
                  <td><?php echo $data->rollno?></td>
                  <td><?php echo $data->subject?></td>
				  <td> <a href="http://10.45.8.185/witnwil/facultyDashboard/pages/uploads/<?php echo $data->file?>" target="new"> <?php echo $data->file ?> </a> </td>
				  
                </tr>
			  <?php
				
				endwhile;
				
			  ?>
              </tbody>
		</table>
		<?php }  ?>
		  
		     
			 
			 
			 
			 
			 
			 
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
