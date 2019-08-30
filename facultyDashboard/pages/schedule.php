<?php

$connect = mysqli_connect("localhost", "root", "", "login");
$query = "select * from ttinfo where faculty_id='15cse091';";
$data = mysqli_query($connect,$query);
echo "<html><body><table>";
while($row = mysqli_fetch_assoc($data)){
	echo "<tr><td>";
	echo $row['subject'];
	echo "</td></tr>";
}
echo "</table></body></html>";	

?>