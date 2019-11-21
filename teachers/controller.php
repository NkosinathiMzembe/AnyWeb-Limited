<?php
	include_once("utilities/functions.php");
	include_once("contact.php");

	if($_SERVER["REQUEST_METHOD"] == "GET"){
		if(isset($_GET['edit'])) {
			$id = $_GET['edit'];

			$contact_object = new Contact();
		
			$contact_object->read("id = '$id'");

			$row = $contact_object->get_record();

			displayForm($row['id'],$row['student_id'], $row['course_name'], $row['grade_score'], $row['grade'],'Edit Student Record');
			
		
		}else if(isset($_GET['del'])) {
			$id = $_GET['del'];

			$contact_object = new Contact($id=$id);

			$contact_object->delete();

			header("Location: .");
		}else {
			displayForm('','','','Create New Contact');
		}
	} 
	else if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST['add_record'])) {
			$id = sanitizeData($_POST['uid']);
	 		$student_id = sanitizeData($_POST['student_id']);
	 		$course_name = sanitizeData($_POST['course_name']);
	 		$grade_score = sanitizeData($_POST['grade_score']);
	 		$grade = sanitizeData($_POST['grade']);


			$contact_object = new Contact($id=$id,$student_id=$student_id, $course_name=$course_name, $grade_score=$grade_score, $grade=$grade);

			if(!empty($id)) {
				$contact_object->update();

				header("Location: .");
			} 
		}
		}
?>

