<!DOCTYPE html>
<html>
<head>
	<title>Updation of Student's Guardian Name</title>
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

if(isset($_POST['new_guardian_name']) ){
	$roll=$_SESSION['roll'];
	$new_name=$_POST['new_guardian_name'];
	$r=mysqli_query($con,"update details set guardian_name='$new_name' where roll='$roll'");
}
?>
<script type="text/javascript">function myFunc(){location.replace("login.php");}</script>
<button onclick="myFunc()">Go Back</button>
</body>
</html>