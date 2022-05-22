<?php
   // error_reporting(1);
   session_start();
   //include "../include/db_connection.php";
   include "./function.php";

   $empID = $_SESSION['empID'];
   

   if($_POST['changeProfile'] && $_FILES['file']){
      $profile = $_FILES['file'];
      ChangeProfile($profile, $empID);
   }

?>