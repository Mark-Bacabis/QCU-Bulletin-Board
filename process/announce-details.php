<?php
   include "../include/db_connection.php";

   $aid = $_POST['id'];
   $sel = mysqli_query($con, "SELECT * FROM `faculty_announcment` WHERE `id` = $aid ");
   $announce = mysqli_fetch_assoc($sel);
?>               
                         
<div class="announcement-title">    
   <h1> ID: <span id="id"> <?=$announce['id']?> </span></h1>                              
   <h1> Department: <?=$announce['course']?> </h1>                              
</div>                             
<div class="announcement-desc">                                
   <h3> Description </h3>                                      
   <p> <?=$announce['description']?> </p>                               
</div>
            
