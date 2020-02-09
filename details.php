<!DOCTYPE html>
<html>
<head>
	<title>Student details</title>
</head>
<body>
<?php
	session_start();
?>
<h2>Student Details:</h2>
<br>
<br>
<table>
	<tr>
		<th>Attribute</th>
		<th>Value</th>
		<th>Update</th>
	</tr>
	<tr>
		<td>Full name</td>
		<td><?php echo($_SESSION['full_name']);?></td>
		<td>
			<form action="update_name.php" method="post">
				Enter new name:<br>
				<input type="text" name="new_full_name"><br><br>
				<input type="submit" name="name_button" value="Change full name">
			</form>
		</td>
		
	</tr>
	<tr>
		<td>Guardian's name</td>
		<td><?php echo($_SESSION['guardian_name']);?></td>
		<td>
			<form method="post" action="update_guardian_name.php">
				Enter new guardian's name:<br><br>
				<input type="text" name="new_guardian_name"><br><br>
				<input type="submit" name="guardian_name_button" value="Change guardian name">
			</form>
		</td>
		
	</tr>
	<tr>
		<td>Address</td>
		<td><?php echo($_SESSION['address']);?></td>
		<td>
			<form method="post" action="update_address.php">
				Enter new address:<br><br>
				<input type="text" name="new_address"><br><br>
				<input type="submit" name="addess_button" value="Change Address">
			</form>
		</td>
		
	</tr>
	<tr>
		<td>Age</td>
		<td><?php echo($_SESSION['age']);?></td>
		<td>
			<form method="post" action="update_age.php">
				Enter new age:<br><br>
				<input type="number" name="new_age"><br><br>
				<input type="submit" name="age_button" value="Change Age">
			</form>
		</td>
		
	</tr>
	<tr>
		<td>Contact number</td>
		<td><?php echo($_SESSION['contact']);?></td>
		<td>
			<form method="post" action="update_contact.php">
				Enter new contact number:<br><br>
				<input type="number" name="new_contact"><br><br>
				<input type="submit" name="contact_button" value="Change Contact">
			</form>
		</td>
		
	</tr>
	<tr>
		<td>Course</td>
		<td><?php echo($_SESSION['course']);?></td>
		<td>
			<form method="post" action="update_course.php">
			Enter new course:<br><br>
			<input type="text" name="new_course"><br><br>
			<input type="submit" name="course_button" value="Change Course">
			</form>
		</td>
		
	</tr>
	<tr>
		<td>Department</td>
		<td><?php echo($_SESSION['dept']);?></td>
		<td>
			<form method="post" action="update_dept.php">
				Enter new department:<br><br>
				<input type="text" name="new_dept"><br><br>
				<input type="submit" name="dept_button" value="Change Department">
			</form>
		</td>
		
	</tr>
	<tr>
		<td>Roll</td>
		<td><?php echo($_SESSION['roll']);?></td>
		<td><form method="post" action="update_roll.php">
				Enter new roll:<br><br>
				<input type="numbe" name="new_roll"><br><br>
				<input type="submit" name="roll_button" value="Change Roll">
			</form>
		</td>
		
	</tr>
	<tr>		
		<td>Registration number</td>
		<td><?php echo($_SESSION['regd']);?></td>
		<td><form method="post" action="update_regd.php">
				Enter new registration:<br><br>
				<input type="number" name="new_regd"><br><br>
				<input type="submit" name="regd_button" value="Change Registration">
			</form>
		</td>
		
	</tr>
</table>
</form>
<br>
<br>
<a href="delete.php?x=<?php echo($_SESSION["roll"]);?>">
	Click to delete the whole record.
</a>
</body>
</html>