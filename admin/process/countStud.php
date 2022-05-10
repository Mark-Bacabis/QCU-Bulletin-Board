<?php
   include('../../include/db.php');
   if(isset($_POST['yl']) || isset($_POST['$course'])){
      
   $yl = $_POST['yl'];
   $course = $_POST['course'];

   if($yl == 'All' && $course == 'All'){
      // COUNT ALL STUDENTS 
      $cntStudQry = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM student as stud 
      JOIN student_account as acc 
      ON stud.Student_ID = acc.Student_ID
      JOIN student_status as stats
      ON acc.Student_ID = stats.Student_ID ");

      // ALL STUDENT
      $countStud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student_status` as stats
      JOIN `student_account` as acc
      ON stats.Student_ID = acc.Student_ID");
   }

   else if($course == 'All' && $yl != 'All'){
      // COUNT ALL STUDENTS 
      $cntStudQry = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM student as stud 
      JOIN student_account as acc 
      ON stud.Student_ID = acc.Student_ID
      JOIN student_status as stats
      ON acc.Student_ID = stats.Student_ID 
      WHERE stats.YL = '$yl' LIMIT 10");

      // ALL STUDENT
      $countStud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student_status` as stats
      JOIN `student_account` as acc
      ON stats.Student_ID = acc.Student_ID
      WHERE stats.YL = '$yl' ");
   }
   
   else if($yl == 'All' && $course != 'All'){
      // COUNT ALL STUDENTS 
      $cntStudQry = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM student as stud 
      JOIN student_account as acc 
      ON stud.Student_ID = acc.Student_ID
      JOIN student_status as stats
      ON acc.Student_ID = stats.Student_ID 
      WHERE stats.Course = '$course' LIMIT 10");

      // ALL STUDENT
      $countStud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student_status` as stats
      JOIN `student_account` as acc
      ON stats.Student_ID = acc.Student_ID
      WHERE stats.Course = '$course'");
   }

   else{
      // COUNT ALL STUDENTS 
      $cntStudQry = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM student as stud 
      JOIN student_account as acc 
      ON stud.Student_ID = acc.Student_ID
      JOIN student_status as stats
      ON acc.Student_ID = stats.Student_ID 
      WHERE stats.Course = '$course' AND stats.YL = '$yl' LIMIT 10 ");

      // ALL STUDENT
      $countStud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student_status` as stats
      JOIN `student_account` as acc
      ON stats.Student_ID = acc.Student_ID
      WHERE stats.Course = '$course' AND stats.YL = '$yl' ");
   }

   $stud = mysqli_fetch_assoc($cntStudQry);
   $allStudents = mysqli_fetch_assoc($countStud);

   $studentCount = $allStudents['totalStud'];
   $studs = $stud['totalStud'];

   echo "$studs Student/s out of $studentCount";

   }

   if(isset($_POST['search'])){
      $search = $_POST['search'];

      // SELECT ALL STUDENTS
      $studentsQry = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM student as stud 
      JOIN student_account as acc 
      ON stud.Student_ID = acc.Student_ID
      JOIN student_status as stats
      ON acc.Student_ID = stats.Student_ID 
      WHERE acc.Student_ID LIKE '%$search%'
      OR acc.Email LIKE '%$search%' 
      OR acc.First_Name LIKE '%$search%' 
      OR acc.Last_Name LIKE '%$search%' 
      OR stats.Course LIKE '%$search%'
      OR stats.Section LIKE '%$search%' 
      OR stats.Campus LIKE '%$search%' 
      OR stats.Status LIKE '%$search%' 
      LIMIT 10");

      $studentSearch = mysqli_fetch_assoc($studentsQry);
      $searchCount = $studentSearch['totalStud'];

      echo "$searchCount Student/s out of $searchCount";
   }

?>