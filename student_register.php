<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<h1>Register Form</h1>

	<form method="POST" action="student_record.php">
		<label>Student ID</label>
		<input type="text" id="student_id" name="student_id"><br>

		<label>Firstname</label>
		<input type="text" id="firstname" name="firstname"><br><br>

		<label>Lastname</label>
		<input type="text" id="lastname" name="lastname"><br><br>

		<label>Password</label>
		<input type="password" id="upass" name="upass"><br><br>

		<input type="submit" value="Register" name="rclicked">
	</form>
</body>
</html>