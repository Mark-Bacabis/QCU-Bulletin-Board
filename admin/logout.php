<?php
   session_start();
   include "../process/function.php";
   unset($_SESSION['empID']);
         
   $schoolID = $_SESSION['empID'];  
   $activity = "Logged in";  
   $date = date('Y-m-d');
   $time = date('H:i:s A');     

   actLog($schoolID, $activity, $date, $time);
   header("location: ./index.php");
?>