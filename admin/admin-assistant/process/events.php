<?php
   session_start();

   $empID = $_SESSION['empID'];
   include('../../../include/db_connection.php');
   
   //CLICK ANNOUNCEMENT BUTTON
   if(isset($_POST['announceBtn'])){ 

      // SELECT ANNOUNCMENT 
      $selAnnounce = mysqli_query($con, "SELECT * FROM `tbl_announcements` WHERE `type` = 'Announcement' ORDER BY `tbl_announcements`.`id` DESC"); ?>

      <div class="events-content-box">
         <?php if(mysqli_num_rows($selAnnounce) > 0) {
               while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
            <div class="events-data">
               <h1> <?=$announce['title']?> </h1>
               <p> <?=$announce['announcement']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
            </div>
            <?php } 
         } ?>
         </div> <?php
   }

   //CLICK NEWS BUTTON
   if (isset($_POST['newsBtn'])){
      // SELECT NEWS
      $selAnnounce = mysqli_query($con, "SELECT * FROM `tbl_announcements` WHERE `type` = 'News' ORDER BY `tbl_announcements`.`id` DESC"); ?>

       <div class="events-content-box">
          <?php if(mysqli_num_rows($selAnnounce) > 0) {
                while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
             <div class="events-data">
                <h1> <?=$announce['title']?> </h1>
                <p> <?=$announce['announcement']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
             </div>
             <?php } 
          } ?>
      </div> <?php
   }

   //CLICK EVENTS BUTTON
   if (isset($_POST['eventsBtn'])){
      // SELECT EVENTS
      $selAnnounce = mysqli_query($con, "SELECT * FROM `tbl_announcements` WHERE `type` = 'Events' ORDER BY `tbl_announcements`.`id` DESC"); ?>

       <div class="events-content-box">
          <?php if(mysqli_num_rows($selAnnounce) > 0) {
                while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
             <div class="events-data">
                <h1> <?=$announce['title']?> </h1>
                <p> <?=$announce['announcement']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
             </div>
             <?php } 
          } ?>
      </div> <?php
   }

   // CLICKED POST BUTTON
   if(isset($_POST['btnPost'])  && $_POST['title'] !== '' && $_POST['date'] !== '' &&  $_POST['desc'] !== '' && $_POST['link']  !== '' ) {
      $title = $_POST['title'];
      $type = $_POST['type'];
      $date = $_POST['date'];
      $desc = $_POST['desc'];
      $link = $_POST['link'];

         
         $img_name = $_FILES['image']['name'];
         $img_size = $_FILES['image']['size'];
         $img_tmp_name = $_FILES['image']['tmp_name'];
         $img_size = $_FILES['image']['size'];
         $img_error = $_FILES['image']['error'];

            if($img_error === 0){
               $extension = ['png', 'jpg', 'jpeg'];
               $img_ex = pathinfo($img_name, PATHINFO_EXTENSION); // fetch the extension of selected file
               $img_ex_lc = strtolower($img_ex); // transform the extension to lowercase character
   
               if(in_array($img_ex_lc, $extension)) { // check if the selected file contains 'png', 'jpeg', or 'jpg' extension      
                  $new_img_name = uniqid('img-', true).'.'.$img_ex_lc; // changing the name of selected file
                  $img_upload_path = 'C:\xampp\htdocs\qcu_bulletin\img\announce images/'.$new_img_name;
                  move_uploaded_file($img_tmp_name, $img_upload_path);

                  // DO QUERY HERE...
                  $ins = 'INSERT INTO `tbl_announcements`(`userID`, `title`, `announcement`, `type`, `link`, `image`) VALUES ("'.$empID.'","'.$title.'","'.$desc.'","'.$type.'","'.$link.'", "'.$new_img_name.'" )';
         
                  $insert = mysqli_query($con, $ins); 

                  if(!$insert){
                     error_log($con);
                  }

                  // SELECT ANNOUNCMENT 
                  $selAnnounce = mysqli_query($con, "SELECT * FROM `tbl_announcements` WHERE `type` = '$type' ORDER BY `tbl_announcements`.`id` DESC"); ?> 
                  
               <div class="events-content-box">
            <?php if(mysqli_num_rows($selAnnounce) > 0) {
                     while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
                  <div class="events-data">
                     <h1> <?=$announce['title']?> </h1>
                     <p> <?=$announce['announcement']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
                  </div>
                  <?php } 
               } ?>
               </div>
         <?php  }
            }
      }
?>