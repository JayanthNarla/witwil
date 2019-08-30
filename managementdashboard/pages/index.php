<?php
session_start();
 
?>
<?php
			  
	$connect = mysqli_connect("localhost", "root", "", "login");
	

$sql1="SELECT DISTINCT COUNT(subject) as tat FROM ttinfo WHERE day=DAYNAME(CURDATE());" ;
$sql2="SELECT DISTINCT COUNT(subject) as tat1 FROM presentation where date= cast(NOW()as date)" ;
$result = mysqli_query($connect,$sql1);
$result1 = mysqli_query($connect,$sql2);
$row_listpie = mysqli_fetch_assoc($result);
$row_list1pie = mysqli_fetch_assoc($result1);

  
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
                          <li><a href="http://10.45.8.185/witnwil/login/managementlogin.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Faculty<span class="fa arrow"></span></a></font>
                        
                                                       <ul  class="nav nav-second-level">
                                <li>
                                    <a href="#"> <font color="black">Civil Engineering</a></font>
									
									
                                </li>
                                <li>
                                    <a href="#"><font color="black">Electrical & Electronics Engineering</a></font>
									
                                </li>
								<li>
                                    <a href="#"><font color="black">Mechanical Engineering</a></font>
									
                                </li>
                                <li>
                                    <a href="#"><font color="black">Electronics and Communication Engineering</a></font>
									
                                </li>
								<li>
                                    <a href="cse.php"><font color="black">Computer Science & Engineering</a></font>
									
                                </li>
                                <li>
                                    <a href="#"><font color="black">Electronics & Instrumentation Engineering</a></font>
									
                                </li>
								<li>
                                    <a href="#"><font color="black">Information Technology</a></font>
									
                                </li>
                                <li>
                                    <a href="#"><font color="black">Automobile Engineering</a></font>
									
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> <font color="black">Students<span class="fa arrow"></span></a></font>
                             <ul  class="nav nav-second-level">
                                <li>
                                    <a href="#"> <font color="black">Civil Engineering</a></font>
									
									
                                </li>
                                <li>
                                    <a href="#"><font color="black">Electrical & Electronics Engineering</a></font>
									
                                </li>
								<li>
                                    <a href="#"><font color="black">Mechanical Engineering</a></font>
									
                                </li>
                                <li>
                                    <a href="#"><font color="black">Electronics and Communication Engineering</a></font>
									
                                </li>
								<li>
                                    <a href="scse.php"><font color="black">Computer Science & Engineering</a></font>
									
                                </li>
                                <li>
                                    <a href="#"><font color="black">Electronics & Instrumentation Engineering</a></font>
									
                                </li>
								<li>
                                    <a href="#"><font color="black">Information Technology</a></font>
									
                                </li>
                                <li>
                                    <a href="#"><font color="black">Automobile Engineering</a></font>
									
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
                    <h1 class="page-header">Dashboard</h1>
                </div>  
				</div> 
       <fieldset>
        <legend>B.Tech Academic Calendars(2018-2019)</legend>
		
	  <a href="cal.pdf">I Btech Acadamic Calender 2018-19</a><br>
       <a href="cal1.pdf">II,III & IV Btech Acadamic Calender 2018-19</a>
	  </fieldset>
	 

<?php
$sub=$row_listpie['tat']-$row_list1pie['tat1'];
?>

<?php

$connect = mysqli_connect("localhost", "root", "", "login");
						
 $h="SELECT * FROM holidays WHERE date= cast(NOW()as date);" ;


$r = mysqli_query($connect,$h);
$hldy= mysqli_fetch_assoc($r);
if(!empty($hldy)){
  ?>  <p><font size="6" color="red">No Classes Today due to <?php echo $hldy['reason']; ?> </font></p><?php
  
}

else{

?>

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['submitted', <?php echo $row_list1pie['tat1'];  ?>],
  ['Not submitted', <?php echo $sub;?>],
  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Todays WIT Submissions', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

 </div>
<?php } ?>
     
         
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
