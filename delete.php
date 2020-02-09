<?php

session_start();
$con=mysqli_connect('localhost','root');
if($con)
	echo "Connection is successful.";
else
	echo "Connection is not successful.";
mysqli_select_db($con,'college');
$roll=$_GET['x'];
$r=mysqli_query($con,"delete from details where roll='$roll'");
$s=mysqli_query($con,"delete from signin where roll='$roll'");
 ?>
