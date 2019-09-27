<?php

session_start();

if(!isset($_SESSION['user'])){
    header("Location: ../../homepage.php");
}
$connect1 = mysqli_connect("localhost", "root", "", "login");
$output ="";

$allowed = array("pdf");

if(isset($_POST["import"]))
{  

	$file =$_FILES["file"]["name"];
	$tmp_name=$_FILES["file"]["tmp_name"];
	$path = "upload/" .$file;
    $file1 = explode (".",$file) ;
    $index = sizeof($file1);
    $ext = $file1[$index-1];
	if(in_array($ext,$allowed))
	{
		$roll=$_POST['text'];
        $roll1 = explode (",",$roll) ;
		 
		  $flag=0;
					    for($i=0;$i<sizeof($roll1); $i++) 
						{
							
							$verify="SELECT * FROM studentdb WHERE year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."' and rollno='".$roll1[$i]."' ;" ;
                            $ver = mysqli_query($connect1,$verify);
							$v = mysqli_fetch_assoc($ver);
							if(empty($v))
								$flag=1;
							
							$verify1="SELECT * FROM studentdoc WHERE rollno='".$roll1[$i]."' and subject='".$_POST['new']."' and unit='".$_POST['unit']."' ;" ;
                            $ver1 = mysqli_query($connect1,$verify1);
							$v1= mysqli_fetch_assoc($ver1);
							if(!empty($v1))
							{
								$flag=2;
								$s=$roll1[$i];
							}
						}
					   
					   if($flag==1)
					   {
						   /*echo '<script language="javascript">alert("Enter correct roll no")</script>'; */
						   echo '<h1 style="color:red;">Enter correct Roll Number</h1>';
					   }
						else if($flag==2)
						{
							echo '<h1 style="color:red;">Already Submitted</h1>';
						/*echo '<script language="javascript">alert(" Roll no exists")</script>';*/
					
						}	   
                       else{
								
        for($i=0;$i<sizeof($roll1); $i++) {
 
		        
				   
						 move_uploaded_file($tmp_name,$path);
						$sql1= "INSERT INTO studentdoc(subject,unit,faculty,rollno,file,year,sec,branch) VALUES ('".$_POST['new']."','".$_POST['unit']."','".$_POST['faculty']."','".$roll1[$i]."','".$file."','".$_SESSION['year']."','".$_SESSION['sec']."','".$_SESSION['branch']."');";
				if (mysqli_query($connect1,$sql1))
						{
						
							if(($i+1)==sizeof($roll1)){
						echo "<script>alert('File Uploaded');window.location.href='http://10.45.8.185/witnwil/studentDashboard/pages/form.php';  </script>"; 
							}
						
						}
					
						
						else
							echo('Error : ' . mysqli_error($connect1));		
		}
					   }
	}
	else{
		echo '<script language="javascript">alert("File Format not supported.Only Pdfs are accepted")</script>';
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

    <title>WIT & WIL</title>
<link rel="stylesheet" type="text/css" href="style1.css">
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
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="changepwd.php"><i class="fa fa-gear fa-fw"></i> change password</a>
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
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> <font color="black">Student Dashboard</a></font>
                        </li>
                        
                        <li>
                            <a href="form.php"><i class="fa fa-edit fa-fw"></i><font color="black">Student Feedback</a></font>
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
                    <h1 class="page-header">Student Feedback</h1>
					
					
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
			<!--<div class="row">
				<div class="col-lg-12">-->
					
					<?php
						$connect = mysqli_connect("localhost", "root", "", "login");
						//$sql = "select * from ttinfo where year='".$_SESSION['year']."' and dept ='".$_SESSION['branch']."';";
						
						//$result = mysqli_query($connect,$sql);
        
						//while($row = mysqli_fetch_assoc($result)){
					?>
					
					<?php //}	?>
							

<form method="post" enctype="multipart/form-data"  action="form.php">
<div class="input-group">
<label>Subject:</label>  <select name="new" id="new" required><option value="">--- Select ---</option>
<?php

$list=mysqli_query($connect,"select distinct(subject) from ttinfo where year='".$_SESSION['year']."' and dept ='".$_SESSION['branch']."';");

while($row_list = mysqli_fetch_assoc($list)){

?>

<option><?php echo $row_list['subject']; ?>  </option>


<?php

}?>
 </select></div>
 <div class="input-group">
<label>unit:</label>  <select name="unit" id="unit" required><option value="">--- Select ---</option>
<option>UNIT 1 </option>
<option>UNIT 2</option>
<option>UNIT 3</option>
<option>UNIT 4 </option>
<option>UNIT 5</option>
</select>
</div>
 <div class="input-group">
<label>Faculty:</label> <select name="faculty" id='faculty' required><option value="">--- Select ---</option>
<?php
$connect1= mysqli_connect("localhost", "root", "","login");						
$list1=mysqli_query($connect1,"select facultyName from facultydb where facultyId in(select faculty_id from ttinfo where year='".$_SESSION['year']."' and sec='".$_SESSION['sec']."') ;");
while($row_list1 = mysqli_fetch_assoc($list1)){

?>
<option>    <?php echo $row_list1['facultyName']; ?>  </option>
<?php

}?>
</select>
</div>
	<div class="input-group">
			<label>Roll no's</label>
			<input type="text" name="text" value="" required>
	</div>
	<p><font size="2" color="red">Enter Full Roll Numbers separated by comma(,)</font></p>
	
	<input type="file" name="file" id="file" required><br>
	<input type="submit" name="import" class="btn btn-info" value="Upload" />  

</form>


			


				</div>

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
