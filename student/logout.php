<?php 
  session_start();
  include "../process/function.php";
  $schoolID = $_SESSION['userid'];  
  $activity = "Logged out";  
  $date = date('Y-m-d');
  $time = date('H:i:s A');     

  actLog($schoolID, $activity, $date, $time);
  unset($_SESSION['userid']);
  header("location: ./login.php");
?>