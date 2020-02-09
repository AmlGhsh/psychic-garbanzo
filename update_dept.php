<!DOCTYPE html>
<html>
<head>
	<title>Updation of Student's Department</title>
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

if(isset($_POST['new_dept']) ){
	$roll=$_SESSION['roll'];
	$dept=$_POST['new_dept'];
	$r=mysqli_query($con,"update details set dept='$dept' where roll='$roll'");
	header('location:login.php');
}
?>
<script type="text/javascript">function myFunc(){location.replace("login.php");}</script>
<button onclick="myFunc()">Go Back</button>
</body>
</html>
