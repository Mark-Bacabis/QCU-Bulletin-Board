<?php
   session_start();
   include "../include/database.php";


   if(isset($_POST['loginBtn'])){
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      
      $selUser = mysqli_query($conn, "SELECT * FROM `users_account` a 
      JOIN `users` b 
      ON a.empID = b.empID
      WHERE a.empID = $user AND a.password = '$pass';");

      if(mysqli_num_rows($selUser) == 1){
         $userStats = mysqli_fetch_assoc($selUser);
        

         if($userStats['position'] === 'main admin'){
            $_SESSION['empID'] = $userStats['empID'];
            header("location: ../admin/admin.php");         
         }
         else if($userStats['position'] === 'faculty'){
            $_SESSION['empID'] = $userStats['empID'];
            header("location: ../admin/faculty/index.php");
         }
         else if($userStats['position'] === 'admin assistant'){
            $_SESSION['empID'] = $userStats['empID'];
            header("location: ../admin/admin-assistant/index.php");
         }
         else{
            header("location: ../admin/index.php");
         }
      }
   }
?>