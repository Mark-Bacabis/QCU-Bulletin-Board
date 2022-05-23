<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


function addAssistant($fullname, $email, $contact) {
   include "../include/db_connection.php";

   $pass = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 16);

   $cnt = mysqli_query($con, "SELECT MAX(id) as total FROM `users`");
   $count = mysqli_fetch_assoc($cnt);
   $empID = 220000 + ($count['total'] + 1);

   $add = "INSERT INTO `users`(`empID`, `fullname`, `email`, `contact`, `position`, `avatar`) VALUES ($empID ,'$fullname','$email','$contact','admin','default.jpg')";
   mysqli_query($con, $add);

   $addAcc = "INSERT INTO `users_account`(`empID`, `password`) VALUES ($empID,'$pass')";
   mysqli_query($con, $addAcc);

   sendEmail($empID);
}

function AddFaculty($fullname, $email, $dept){
   include "../include/db_connection.php";
   $pass = substr(str_shuffle('1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'), 0, 16);

   $cnt = mysqli_query($con, "SELECT MAX(id) as total FROM `users`");
   $count = mysqli_fetch_assoc($cnt);
   $empID = 220000 + ($count['total'] + 1);

   $add = "INSERT INTO `users`(`empID`, `fullname`, `email`, `contact`, `position`, `avatar`) VALUES ($empID ,'$fullname','$email','','faculty','default.jpg')";
   mysqli_query($con, $add);

   $addAcc = "INSERT INTO `users_account`(`empID`, `password`) VALUES ($empID,'$pass')";
   mysqli_query($con, $addAcc);

   $addDept = "INSERT INTO `faculty_dept`(`empID`, `Dept`) VALUES ('$empID','$dept')";
   mysqli_query($con, $addDept);

   sendEmail($empID);
}


function DelAssistant($empID){
   include "../include/db_connection.php";
   
   $del = "DELETE FROM `users` WHERE `empID` = $empID AND `position` = 'admin'";
   $delAcc = "DELETE FROM `users_account` WHERE `empID` = $empID";

   mysqli_query($con, $del);
   mysqli_query($con, $delAcc);
}


function DelHead($empID){
   include "../include/db_connection.php";
   
   $del = "DELETE FROM `users` WHERE `empID` = $empID AND `position` = 'faculty'";
   $delAcc = "DELETE FROM `users_account` WHERE `empID` = $empID";
   $delDept = "DELETE FROM `faculty_dept` WHERE `empID` = $empID";

   mysqli_query($con, $del);
   mysqli_query($con, $delAcc);
   mysqli_query($con, $delDept);
}


function actLog($schoolID, $activity, $fullname){
   include "../include/db_connection.php";
   $date = date('Y-m-d');
   $time = date('H:i:s A');      

   $ins = "INSERT INTO `activity_log`(`schoolID`, `fullname`, `activity`, `date`, `time`) VALUES ('$schoolID','$fullname','$activity','$date','$time')";
   mysqli_query($con, $ins);

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


function approveAnnounce($id, $empID){
   include "../include/db_connection.php";

   $upd = "UPDATE `faculty_announcment` SET `status`='Approved' , `action_by`= $empID WHERE `id` = $id";
   mysqli_query($con, $upd);
   
}


function declineAnnounce($id, $empID){
   include "../include/db_connection.php";

   $upd = "UPDATE `faculty_announcment` SET `status`='Declined', `action_by`= $empID WHERE `id` = $id";
   mysqli_query($con, $upd);
}


function ChangeProfile($profile, $empID){
   include "../include/db_connection.php";

      $img_name = $profile['name'];
      $img_size = $profile['size'];
      $img_tmp_name = $profile['tmp_name'];
      $img_error = $profile['error'];

      //echo $empID."<br>".$img_name;
      
      if($img_error === 0){ // check if error is equal to means there's selected file
         $extension = ['png', 'jpg', 'jpeg', 'JPG', 'PNG', 'JPEG'];
         $img_ex = pathinfo($img_name, PATHINFO_EXTENSION); // fetch the extension of selected file
         $img_ex_lc = strtolower($img_ex); // transform the extension to lowercase character
         
         if(in_array($img_ex_lc, $extension)) { // check if the selected file contains 'png', 'jpeg', or 'jpg' extension
            $new_img_name = uniqid('fa', true).'.'.$img_ex_lc; // changing the name of selected file
            $img_upload_path = 'C:\xampp\htdocs\qcu_bulletin\admin\admin-profile/'.$new_img_name;
            move_uploaded_file($img_tmp_name, $img_upload_path);

            $upd = mysqli_query($con, "UPDATE `users` SET `avatar` = '$new_img_name' WHERE `empID` = $empID");

            if($upd){
               $activity = "Changed Profile";
               $date = date('Y-m-d');
               $time = date('H:i:s A');  
               actLog($empID, $activity, $date, $time);
               echo "Success";
            }

            
         } else{
            $mess = "This is not an image";
            echo $mess;
            //header("location:../Student/Settings.php?$mess");
         }
      }
      else{
         $mess = "No File Selected";
         echo $mess;
         //header("location:../Student/Settings.php?$mess");
      }
   }

?>