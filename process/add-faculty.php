<?php
   include "../include/db_connection.php";
   include "./function.php";

   $fullname = $_POST['fname']." ".$_POST['lname'];
   $email = $_POST['email'];
   $dept =  $_POST['dept'];   

   AddFaculty($fullname, $email, $dept);

   include "./select.php";
?>

<tr>
                           
                           <th> emp id </th>
                           <th> Fullname </th>
                           <th> Email </th>
                           <th> Dept </th>
                           <th> Action </th>
                        </tr>
                        <?php
                        if(mysqli_num_rows($selFaculty) > 0){
                           while($rows = mysqli_fetch_array($selFaculty)){ ?>
                           <tr>
                              
                              <td> <?=$rows['empID']?></td>
                              <td> <?=$rows['fullname']?></td>
                              <td> <?=$rows['email']?> </td>
                              <td> <?=$rows['Dept']?> </td>
                              <td> <button data-role="Delete" data-id="<?=$rows['empID']?>"> Del </button> </td>
                           </tr>

                        <?php  }
                        } else { ?>
                           <tr>
                              <td colspan="6"> No Faculty Yet. </td>
                           </tr>
                        <?php }
                        ?>


<script> 
document.getElementById('del-modal-head').style.display = 'none';
document.querySelector('.update-box-head').style.opacity = '1';
</script>