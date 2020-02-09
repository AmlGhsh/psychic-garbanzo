<!DOCTYPE html>
<html>
<head>
	<title>updation of Student's Roll Number</title>
</head>
<body>
<?php
session_start();
$con=mysqli_connect('localhost','root');
// if($con)
// 	echo "Connection is successful.";
// else
// 	echo "Connection is not successful.";
mysqli_select_db($con,'college');

if(isset($_POST['new_roll']) ){
	$roll=$_SESSION['roll'];
	$new_roll=$_POST['new_roll'];
	$r=mysqli_query($con,"update details set roll='$new_roll' where roll='$roll'");
	$s=mysqli_query($con,"update signin set roll='$new_roll' where roll='$roll'");
}
?>
<script type="text/javascript">function myFunc(){location.replace("login.php");}</script>
<button onclick="myFunc()">Go Back</button>
</body>
</html>