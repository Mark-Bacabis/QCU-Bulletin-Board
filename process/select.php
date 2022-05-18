<?php

   // SELECT ALL ADMIN ASSISTANT
   $sel = "SELECT * FROM `users` WHERE `position` = 'admin'";
   $selAssistant = mysqli_query($con, $sel);

   // SELECT ALL HEAD DEPT
   $selDept = "SELECT * FROM `faculty_dept` a
   JOIN `users` b
   ON a.empID = b.empID
   WHERE b.position = 'faculty'";
   $selFaculty = mysqli_query($con, $selDept);

   // SELECT ALL STUDENTS
   $selStud = "SELECT * FROM `stud_accounts`";
   $selectedStud = mysqli_query($con, $selStud);



   // SELECT ACTIVITY LOGS
   $selLog = "SELECT a.id, a.schoolID, a.activity, a.date, a.time, b.fullname FROM `activity_log` a 
   JOIN `users` b
   ON b.empID = a.schoolID
   ORDER BY a.id DESC";
   $selLogQ = mysqli_query($con, $selLog);

   //SELECT * ANNOUNCMENTS
   $selAnnounce = "SELECT * FROM `tbl_announcements`";
   $selAnnounceQ = mysqli_query($con, $selAnnounce);
   
?>