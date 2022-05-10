<?php
   include('../../include/db.php');
   // SELECT ALL EXAM DATES
     
   if(isset($_POST['btnAdd'])) {
      $term = $_POST['term'];
      $selectedDate = $_POST['date'];

      if($term === '' || $selectedDate === ''){

         echo "Select date or term first.";
      }
      else {
         $examQuery = mysqli_query($conn, "SELECT * FROM `exam_sched` ORDER BY Date ASC ");
         
         $start = strtotime($selectedDate);
         $start = date('w', $start)==date('w') ? $start+7*86400 : $start;
      
         $last = strtotime(date("Y-m-d", $start )." +5 days");
      
         $examStart = date("Y-m-d", $start);
         $examEnd = date("Y-m-d", $last);
         $day_count = 0;
         $day = date('l', strtotime($selectedDate));
      
         // INSERT INTO EXAM SCHEDULE
         $ins = mysqli_query($conn, "INSERT INTO `exam_sched`(`Title`, `Date`, `Term`) VALUES ('$day','$selectedDate','$term')");
         while(0 == 0){
               
            $day_count++;
            $selectedDate = date('Y-m-d', strtotime($selectedDate . '+1 days'));
            $day = date('l', strtotime($selectedDate));
            // INSERT INTO EXAM SCHEDULE
            $ins = mysqli_query($conn, "INSERT INTO `exam_sched`(`Title`, `Date`, `Term`) VALUES ('$day','$selectedDate','$term')");
               if($selectedDate == $examEnd) {
                  break;
               }
            }

         if(mysqli_num_rows($examQuery) > 0) { ?>
            <table border="0">
               <tr>
                  <th> Date </th>
                  <th> Day </th>
                  <th> Term </th>
               </tr>
         <?php  while($row = mysqli_fetch_assoc($examQuery)) { ?>
               <tr>
                  <td> <?=$row['Date']?> </td>
                  <td> <?=$row['Title']?> </td>
                  <td>  <?=$row['Term']?> </td>
               </tr>
         <?php } ?>
            </table>
         <?php } else { ?>
            <div class="message-exam-error">
               <h2> No exam schedule here </h2>
               <p> Add some schedule. </p>
            </div>
         <?php } 
      }
   }
?>