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
   $selStud = "SELECT * FROM `stud_accounts` a 
   JOIN `student` b
   ON a.studentId = b.Student_ID
   JOIN `student_status` c
   ON a.studentId = c.Student_ID";
   $selectedStud = mysqli_query($con, $selStud);



   // SELECT ACTIVITY LOGS
   $selLog = "SELECT a.id, a.schoolID, a.activity, a.date, a.time, b.fullname FROM `activity_log` a 
   JOIN `users` b
   ON b.empID = a.schoolID
   ORDER BY a.id DESC";
   $selLogQ = mysqli_query($con, $selLog);

   

   //SELECT * ANNOUNCMENTS
   $selAnnounce = "SELECT * FROM `tbl_announcements` WHERE `type` = 'Announcement'";
   $selAnnounceQ = mysqli_query($con, $selAnnounce);

   // SELECT * EVENTS
   $selEvents = "SELECT * FROM `tbl_announcements` WHERE `type` = 'Events'";
   $selEventsQ = mysqli_query($con, $selEvents);

   // SELECT ALL ANNOUNCEMENT FROM FACULTIES
   $selFac = mysqli_query($con, "SELECT u.fullname, fa.* FROM `faculty_announcment` fa
   JOIN `users` u
   ON fa.empID = u.empID
   WHERE fa.status = 'Pending'");

 

   
?>