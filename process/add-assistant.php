<?php
   include "../include/db_connection.php";
   // $con = mysqli_connect('localhost', 'root', '', 'php-login-qcu-bulletin');
   include "./function.php";

   $fullname = $_POST['fname']." ".$_POST['lname'];
   $email = $_POST['email'];
   $contact =  $_POST['cNum'];   

   addAssistant($fullname, $email, $contact);

   include "./select.php";
   

?>
 <tr>
                          
                           <th> emp id </th>
                           <th> Fullname </th>
                           <th> Email </th>
                           <th> Contact </th>
                           <th> Action </th>
                        </tr>
 <?php
                        if(mysqli_num_rows($selAssistant) > 0){
                           while($rows = mysqli_fetch_array($selAssistant)){ ?>
                           <tr>
                              
                              <td> <?=$rows['empID']?></td>
                              <td> <?=$rows['fullname']?></td>
                              <td> <?=$rows['email']?> </td>
                              <td> <?=$rows['contact']?> </td>
                              <td> <button data-role="Delete" data-id="<?=$rows['empID']?>"> Del </button> </td>
                           </tr>

                        <?php  }
                        } else { ?>
                           <tr>
                              <td colspan="6"> No Applicants Yet. </td>
                           </tr>
                        <?php }
                        ?>
                      
<script> 
assistantsModal.style.display = 'none'; 
document.querySelector('.update-box').style.opacity = '1';
</script>