<!DOCTYPE html>

<html>

<head>

	<title>Login Form</title>

	<style type="text/css">
		@import "https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background:url("teacher.jpg");
			background-size: cover;
		}
      
		form{
			position:absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
			padding:40px;
			background:rgba(0,0,0,.8);
			box-sizing: border-box;
			box-shadow: rgba(0,0,0,.5);
			border-style: groove;
		}

		h1{
			text-align: center;
			padding-top: 150px;
		}

		i{
			color: white;
		}



		input{
			margin: 0 0 30px;
			padding:10px 10px;
			font-size: 16px;
			text-align: center;
		}

		label{
			color:white;
		}

		.login{
			text-align: center;
		}

	</style>

</head>
 
<body>

	<h1>STUDENT REPORT</h1>

	<form method="POST" action="student_record.php">

		<i class="fa fa-user-o" aria-hidden="true"></i>
		<label>Student ID</label>
		<input type="text" id="student_id" name="student_id" placeholder="Student ID"><br>

		<i class="fa fa-key" aria-hidden="true"></i>
		<label>Password</label>
		<input type="password" id="upass" name="upass" placeholder="Password"><br>

		<div class="login">
		<input type="submit" value="Login" name="lclicked">
		</div>
	</form>

	
	


</body>

</html>