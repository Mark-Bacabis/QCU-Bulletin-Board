<?php
   include "../include/db_connection.php";

   $aid = $_POST['id'];
   $sel = mysqli_query($con, "SELECT * FROM `faculty_announcment` WHERE `id` = $aid ");
?>                                
<div class="announcement-title">                                  
   <h1> Department:  </h1>                              
</div>                             
<div class="announcement-desc">                                
   <h3> Description </h3>                                      
   <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta provident quam nobis. Ad repellat tenetur inventore excepturi nulla? Eum quas itaque sit officia incidunt ratione voluptatibus est blanditiis mollitia aperiam? Explicabo architecto nam sapiente impedit voluptate enim rem. Velit, doloribus. </p>                               
</div>