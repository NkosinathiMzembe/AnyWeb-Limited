<?php
	require ('record_db.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Student Report</title>
	<link rel="stylesheet" type="text/css" href="form_style.css">

</head>
<body>

<?php
	if (isset($_POST['rclicked'])) {

		// get the submitted username and password
		$Admin_id = $_POST['admin_id'];
		$Firstname = $_POST['firstname'];
		$Lastname = $_POST['lastname'];
		$pass = $_POST['adminpass'];
		$hpass = password_hash($pass, PASSWORD_DEFAULT);

 // create sql query to insert user into the database
		$sql = "INSERT INTO admin_record VALUES('$Admin_id','$Firstname','$Lastname','$hpass')";
		//run the query and store result
		$result = mysqli_query($connection,$sql);
		
		//check if results were retrieved
		if ($result > 0) {
	    	// redirect user to login page
			header("Location: admin_login_page.php");
		} 
		else{
	    	// redirect user to register page
			header("Location: admin_login_page.php");
			// display error
			echo "Registration failed";
		}
	}


	else if (isset($_POST['admin_login'])) {

		// get the submitted username and password
		$Admin_id = $_POST['admin_id'];
		$pass = $_POST['adminpass'];
		$hpass = password_hash($pass, PASSWORD_DEFAULT);

		if (password_verify($pass, $hpass)==true){
			header("Location: teachers/index.php");

			}
		}

	
?>
</body>
</html>
