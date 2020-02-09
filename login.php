<!DOCTYPE html>
<html>
<head>
	<title>Welcome to login page.</title>
</head>
<body>
	<form action="validate.php" method="post">
		<h2>Log in here:</h2>
		<br>
		Roll Number: 
		<input type="number" name="roll_no">
		<br>
		Password:
		<input type="password" name="password" placeholder="password">
		<br>
		<input type="submit" name="button1">
		<br>
	</form>
	<br>
	<br>
	<br>
	<br>
	<br>
	<form action="register.php" method="post">
		<h2>Sign in here:</h2>
		<br>
		Roll Number:
		<input type="number" name="roll_no">
		<br>
		Password:
		<input type="password" name="password" placeholder="password">
		<br>
		<input type="submit" name="button2">
		<br>
	</form>
</body>
</html>