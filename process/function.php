<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


function addAssistant($fullname, $email, $contact) {
   include "../include/db_connection.php";

   $pass = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 16);

   $cnt = mysqli_query($con, "SELECT COUNT(id) as total FROM `users`");
   $count = mysqli_fetch_assoc($cnt);
   $empID = 220000 + ($count['total'] + 1);

   $add = "INSERT INTO `users`(`empID`, `fullname`, `email`, `contact`, `position`, `avatar`) VALUES ($empID ,'$fullname','$email','$contact','admin','default.jpg')";
   mysqli_query($con, $add);

   $addAcc = "INSERT INTO `users_account`(`empID`, `password`) VALUES ($empID,'$pass')";
   mysqli_query($con, $addAcc);

   sendEmail($empID);
}

function sendEmail($empID) {
   $con = mysqli_connect('localhost', 'root', '', 'php-login-qcu-bulletin');
   include "../include/PHPMailer.php";
   include "../include/SMTP.php";
   include "../include/Exception.php";

   
   // GET ALL THE DATA OF APPROVED APPLICANTS
   $select = mysqli_query($con, "SELECT * FROM `users` a 
   JOIN `users_account` b
   ON a.empID = b.empID
   WHERE a.empID = $empID ");
   $assistant = mysqli_fetch_assoc($select);

   // VARIABLES
   $email = $assistant['email'];
   $pword = $assistant['password'];
   $fullname = $assistant['fullname'];
   

   // FUNCTION FOR SENDING A MESSAGE TO STUDENT'S EMAIL   
   // SERVER 
   $mail = new PHPMailer();
   $mail -> isSMTP();
   $mail ->isHTML(true);
   $mail -> Host = 'smtp.gmail.com';
   $mail -> SMTPAuth = 'true';
   $mail ->Username = 'qcu.sms@gmail.com';
   $mail ->Password = '12345678@Qcu';
   $mail -> SMTPSecure = 'tls';
   $mail -> Port = 587;


   
   // RECEPIENTS
   $mail ->Subject = 'Quezon City University Bulletin Board"';
   $mail ->setFrom("qcu.sms@gmail.com", "Quezon City University Bulletin Board");
   $mail ->addAddress($email);
   $mail ->addReplyTo("qcu.sms@gmail.com");
   $mail ->Body = "<h2> Hello Mr/Mrs $fullname </h2>";
   $mail ->Body .= "<p> Below is your username and password </p>";
   $mail ->Body .= "<p> Username: $empID </p>";
   $mail ->Body .= "<p> Password: $pword </p>";
 
   $mail ->Send();

   if($mail){
     
   }
   else{
      echo "Error!";
   }

   $mail ->smtpClose();
}


?>