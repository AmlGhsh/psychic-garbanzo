<!DOCTYPE html>
<html>
<head>
	<title>Student Details Page.</title>
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
	$q="select * from signin where roll='$roll' && password='$pass'";
	$res=mysqli_query($con,$q);
	$num=mysqli_num_rows($res);
	if($num>0){
		$q1="select * from details where roll='$roll'";
		$result=mysqli_query($con,$q1);
		$row = mysqli_fetch_assoc($result);
		$_SESSION['full_name']=$row["full_name"];
		$_SESSION['guardian_name']=$row["guardian_name"];
		$_SESSION['age']=$row["age"];
		$_SESSION['address']=$row["address"];
		$_SESSION['contact']=$row["contact"];
		$_SESSION['course']=$row["course"];
		$_SESSION['dept']=$row["dept"];
		$_SESSION['roll']=$row["roll"];
		$_SESSION['regd']=$row["regd"];
		header('location:details.php');
	}
	else{
		echo('<script>alert("Wrong roll number or password.Try again")</script>');
	}
?>
<script>function myFunc(){location.replace("login.php");}</script>
<button onclick="myFunc()">Go Back</button>
</body>
</html>