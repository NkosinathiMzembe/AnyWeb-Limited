<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="form_style.css">
	<style type="text/css">
		@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
	</style>



</head>
<body background="staff.jpg">

<h1>Register Form</h1>

	<form method="POST" action="admin_login.php">
		<i class="fa fa-user-o" aria-hidden="true"></i>
		<label>Admin ID</label>
		<input type="text" id="admin_id" name="admin_id"><br>


		<i class="fa fa-address-card-o" aria-hidden="true"></i>
		<label>Firstname</label>
		<input type="text" id="firstname" name="firstname"><br><br>


		<i class="fa fa-address-card-o" aria-hidden="true"></i>
		<label>Lastname</label>
		<input type="text" id="lastname" name="lastname"><br><br>


		<i class="fa fa-key" aria-hidden="true"></i>
		<label>Password</label>
		<input type="password" id="adminpass" name="adminpass"><br><br>


		<div class="submit_btn">
		<input type="submit" value="Register" name="rclicked">
		</div>
	</form>
</body>
</html>