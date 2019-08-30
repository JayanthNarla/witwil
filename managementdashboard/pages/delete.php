<link rel="stylesheet" href="css/bootstrap.min.css" />
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
    
    font-size:12;
    font-weight:bold;
}


		</style>
<div class="container home">
		<h3> Delete Book</h3>
		<?php include "connection.php" ?>
		<table class="table table-bordered">
              <thead>
                <tr>
                  <th width="60px"> No</th>
				  <th>Faculty Id</th>
                  <th>Subject</th>
                  <th>File</th>
             
                </tr>
              </thead>
              <tbody>
			  <?php 
			 
	$con = mysqli_connect('localhost','root',''); 
	
	mysqli_select_db($con,'login'); 

			    $no=1;
				$result = mysqli_query($con,"SELECT * FROM presentation");
				while($data = mysqli_fetch_object($result) ):
			  ?>
                <tr>
				  <td><?php echo $no;?></td>
                  <td><?php echo $data->fid ?></td>
                  <td><?php echo $data->subject?></td>
				  <td><a href="download.php" target="new"><?php echo $data->file?></a></td>
				  
                </tr>
			  <?php
				$no++;
				endwhile;
			  ?>
              </tbody>
		</table>
</div>	
</div>
</body>
</html>
