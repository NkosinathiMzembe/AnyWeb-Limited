<?php
	include_once("utilities/db_access_helper.php");

	class Contact extends DatabaseAccessHelper {
		private $id = null;	
		private $student_id = null;		
		private $course_name = null;
		private $grade_score = null;
		private $grade = null;

		function __construct($id='none',$student_id='none', $course_name='none', $grade_score='none', $grade='none'){
			$this->id = $id;
			$this->student_id = $student_id;
			$this->course_name = $course_name;
			$this->grade_score = $grade_score;
			$this->grade = $grade;
		}
				
		function read($filter=false){
			$queryString = "SELECT * FROM student_grade";
			
			if($filter){
				$queryString = $queryString." where $filter";
			}

			return $this->execute_query($queryString);
		}

		function update(){
			$queryString = "UPDATE student_grade SET
			course_name='$this->course_name', 
			grade_score='$this->grade_score',
			grade='$this->grade'
			WHERE id='$this->id'";
			
			return $this->execute_query($queryString);
		}
		
		function delete(){
			$queryString = "DELETE FROM student_grade WHERE id='$this->id'";
			
			return $this->execute_query($queryString);
		}
	}
?>