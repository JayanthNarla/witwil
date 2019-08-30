<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
	<title>Download Files</title>
	<style type="text/css">
	#wrapper {
	margin: 0 auto;
	float: none;
	width:70%;
}
.header {
	padding:10px 0;
	border-bottom:1px solid #CCC;
}
.title {
	padding: 0 5px 0 0;
	float:left;
	margin:0;
}
.container form input {
	height: 30px;
}
body
{
    
    font-size:14;
    font-weight:bold;
}
		</style>
</head>
<body  align="center">

<br>
<div class="container home">


 <table class="table table-bordered">
  <thead>
   <tr>
    <th><font face="comic sans ms">rollno</font></th>
    <th><font face="comic sans ms">subject	</font></th>
	<th><font face="comic sans ms"> Files </font></th>
  </tr>
   </thead>
    <tbody>
                        <?php

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"login");
	$q="select count(*) \"total\"  from studentdoc";
	$ros=mysqli_query($link,$q);
	$row=(mysqli_fetch_array($ros));
	$total=$row['total'];
	$dis=3;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
	$q="SELECT * FROM studentdoc;";
	$ros=mysqli_query($link,$q);
	
	while($row=mysqli_fetch_array($ros))
	{
		echo '<tr>';
		
		echo '<td align=center>' . $row['rollno'];
		echo '<td align=center>' .$row['subject'];
		echo "<td align=center><a title='Click here to download in file.' 
		     href='download.php?id={$row['file']}'>{$row['file']} </a>"; 
		
		echo '</tr>';
		
	}
	echo '</table>';
	echo  '</tbody>';
	echo '<br/>';
	
   
?>

</div>
</body>
</html>								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
                        
						
  

