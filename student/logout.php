<?php 
  session_start();
  include "../process/function.php";
  $schoolID = $_SESSION['userid'];  
  $activity = "Logged out";     
  $fullname = $_SESSION['StudentName'];

  actLog($schoolID, $activity, $fullname);
  unset($_SESSION['userid']);
  header("location: ./login.php");
?>