<?php
$mysql_hostname = "localhost";  //your mysql host name
$mysql_user = "root";			//your mysql user name
$mysql_password = "";			//your mysql password
$mysql_database = "test2";	//your mysql database

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("not connected");
mysql_select_db($mysql_database, $bd) or die("no database found");











