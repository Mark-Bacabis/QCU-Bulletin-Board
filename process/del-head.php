<?php
   include "../include/db_connection.php";
  
   include "./function.php";

   $empID = $_POST['empID'];
   DelHead($empID);
  
   include "./select.php";
  

?>
<tr>
                           <th> id </th>
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
                              <td> <?=$rows['id']?> </td>
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