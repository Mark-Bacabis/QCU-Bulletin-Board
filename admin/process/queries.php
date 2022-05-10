<?php
      include('../include/db.php');

      // SELECT ALL EXAM DATES
         $examQuery = mysqli_query($conn, "SELECT * FROM `exam_sched` ORDER BY Date ASC ");

      // IDENTIFY WHO ARE REGISTERED OR NOT
         $regStud = mysqli_query($conn, "SELECT DISTINCT (SELECT COUNT(*) FROM default_account WHERE Status = 1) as Registered, (SELECT COUNT(*) FROM default_account WHERE Status = 0) as notRegistered from default_account");
         $reg = mysqli_fetch_assoc($regStud);
      
      // COUNT ANNOUNCEMENT
         $countAnnouncement = mysqli_query($conn, "SELECT COUNT(*) as total FROM `announcement` WHERE `type` = 'Announcement' ");
         $announcementTotal = mysqli_fetch_assoc($countAnnouncement);
      
      // COUNT EVENTS
         $countEvents = mysqli_query($conn, "SELECT COUNT(*) as total FROM `announcement` WHERE `type` = 'Events' ");
         $eventsTotal = mysqli_fetch_assoc($countEvents);
      
      // COUNT NEWS
         $countNews = mysqli_query($conn, "SELECT COUNT(*) as total FROM `announcement` WHERE `type` = 'News' ");
         $newsTotal = mysqli_fetch_assoc($countNews);
         
      
      //ACTIVITY LOG
         $studentAct = mysqli_query($conn, "SELECT * FROM `stud_activity` as act 
         JOIN student_account as acc
         ON act.studentID = acc.Student_ID 
         ORDER BY act.id DESC LIMIT 10");
      
      // COUNT ALL STUDENTS 
         $cntStudQry = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM student as stud 
         JOIN student_account as acc 
         ON stud.Student_ID = acc.Student_ID
         JOIN student_status as stats
         ON acc.Student_ID = stats.Student_ID LIMIT 10");
         $stud = mysqli_fetch_assoc($cntStudQry);
      
      // SELECT ALL STUDENTS
         $studentsQry = mysqli_query($conn, "SELECT * FROM student as stud 
         JOIN student_account as acc 
         ON stud.Student_ID = acc.Student_ID
         JOIN student_status as stats
         ON acc.Student_ID = stats.Student_ID LIMIT 10");
        
        
      
      // COUNT ALL STUDENT
         $countStud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student` ");
         $allStudents = mysqli_fetch_assoc($countStud);
      
      
      // SELECT ALL COURSE 
         $courseSel = mysqli_query($conn, "SELECT * FROM `courses`"); // DOUGHNUT CHART
         $selCourseQry = mysqli_query($conn, "SELECT * FROM `courses`"); // COURSE CONTAINER
      
      //COUNT STUDENT PER COURSE
         // BSIT
         $countITstud = mysqli_query($conn, "SELECT COUNT(*) as totalStud, stats.Course FROM `student_status` as stats
         JOIN `student_account` as acc
         ON stats.Student_ID = acc.Student_ID
         WHERE Course = 'BSIT' ");
      
         $bsitStudents = mysqli_fetch_assoc($countITstud);
      
         //BSIE
         $countIEstud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student_status` as stats
         JOIN `student_account` as acc
         ON stats.Student_ID = acc.Student_ID
         WHERE Course = 'BSIE' ");
      
         $bsieStudents = mysqli_fetch_assoc($countIEstud);
      
         // BSENT
         $countENTstud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student_status` as stats
         JOIN `student_account` as acc
         ON stats.Student_ID = acc.Student_ID
         WHERE Course = 'BSENT' ");
         $bsentStudents = mysqli_fetch_assoc($countENTstud);
         
         //BSECE
         $countECEstud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student_status` as stats
         JOIN `student_account` as acc
         ON stats.Student_ID = acc.Student_ID
         WHERE Course = 'BSECE' ");
         $bseceStudents = mysqli_fetch_assoc($countECEstud);
      
         // BSA
         $countAstud = mysqli_query($conn, "SELECT COUNT(*) as totalStud FROM `student_status` as stats
         JOIN `student_account` as acc
         ON stats.Student_ID = acc.Student_ID
         WHERE Course = 'BSA' ");
         $bsaStudents = mysqli_fetch_assoc($countAstud);
      //COUNT STUDENT PER COURSE
      
      // VARIABLES
         // count students per course
         $bsitCount = $bsitStudents['totalStud'];
         $bsitCode =  $bsitStudents['Course'];
      
         $bsieCount = $bsieStudents['totalStud'];
         $bsentCount = $bsentStudents['totalStud'];
         $bseceCount = $bseceStudents['totalStud'];
         $bsaCount = $bsaStudents['totalStud'];
      
         $studentCount = $allStudents['totalStud']; //Count all students
         $studs = $stud['totalStud']; //Count Students --- STUDENT CONTAINER
      
         $registered = $reg['Registered'];
         $notRegistered = $reg['notRegistered'];
      // VARIABLES
      
      
?>