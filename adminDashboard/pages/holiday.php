<?php 

?>

<?php  include('server.php'); ?>
<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM holidays WHERE id=$id");

		if (count(array($record)) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['reason'];
			$address = $n['date'];
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
	<link rel="stylesheet" type="text/css" href="style.css">
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
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
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
                            <a href="holiday.php"><i class="fa fa-edit fa-fw"></i> <font color="black">Edit Holidays</a></font>
                        </li>
						<li>
                            <a href="changepassword.php"><i class="fa fa-edit fa-fw"></i> <font color="black"> Change password</a></font>
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
                    <h1 class="page-header">Edit Holidays</h1>
                </div
                <!-- /.col-lg-12 -->

            </div>
            <!--<div class="header">
		<h2>Admin - create user</h2>
	</div>-->
<?php
$connect = mysqli_connect("localhost", "root", "", "login");
$output ="";
    if(isset($_POST["import"]))
{
 $ext = explode(".", $_FILES["excel"]["name"]);
 $extension	=	end($ext);	// For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include_once("../../timetables/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  $output .= "<thead><tr><th>Holiday</th><th>Date</th></tr></thead>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   { 
    
    $output .= "<tr>";
    $reason = trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue()));
    $val = trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue()));
    $date = PHPExcel_Style_NumberFormat::toFormattedString($val, "YYYY-M-D");
    // $dept = trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue()));
    // $academic_year = trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue()));
	// $year=trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue()));
	// $sem=trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue()));
    // $sec=trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue()));
	// $day=trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue()));
	// $no_of_hours=trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue()));
	// $subject=trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue()));
	// $faculty_id=trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue()));
	// $hour=trim(mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue()));	
	$query = "INSERT INTO holidays(reason,date) VALUES ('".$reason."','".$date."')";
    mysqli_query($connect, $query);
    // $query2 = "INSERT INTO subdep(subject,dept) VALUES ('".$subject."', '".$dept."')";
    // mysqli_query($connect, $query2);
    $output .= '<td>'.$reason.'</td>';
    $output .= '<td>'.$date.'</td>';
	// $output .= '<td>'.$action.'</td>';
	// $output .= '<td>'.$sem.'</td>';
	// $output .= '<td>'.$sec.'</td>';
	// $output .= '<td>'.$day.'</td>';
	// $output .= '<td>'.$no_of_hours.'</td>';
	// $output .= '<td>'.$subject.'</td>';
	// $output .= '<td>'.$faculty_id.'</td>';
	// $output .= '<td>'.$hour.'</td>';
    $output .= '</tr>';
}
} 
$output .= '</table>';

}
else
{
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
}
}
?>

<?php $results = mysqli_query($db, "SELECT * FROM holidays"); ?>


<div class="container box">

    <form method="post" enctype="multipart/form-data">
        
        <label>Select Holiday Excel File</label>
        <input type="file" name="excel" />
        <br />
        <input type="submit" name="import" class="btn btn-info" value="Import" />
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
