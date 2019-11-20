
-- -- create student database
-- 	DROP TABLE IF EXIST 'student';
--  	CREATE TABLE student(student_id INT() PRIMARY KEY,
--  									 firstname CHAR(),
--  									 lastname CHAR()
--  									 );
--  	INSERT INTO 'student' VALUES (123452020, 'Aku', 'Sika');
--  	INSERT INTO 'student' VALUES (134922020, 'Amanda', 'Cooke');
--  	INSERT INTO 'student' VALUES (905382020, 'Richarda', 'Celst');
--  	INSERT INTO 'student' VALUES (580422020, 'Howerch', 'Little');
--  	INSERT INTO 'student' VALUES (234522020, 'Lily', 'Little');
--  	INSERT INTO 'student' VALUES (989642020, 'Mary', 'Light');
--  	INSERT INTO 'student' VALUES (348922020, 'Michael', 'Eler');
--  	INSERT INTO 'student' VALUES (428012020, 'Kirk', 'Merch');
--  	INSERT INTO 'student' VALUES (489282020, 'King', 'Frost');
--  	INSERT INTO 'student' VALUES (763892020, 'Francis', 'Kantar');


--  	-- create course database
--  	DROP TABLE IF EXIST 'course';
--  	CREATE TABLE course(course_id INT() PRIMARY KEY ,
--  									course_name VARCHAR());
--  	INSERT INTO 'course' VALUES ('101','Mathematics');
--  	INSERT INTO 'course' VALUES ('232','English');
--  	INSERT INTO 'course' VALUES ('301','Science');
--  	INSERT INTO 'course' VALUES ('204','History');
--  	INSERT INTO 'course' VALUES ('213','Geography');
--  	INSERT INTO 'course' VALUES ('123','French')


-- 	DROP TABLE'Student_Grade';
-- 	CREATE TABLE Student_Grade(student_id INT(),
-- 							   course_name VARCHAR(30) NOT NULL,
-- 	 						   grade_score INT(4) NOT NULL,
-- 	 						   grade VARCHAR(3) NOT NULL,
-- 	 						   FOREIGN KEY(student_id) REFERENCES student(student_id)
-- 	 						   ON DELETE CASCADE
-- 							   ON UPDATE RESTRICT
-- 							   ) ENGINE = InnoDB;
 						   
--  	INSERT INTO 'Student_Grade' VALUES (123452020, 'Mathematics', 93 , 'A+');
--  	INSERT INTO 'Student_Grade' VALUES (134922020, 'Mathematics', 82 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (905382020, 'Mathematics', 79 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (580422020, 'Mathematics', 74 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (234522020, 'Mathematics', 68 , 'C+');
--  	INSERT INTO 'Student_Grade' VALUES (989642020, 'Mathematics', 65 , 'C+');
--  	INSERT INTO 'Student_Grade' VALUES (348922020, 'Mathematics', 80 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (428012020, 'Mathematics', 81 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (489282020, 'Mathematics', 95 , 'A+');
--  	INSERT INTO 'Student_Grade' VALUES (763892020, 'Mathematics', 62 , 'C-');

--  	INSERT INTO 'Student_Grade' VALUES (123452020, 'English', 80 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (134922020, 'English', 81 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (905382020, 'English', 82 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (580422020, 'English', 79 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (234522020, 'English', 72 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (989642020, 'English', 74 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (348922020, 'English', 83 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (428012020, 'English', 84 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (489282020, 'English', 82 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (763892020, 'English', 74 , 'B-');

--  	INSERT INTO 'Student_Grade' VALUES (123452020, 'Science', 85 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (134922020, 'Science', 87 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (905382020, 'Science', 80 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (580422020, 'Science', 85 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (234522020, 'Science', 78 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (989642020, 'Science', 71 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (348922020, 'Science', 87 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (428012020, 'Science', 79 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (489282020, 'Science', 77 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (763892020, 'Science', 69 , 'C+');

--  	INSERT INTO 'Student_Grade' VALUES (123452020, 'History', 75 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (134922020, 'History', 73 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (905382020, 'History', 79 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (580422020, 'History', 85 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (234522020, 'History', 76 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (989642020, 'History', 67 , 'C+');
--  	INSERT INTO 'Student_Grade' VALUES (348922020, 'History', 73 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (428012020, 'History', 76 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (489282020, 'History', 77 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (763892020, 'History', 78 , 'B+');

--  	INSERT INTO 'Student_Grade' VALUES (123452020, 'Geography', 89 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (134922020, 'Geography', 85 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (905382020, 'Geography', 76 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (580422020, 'Geography', 73 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (234522020, 'Geography', 69 , 'C+');
--  	INSERT INTO 'Student_Grade' VALUES (989642020, 'Geography', 75 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (348922020, 'Geography', 80 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (428012020, 'Geography', 81 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (489282020, 'Geography', 95 , 'A+');
--  	INSERT INTO 'Student_Grade' VALUES (763892020, 'Geography', 72 , 'B-');

--  	INSERT INTO 'Student_Grade' VALUES (123452020, 'French', 80 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (134922020, 'French', 81 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (905382020, 'French', 82 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (580422020, 'French', 79 , 'B+');
--  	INSERT INTO 'Student_Grade' VALUES (234522020, 'French', 72 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (989642020, 'French', 74 , 'B-');
--  	INSERT INTO 'Student_Grade' VALUES (348922020, 'French', 83 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (428012020, 'French', 84 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (489282020, 'French', 82 , 'A-');
--  	INSERT INTO 'Student_Grade' VALUES (763892020, 'French', 74 , 'B-');


 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (134922020, 'Mathematics', 82 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (905382020, 'Mathematics', 79 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (580422020, 'Mathematics', 74 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (234522020, 'Mathematics', 68 , 'C+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (989642020, 'Mathematics', 65 , 'C+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (348922020, 'Mathematics', 80 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (428012020, 'Mathematics', 81 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (489282020, 'Mathematics', 95 , 'A+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (763892020, 'Mathematics', 62 , 'C-');

 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (123452020, 'English', 80 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (134922020, 'English', 81 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (905382020, 'English', 82 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (580422020, 'English', 79 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (234522020, 'English', 72 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (989642020, 'English', 74 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (348922020, 'English', 83 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (428012020, 'English', 84 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (489282020, 'English', 82 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (763892020, 'English', 74 , 'B-');

 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (123452020, 'Science', 85 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (134922020, 'Science', 87 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (905382020, 'Science', 80 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (580422020, 'Science', 85 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (234522020, 'Science', 78 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (989642020, 'Science', 71 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (348922020, 'Science', 87 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (428012020, 'Science', 79 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (489282020, 'Science', 77 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (763892020, 'Science', 69 , 'C+');

 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (123452020, 'History', 75 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (134922020, 'History', 73 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (905382020, 'History', 79 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (580422020, 'History', 85 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (234522020, 'History', 76 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (989642020, 'History', 67 , 'C+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (348922020, 'History', 73 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (428012020, 'History', 76 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (489282020, 'History', 77 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (763892020, 'History', 78 , 'B+');

 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (123452020, 'Geography', 89 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (134922020, 'Geography', 85 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (905382020, 'Geography', 76 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (580422020, 'Geography', 73 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (234522020, 'Geography', 69 , 'C+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (989642020, 'Geography', 75 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (348922020, 'Geography', 80 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (428012020, 'Geography', 81 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (489282020, 'Geography', 95 , 'A+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (763892020, 'Geography', 72 , 'B-');

 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (123452020, 'French', 80 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (134922020, 'French', 81 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (905382020, 'French', 82 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (580422020, 'French', 79 , 'B+');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (234522020, 'French', 72 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (989642020, 'French', 74 , 'B-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (348922020, 'French', 83 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (428012020, 'French', 84 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (489282020, 'French', 82 , 'A-');
 	INSERT INTO student_grade(student_id,course_name,grade_score,grade) VALUES (763892020, 'French', 74 , 'B-');