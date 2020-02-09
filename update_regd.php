<html>
<head>
	<title>Updation of Student's Registration Number</title>
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

if(isset($_POST['new_regd']) ){
	$roll=$_SESSION['roll'];
	$regd=$_POST['new_regd'];
	$r=mysqli_query($con,"update details set regd='$regd' where roll='$roll'");
}
else
echo ":(";
?>
<script type="text/javascript">function myFunc(){location.replace("login.php");}</script>
<button onclick="myFunc()">Go Back</button>
</body>
</html>