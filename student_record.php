<?php
include_once 'record_db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Report</title>
	<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			color: #d96459;
			font-family: monospace;
			font-size: 25px;
			text-align:left;
		}
 
		th {
			background-color: #d96459;
			color: white;
		}


		tr: nth-child(even) {
			background-color: grey;
		}

	</style>
</head>
<body>
<!-- 	<table>
 -->		
<?php
	if (isset($_POST['rclicked'])) {

		// get the submitted username and password
		$Student_id = $_POST['student_id'];
		$pass = $_POST['upass'];
		$hpass = password_hash('upass', PASSWORD_DEFAULT);

 
		// create sql query to insert user into the database
		$sql = "INSERT INTO student_rec(Student_id,Password) VALUES('$Student_id','$hpass')";

		//run the query and store result
		$result = mysqli_query($connection,$sql);
		
		//check if results were retrieved
		if ($result > 0) {
	    	// redirect user to login page
			header("Location: student_login.php");
		} 
		else {
	    	// redirect user to register page
			header("Location: student_register.php");
			// display error
			echo "Registration failed";
		}
	}


	else if (isset($_POST['lclicked'])) {

		// get the submitted username and password
		$student_id = $_POST['student_id'];
		$pass = $_POST['upass'];
		$hpass = password_hash('upass', PASSWORD_DEFAULT);

		

		$sql = "SELECT * FROM Student_Grade,student_rec WHERE Student_Grade.Student_id='$student_id' && Password = '$hpass'";

			//run the query and store result
			$result = mysqli_query($connection,$sql);

			$resultCheck = mysqli_num_rows($result);

			


			//check if results were retrieved
			if ($resultCheck > 0) {
				echo 
				"<table><tr><th>Student ID</th>
				<th>Course ID</th>
				<th>Course Name</th>
				<th>Semester</th>
				<th>Grade Score</th>
				<th>Letter</th>
				<th>Course Credit</th></tr>";

				// fetch result as an array
		       while ($row = mysqli_fetch_assoc($result)){
		       		//display grades
		       		echo (
		       		"<tr><td>" . $row["Student_id"] . 
		       		"</td><td>". $row["course_id"].
		       		"</td><td>". $row["course_name"] .	 
		       		"</td><td>". $row["Semester"] .		 
		       		"</td><td>". $row["Grade_Score"]  .
		       		"</td><td>". $row["Letter"]  .
		       		"</td><td>". $row["Course_Credit"] .
		       		"</td></tr>");
		    		
		    	}
		
		        echo "</table>";
		    }

		   	else{
		    	 echo "Login failed";

		    }
}
	//	close database connection
		mysqli_close($connection);
		?>
</body>
</html>
