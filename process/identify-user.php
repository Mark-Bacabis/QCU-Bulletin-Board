<?php
   session_start();
   include "../include/db_connection.php";
   include "./function.php";


   if(isset($_POST['loginBtn'])){
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      
      $selUser = mysqli_query($con, "SELECT * FROM `users_account` a 
      JOIN `users` b 
      ON a.empID = b.empID
      WHERE a.empID = $user AND a.password = '$pass';");

      if(mysqli_num_rows($selUser) == 1){
         $userStats = mysqli_fetch_assoc($selUser);
         $schoolID = $userStats['empID'];
         $activity = "Logged in";
         $date = date('Y-m-d');
         $time = date('H:i:s A');      
        

         if($userStats['position'] === 'main admin'){
            $_SESSION['empID'] = $userStats['empID'];
            $_SESSION['position'] = $userStats['position'];
            header("location: ../admin/admin.php");         
         }
         else if($userStats['position'] === 'faculty'){
            $_SESSION['empID'] = $userStats['empID'];
            $_SESSION['position'] = $userStats['position'];
            actLog($schoolID, $activity, $date, $time);
            header("location: ../admin/faculty/adminHome.php");
         }
         else if($userStats['position'] === 'admin'){
            $_SESSION['empID'] = $userStats['empID'];
            $_SESSION['position'] = $userStats['position'];
            actLog($schoolID, $activity, $date, $time);
            header("location: ../admin/admin-assistant/index.php");
         }
         else{
            header("location: ../admin/index.php");
         }
      }
   }
?>