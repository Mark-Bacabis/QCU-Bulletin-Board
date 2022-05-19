<?php
   session_start();
   $fid = $_SESSION['empID'];
   include "../include/db_connection.php";

   $sel = mysqli_query($con, "SELECT * FROM `faculty_dept` WHERE `empID` = '$fid'");
   $course = mysqli_fetch_assoc($sel);
   $dept = $course['Dept'];
   $date = date("Y-m-d");


   if(isset($_POST['announceBtn'])){
      $announcement = $_POST['announcement'];

      $ins = "INSERT INTO `faculty_announcment`(`empID`, `description`, `course`, `status`, `date`) VALUES ('$fid','$announcement','$dept','Pending', '$date')";

      $insert = mysqli_query($con, $ins);

      if($insert){
         echo '<script> alert("Wait for approval") </script>';
         header("location:../admin/faculty/adminHome.php");
      }

   }
?>