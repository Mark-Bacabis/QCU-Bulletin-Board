<?php 
  session_start();



  /* Set status to invalid */
  $_SESSION['status'] = 'invalid';

  /* Unset user data */
  unset($_SESSION['username']);

  /* Redirect to login page */
  header("location: ./login.php");
?>