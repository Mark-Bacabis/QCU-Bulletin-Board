<?php
   session_start();
  
   unset($_SESSION['empID']);
   header("location: ./index.php");
?>