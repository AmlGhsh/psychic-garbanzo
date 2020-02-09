<?php
	session_start();
	$con=mysqli_connect('localhost','root');
	if($con)
		echo "connection is successful";
	else
		echo "connection is not successful";
	mysqli_select_db($con,'college');
	$full_name=$_POST['full_name'];
	$guardian_name=$_POST['guardian_name'];
	$age=$_POST['age'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$dept=$_POST['dept'];
	$course=$_POST['course'];
	$roll=$_POST['roll'];
	$regd=$_POST['regd'];
	$q1="insert into details values('$full_name','$guardian_name','$age','$address','$contact','$course','$dept','$roll','$regd')";
	mysqli_query($con,$q1);
	header('location:login.php');
?>