<?php
   include('../../include/db.php');
   $search = $_POST['search'];

   // SELECT ALL STUDENTS
   $studentsQry = mysqli_query($conn, "SELECT * FROM student as stud 
   JOIN student_account as acc 
   ON stud.Student_ID = acc.Student_ID
   JOIN student_status as stats
   ON acc.Student_ID = stats.Student_ID 
   WHERE acc.Student_ID LIKE '%$search%'
   OR acc.Email LIKE '%$search%' 
   OR acc.First_Name LIKE '%$search%' 
   OR acc.Last_Name LIKE '%$search%' 
   OR stats.Course LIKE '%$search%'
   OR stats.Section LIKE '%$search%' 
   OR stats.Campus LIKE '%$search%' 
   OR stats.Status LIKE '%$search%' 
   LIMIT 10"); 
?>

<table border="0">
                        <tr>
                           <th> ID </th>
                           <th> Fullname </th>
                           <th> Email </th>
                           <th> Course </th>
                        </tr>
                        <?php
                           if(mysqli_num_rows($studentsQry) > 0){
                              while($row = mysqli_fetch_assoc($studentsQry)){ ?>
                              <tr>
                                 <td> <?=$row['Student_ID']?> </td>
                                 <td> <?=$row['Given_Name']?> <?=$row['Middle_Name']?> <?=$row['Surname']?> <?=$row['Suffix']?>
                                 </td>
                                 <td> <?=$row['Email']?> </td>
                                 <td> <?=$row['Course']?> </td>
                              </tr>
                           <?php }
                           } else{ ?>
                            <tr>
                               <td colspan="4"> No Students </td>
                            </tr>
                        <?php } ?>
                     </table>