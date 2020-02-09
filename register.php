<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();
	$con=mysqli_connect('localhost','root');
	// if($con)
	// 	echo "connection is successful";
	// else
	// 	echo "connection is not successful";
	mysqli_select_db($con,'college');
	$roll=$_POST['roll_no'];
	$pass=$_POST['password'];
	$q="SELECT * FROM signin WHERE roll = '$roll' || password = '$pass' ";
	$r=mysqli_query($con,$q);
	$s=mysqli_num_rows($r);
	if($s>=1){
		echo("<script>alert('User with same roll or password exists.');</script>");
	}
	else{
		$q1="insert into signin(roll,password) values ('$roll','$pass')";
		mysqli_query($con,$q1);
		header('location:fill_up.html');
	}
	?>

<script>function myFunc(){location.replace("login.php");}</script>
<button onclick="myFunc()">Go Back</button>
</body>
</html>