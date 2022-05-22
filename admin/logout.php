<?php
   session_start();
   include "../process/function.php";
   $schoolID = $_SESSION['empID'];  
   $activity = "Logged out";  
   $fullname = $_SESSION['fullname'];

   actLog($schoolID, $activity, $fullname);

   unset($_SESSION['empID']);
   header("location: ./index.php");
?>