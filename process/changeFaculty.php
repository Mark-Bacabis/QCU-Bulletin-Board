<?php
   // error_reporting(1);
   session_start();
   include "../include/db_connection.php";

   $empID = $_SESSION['empID'];
   
   if (isset($_POST['changePass'])) {

      $oldpass = $_POST['oldpass'];
      $nPass = $_POST['nPass'];
      $cPass = $_POST['cPass'];

      $oldPQ = mysqli_query($con, "SELECT * FROM `users_account` ua
      JOIN `users` u 
      ON ua.empID = u.empID
      WHERE ua.password = '$oldpass' AND ua.empID = $empID;");


      if(mysqli_num_rows($oldPQ) === 1){
         header("location: ../admin/faculty/adminProfile.php?"); 
         echo '<script> alert("Old password is correct!") </script>';
      } else{
         echo '<script> alert("Old password incorrect!") </script>';
         header("location: ../admin/faculty/adminProfile.php?"); 
     }
   }


   if($_POST['changeProfile']){
      echo "Click change profile button";
   }

?>