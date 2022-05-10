<?php
   session_start();
   include('../../include/db.php');

   if(isset($_POST['loginBtn'])){
      $uname = $_POST['user'];
      $pword = $_POST['pass'];

      $selAdmin = mysqli_query($conn, "SELECT * FROM `admin_account` WHERE `username` = '$uname' AND `password` = '$pword' ");

      if(mysqli_num_rows($selAdmin) == 1){
         $admin = mysqli_fetch_assoc($selAdmin);
         if($uname == $admin['username'] && $pword == $admin['password']){
            $_SESSION['aid'] = $admin['id'];
            header('location: ../admin.php');
         }
      }
      else{
         $_SESSION['errMess'] = "Wrong username / password";
         header('location: ../index.php');
      }
   }
?>