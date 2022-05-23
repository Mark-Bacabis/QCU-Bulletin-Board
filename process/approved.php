<?php
   session_start();
   include "../include/db_connection.php";
   include "../process/function.php";
   $empID = $_SESSION['empID'];
   $id = $_POST['id'];

   if(isset($_POST['addBtn'])){
      approveAnnounce($id, $empID);
   }
  
   if(isset($_POST['cancelBtn'])){
      declineAnnounce($id, $empID);
   }
  

   include "../process/select.php";

?>

<tr>
                           <th> id </th>
                           <th> Fullname </th>
                           <th> Dept </th>
                           <th> Date </th>
                           <th> Status </th>
                           <th> Action </th>
                        </tr>
                        <?php
                        if(mysqli_num_rows($selFac) > 0){
                           while($rows = mysqli_fetch_assoc($selFac)){ ?>
                           <tr>
                              
                              <td> <?=$rows['empID']?> </td>
                              <td> <?=$rows['fullname']?> </td>
                              <td> <?=$rows['course']?> </td>
                              <td> <?=$rows['date']?></td>
                              <td> <?=$rows['status']?></td>
                              <td> <button data-role="Details" data-id="<?=$rows['id']?>"> Details </button> </td>
                           </tr>
                        <?php  }
                           }
                        ?>
                       
                      