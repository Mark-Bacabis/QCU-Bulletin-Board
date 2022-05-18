<?php
   // COUNT ADMIN
   $cntAdmin = mysqli_query($con, "SELECT COUNT(*) as total FROM `users` WHERE `position` = 'admin'");
   $adminCnt = mysqli_fetch_assoc($cntAdmin);

   // COUNT FACULTY
   $cntFaculty = mysqli_query($con, "SELECT COUNT(*) as total FROM `faculty_dept` a
   JOIN `users` b
   ON a.empID = b.empID
   WHERE b.position = 'faculty'");
   $facultyCnt = mysqli_fetch_assoc($cntFaculty);

   $cntStudents = mysqli_query($con, "SELECT COUNT(*) as total FROM `stud_accounts`");
   $studCnt = mysqli_fetch_assoc($cntStudents);
?>