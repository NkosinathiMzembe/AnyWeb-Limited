<!DOCTYPE html>

<html>

<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="form_style.css">
	<style type="text/css">
		@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
	</style>
</head>
 


<body background="teacher.jpg">

	<h1>STUDENT REPORT</h1>

	<form method="POST" action="student_record.php">

		<i class="fa fa-user-o" aria-hidden="true"></i>
		<label>Student ID</label>
		<input type="text" id="student_id" name="student_id" placeholder="Student ID"><br>

		<i class="fa fa-key" aria-hidden="true"></i>
		<label>Password</label>
		<input type="password" id="upass" name="upass" placeholder="Password"><br>

		<div class="submit_btn">
		<input type="submit" value="Login as student" name="lclicked">
		</div>
	</form>

</body>

</html>