<?php
   $con = mysqli_connect('localhost', 'root', '', 'php-login-qcu-bulletin');

   if(!$con){
      echo error_log($con);
   }
?>