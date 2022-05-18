<?php
   include "../include/db_connection.php";
  
   include "./function.php";

   $empID = $_POST['empID'];
   DelAssistant($empID);
  
   include "./select.php";
  

?>
 <tr>
                           <th> id </th>
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
                              <td> <?=$rows['id']?> </td>
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
document.getElementById('del-modal').style.display = 'none';
document.querySelector('.update-box').style.opacity = '1';
</script>