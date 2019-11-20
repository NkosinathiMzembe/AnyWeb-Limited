<!DOCTYPE html>

<html>

<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="form_style.css">
	<style type="text/css">
		@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
	</style>
</head>
 


<body background="teacher.jpg">

	<h1>Admin Login</h1>

	<form method="POST" action="admin_login.php">

		<i class="fa fa-user-o" aria-hidden="true"></i>
		<label>Admin ID</label>
		<input type="text" id="admin_id" name="admin_id" placeholder="Admin_id"><br>

		<i class="fa fa-key" aria-hidden="true"></i>
		<label>Password</label>
		<input type="password" id="adminpass" name="adminpass" placeholder="Password"><br>

		<div class="submit_btn">
		<input type="submit" value="Login" name="admin_login">
		</div>

		<a href='admin_register.php'>Register</a> 
	</form>

</body>

</html>