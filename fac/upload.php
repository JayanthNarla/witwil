<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Upload File</title>
    
	
	
	<?php
					
						$connect = mysqli_connect("localhost", "root", "", "timetable");
						
						$sql = "select * from ttinfo where faculty_id='".$_SESSION['id']."' and day='".date('l')."';";
						$result = mysqli_query($connect,$sql);
                        
						
					
						$row = mysqli_fetch_assoc($result);
					?>
					
						
	
	
	
	
	
       <?php
			if(!empty($_POST))
			{
				$con = mysqli_connect("localhost","root","");
				if (!$con)
					echo('Could not connect: ' . mysql_error());
				else
				{
					if (file_exists("download/" . $_FILES["file"]["name"]))
					{
						echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...")</script>';
					}
					else
					{
						move_uploaded_file($_FILES["file"]["tmp_name"],
						"download/" . $_FILES["file"]["name"]) ;
						mysqli_select_db( $con,"timetable");
						$sql = "INSERT INTO presentations(file,book,author,year) VALUES ('" . 
							  $_FILES["file"]["name"] ."','".$_SESSION['id']."','" .$row['subject'] . "','" .$row['year'] . "');";
						if (mysqli_query($con,$sql))
						echo '<script language="javascript">alert("Thank You!! File Uploded")</script>';
							
						
						
						else
							echo('Error : ' . mysqli_error($con));
						}
				}
				//mysqli_close($con);
			}
        ?>		 
    </head>
     <body>
	   <div class="container home">
      <br>
		<h3><center> UPLOAD BOOKS</center> </h3> </font>

        <form id="form3" enctype="multipart/form-data" method="post" action="upload.php">
             <table class="table table-bordered">         	
                <tr>
                    <td>	<label for="sub">BOOK NAME</label>	</td>
                    <td>	<input type="text" name="sub" id="sub" class="input-medium"  
					         required autofocus placeholder="enter book name"/>	</td>
                </tr>
                <tr>
                    <td valign="top" align="left">AUTHOR NAME</td>
                    <td valign="top" align="left"><input type="text" name="pre" cols="50" rows="10" id="pre"  
					placeholder="enter author name"
					class="input-medium" required></textarea></td>
                </tr>
                <tr>
                    <td><label for="file">File:</label></td>
                    <td><input type="file" name="file" id="file" 
                        title="Click here to select file to upload." required /></td>
                </tr>
                <tr>
                  
				   <td colspan="2" align="center">		    
				   <button onclick="location.href='delete.php'"  class="btn btn-primary"> Upload</button>
                </tr>
            </table>
        </form>
		</div>
 <br><center><button onclick="location.href='delete.php'"  class="btn btn-primary">display book</button></center>
    </body>
</html>
