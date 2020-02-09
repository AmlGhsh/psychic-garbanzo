<html>
<title>Updation of student name</title>
<body>
<?php
session_start();
$con=mysqli_connect('localhost','root');
// if($con)
// 	echo "Connection is successful.";
// else
// 	echo "Connection is not successful.";
mysqli_select_db($con,'college');

if(isset($_POST['new_full_name']) ){
	$roll=$_SESSION['roll'];
	$new_name=$_POST['new_full_name'];
	$r=mysqli_query($con,"update details set full_name='$new_name' where roll='$roll'");
}
?>
<script type="text/javascript">function myFunc(){location.replace("login.php");}</script>
<button onclick="myFunc()">Go Back</button>
</body>
</html>