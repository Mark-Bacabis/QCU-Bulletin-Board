<?php
  
   // SELECT ALL ADMIN ASSISTANT
   $sel = "SELECT * FROM `users` WHERE `position` = 'admin'";
   $selAssistant = mysqli_query($con, $sel);
   
?>