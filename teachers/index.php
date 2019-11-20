<!DOCTYPE html>
<html>
	<head>
		<title>Student Record</title>
		<link rel="stylesheet" type="text/css" href="form_style.css">
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
				color: black;
				}

			tr:nth-child(even) {
				background-color: darkgrey;
				}
		</style>

	</head>

	<body>
		<h1>Student Record</h1>

		<?php
			include_once("contact.php");

			#student record
			$contact_object = new Contact();

			$contact_object->read();

			#add student record
			echo "

				<table>
				  <tr>
				    <th>Student ID</th>
				    <th>Course Name</th>
				    <th>Grade Score</th>
				    <th>Grade</th>
				    <th>Action</th>
				  </tr>
			";

			while($row = $contact_object->get_record()){
				$id = $row["id"];
				$student_id = $row["student_id"];
				$course_name = $row["course_name"];
				$grade_score = $row["grade_score"];
				$grade = $row["grade"];

				echo "
				  <tr>
				    <td>$student_id</td>
				    <td>$course_name</td>
				    <td>$grade_score</td>
				    <td>$grade</td>
				    <td>
				    	<a href='controller.php?edit=$id'>edit</a> 
				    	<a href='controller.php?del=$id'>delete</a>
				    </td>
				  </tr>
				";
			}

			echo "</table>";
	    ?>
	</body>
</html>


