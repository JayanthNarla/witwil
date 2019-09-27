<?php
session_start(); 
include('documentupload.php')?>




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
</style >
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
                        <li><a href="../../logout.php><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                 <!--   <h1 class="page-header">View Schedule</h1> -->
					
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
			<!--<div class="row">
				<div class="col-lg-12">-->
					
					
					<?php
						$connect = mysqli_connect("localhost", "root", "", "login");
						$sql = "select * from ttinfo where faculty_id='".$_SESSION['id']."' and day=DAYNAME(CURDATE());";
						$result = mysqli_query($connect,$sql);

						while($row = mysqli_fetch_assoc($result)){
							//echo $row['subject'];  ?>   &nbsp;     
							<?php  // echo $row['hour']; ?>
							
					
					
						  <br>
					<?php }					?>
				
                           


                            

				
					<?php
						//$connect = mysqli_connect("localhost", "root", "", "login");
						$sql1= "select * from swap where swapid='".$_SESSION['id']."' and date= cast(NOW()as date)  ";
						$result1= mysqli_query($connect,$sql1);

						while($row1 = mysqli_fetch_assoc($result1)){
					              //  echo $row1['subject']; ?>
					<br>
					      	<?php    }	  ?>
					
					
					
				
					
					<?php

$connect = mysqli_connect("localhost", "root", "", "login");
						
 $h="SELECT * FROM holidays WHERE date= cast(NOW()as date);" ;


$r = mysqli_query($connect,$h);
$hldy= mysqli_fetch_assoc($r);
if(!empty($hldy)){
  ?>  <p><font size="6" color="red">No Classes Today(<?php echo $hldy['reason']; ?>)</font></p><?php
  
}

else{

?>
					
					
					
					
					
					
					
					
				<form action="view_schedule.php" method="post" >

<fieldset>
<legend>Upload Documents</legend>
<pre>
Subject : <select name="new" id="new" Required >

<option value="">--- Select ---</option>

 ---</option>


<?php

$list=mysqli_query($connect,"select * from ttinfo where faculty_id='".$_SESSION['id']."'  and day=DAYNAME(CURDATE()) ;");

while($row_list = mysqli_fetch_assoc($list)){

?>

<option> <?php echo $row_list['subject']; ?>    <?php echo $row_list['hour']; ?> </option>


<?php

}?>
<?php

$list=mysqli_query($connect,"select * from swap where swapid='".$_SESSION['id']."' and date= cast(NOW()as date) ");

while($row_list = mysqli_fetch_assoc($list)){

?>

<option> <?php echo $row_list['subject']; ?>    </option>


<?php

}?>
</select>
   
           <button name="btn" class="btn btn-primary" >upload</button>    
		 </fieldset>
</form>


            <button onclick="location.href='displaydoc.php'"  class="btn btn-primary">View Submissions</button>		  
		   
<br>

</pre>
<?php
if(isset($_POST['new']))
{

				$con = mysqli_connect("localhost","root","","login");
				if (!$con)
					echo('Could not connect: ' . mysql_error());
				else
				{
					
					
						
						//mysqli_select_db( $con,"login");
						$sql = "select count(1) from presentation where fid='".$_SESSION['id']."' and subject='".$_SESSION['sub']."')";
						if (mysqli_query($con,$sql)){
						echo '<script language="javascript">alert("already uploaded")</script>';
						//header('location:http://10.45.8.185/witnwil/facultyDashboard/pages/d.php');
						
						}
							
					else
							echo('Error : ' . mysqli_error($con));
						
				}
				//mysqli_close($con);
				
			}
        ?>		 	


<br>

<form  action="view_schedule.php" method="post">
 <fieldset>
  <legend>Disable Class</legend>
  <pre>
  Class    : <select name='new' Required><option value="">--- Select ---</option>
  <?php

$list=mysqli_query($connect,"select * from ttinfo where faculty_id='".$_SESSION['id']."'  and day=DAYNAME(CURDATE()) ;");

while($row_list = mysqli_fetch_assoc($list)){

?>

<option>    <?php echo $row_list['subject']; ?>  <?php echo $row_list['hour']; ?> </option>


<?php

}?>
<?php

$list=mysqli_query($connect,"select * from swap where swapid='".$_SESSION['id']."' and date= cast(NOW()as date) ");

while($row_list = mysqli_fetch_assoc($list)){

?>

<option> <?php echo $row_list['subject']; ?>    </option>


<?php

}?>
</select>

  <textarea placeholder="Describe your Reason here" rows="4" cols="50" name="txt" Required></textarea>
            
           <input type="submit" name="submit" class="btn btn-primary" value="Disable" />    <input type="submit" name="submit1" class="btn btn-primary" value="Enable" />
</pre>

     			 
            
 </fieldset>
</form>
				
				
				
		
				
				
				
				
				<?php
//session_start();
$connect = mysqli_connect("localhost", "root", "", "login");
//$output ="";
if(isset($_POST["submit"]))
{
						$sql3 = "INSERT INTO disable(fid,subject,reason) VALUES ('".$_SESSION['id']."','". $_POST["new"]."','" . $_POST["txt"] ."')";
						$sql="SELECT * FROM presentation WHERE fid = '".$_SESSION['id']."' and subject='".$_SESSION['sub']."';" ;
 $sql1="SELECT * FROM disable WHERE fid ='".$_SESSION['id']."' and subject='".$_SESSION['sub']."';" ;
$sql2="SELECT * FROM swap WHERE facultyid ='".$_SESSION['id']."' and subject='".$_SESSION['sub']."';" ;
$result = mysqli_query($connect,$sql);
$result1 = mysqli_query($connect,$sql1);
$result2 = mysqli_query($connect,$sql2);

 $row = mysqli_num_rows($result);
  $row1 = mysqli_num_rows($result1);
   $row2 = mysqli_num_rows($result2);
 
 
if($row>0) 
{
 echo "<script>alert('Already uploaded');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 

}



else if($row1>0)
{
echo "<script>alert('Class is disabled');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 

}

else if($row2>0) 
{
   echo "<script>alert('Class is swapped');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 

}
	 else{
						if (mysqli_query($connect,$sql3))
						{
						echo '<script language="javascript">alert("Successfully Submitted")</script>';
						//header('location:http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php');
						}
						
						
						else
							echo('Error : ' . mysqli_error($connect));
	     }
	
 }
 
 
 
 
?>
				
				
					<?php
//session_start();
$connect = mysqli_connect("localhost", "root", "", "login");
//$output ="";
if(isset($_POST["submit1"]))
{
						$sql3 = "DELETE FROM disable where fid = '".$_SESSION['id']."' and subject='". $_POST["new"]."';";
						
 $sql1="SELECT * FROM disable WHERE fid ='".$_SESSION['id']."' and subject='".$_SESSION['sub']."';" ;
$sql2="SELECT * FROM swap WHERE facultyid ='".$_SESSION['id']."' and subject='".$_SESSION['sub']."';" ;

$result1 = mysqli_query($connect,$sql1);
$result2 = mysqli_query($connect,$sql2);


  $row1 = mysqli_num_rows($result1);
   $row2 = mysqli_num_rows($result2);
 
  if($row1<0)
{
echo "<script>alert('Class is not disabled');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 

}

else if($row2>0) 
{
   echo "<script>alert('Class is swapped');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 

}
	 else{
						if (mysqli_query($connect,$sql3))
						{
						echo "<script>alert('Class is enabled');window.location.href='http://10.45.8.185/witnwil/facultyDashboard/pages/view_schedule.php';  </script>"; 
						}
						
						
						else
							echo('Error : ' . mysqli_error($connect));
	     }
	
 }
 
 
 
}
?>
				
				
				
				
				
				
				
				
				
				
			<!--</div>
		</div>-->

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
