<?php
   include "../include/db_connection.php";
   // $con = mysqli_connect('localhost', 'root', '', 'php-login-qcu-bulletin');
   include "../function.php";
   include "../select.php";

   if(isset($_POST['btnAdd'])){
   $fullname = $_POST['fname']." ".$_POST['lname'];
   $email = $_POST['email'];
   $contact =  $_POST['cNum'];   

   addAssistant($fullname, $email, $contact);
  

   }

?>

                        <tr>
                           <th> id </th>
                           <th> emp id </th>
                           <th> Fullname </th>
                           <th> Email </th>
                           <th> Contact </th>
                           <th> Action </th>
                        </tr>

                        <tr>
                           <td> 1 </td>
                           <td> 220002 </td>
                           <td> Mark Melvin Bacabis </td>
                           <td> mark.melvin.bacabis@gmail.com </td>
                           <td> 09987654321 </td>
                           <td> Del </td>
                        </tr>
                      
<script> assistantsModal.style.display = 'none'; </script>