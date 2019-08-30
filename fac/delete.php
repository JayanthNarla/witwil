<?php
session_start();



?>
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
				  <th>fid</th>
                  <th>subject</th>
                  <th>File</th>
               	  <th> Action </th>
                </tr>
              </thead>
              <tbody>
			  <?php 
			 
	$con = mysqli_connect('localhost','root','','timetable'); 
	
	 

			    $no=1;
				$result = mysqli_query($con,"SELECT * FROM presentation fid='".$_SESSION['id']."';");
				while($data =mysqli_fetch_assoc($result)){
			  ?>
                <tr>
				  <td><?php echo $no;?></td>
                  <td><?php echo $data->fid?></td>
                  <td><?php echo $data->subject?></td>
				  <td><a href="download.php"><?php echo $data->file?></a></td>
				  <td>
				 <a href="deleteById.php?id=<?php echo $data->id ?> ">
				<button class="btn btn-danger" title="Click here to erase file."> Delete </button>
					</a>
					

				  </td>
                </tr>
			  <?php
				$no++;
				}
			  ?>
              </tbody>
		</table>
</div>	
</div>
</body>
</html>
