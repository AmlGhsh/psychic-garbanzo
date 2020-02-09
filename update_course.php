<html>
<head>
	<title>Updation of Student's Course</title>
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

if(isset($_POST['new_course']) ){
	$roll=$_SESSION['roll'];
	$course=$_POST['new_course'];
	$r=mysqli_query($con,"update details set course='$course' where roll='$roll'");
}
?>
<script type="text/javascript">function myFunc(){location.replace("login.php");}</script>
<button onclick="myFunc()">Go Back</button>
</body>
</html>