<?php
   include('../../include/db.php');
   
   //CLICK ANNOUNCEMENT BUTTON
   if(isset($_POST['announceBtn'])){ 

      // SELECT ANNOUNCMENT 
      $selAnnounce = mysqli_query($conn, "SELECT * FROM `announcement` WHERE `type` = 'Announcement' ORDER BY `announcement`.`id` DESC"); ?>

      <div class="events-content-box">
         <?php if(mysqli_num_rows($selAnnounce) > 0) {
               while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
            <div class="events-data">
               <h1> <?=$announce['title']?> </h1>
               <p> <?=$announce['description']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
            </div>
            <?php } 
         } ?>
         </div> <?php
   }

   //CLICK NEWS BUTTON
   if (isset($_POST['newsBtn'])){
      // SELECT NEWS
      $selAnnounce = mysqli_query($conn, "SELECT * FROM `announcement` WHERE `type` = 'News' ORDER BY `announcement`.`id` DESC"); ?>

       <div class="events-content-box">
          <?php if(mysqli_num_rows($selAnnounce) > 0) {
                while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
             <div class="events-data">
                <h1> <?=$announce['title']?> </h1>
                <p> <?=$announce['description']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
             </div>
             <?php } 
          } ?>
      </div> <?php
   }

   //CLICK EVENTS BUTTON
   if (isset($_POST['eventsBtn'])){
      // SELECT EVENTS
      $selAnnounce = mysqli_query($conn, "SELECT * FROM `announcement` WHERE `type` = 'Events' ORDER BY `announcement`.`id` DESC"); ?>

       <div class="events-content-box">
          <?php if(mysqli_num_rows($selAnnounce) > 0) {
                while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
             <div class="events-data">
                <h1> <?=$announce['title']?> </h1>
                <p> <?=$announce['description']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
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

      if($type == 'Announcement'){
         $ins = 'INSERT INTO `announcement` (`title`, `description`, `type`, `dateAnnounce`, `link`) 
         VALUES ("'.$title.'", "'.$desc.'", "'.$type.'", "'.$date.'", "'.$link.'")';

         $insert = mysqli_query($conn, $ins); 
         // SELECT ANNOUNCMENT 
         $selAnnounce = mysqli_query($conn, "SELECT * FROM `announcement` WHERE `type` = 'Announcement' ORDER BY `announcement`.`id` DESC");
         ?>

         <div class="events-content-box">
         <?php if(mysqli_num_rows($selAnnounce) > 0) {
               while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
            <div class="events-data">
               <h1> <?=$announce['title']?> </h1>
               <p> <?=$announce['description']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
            </div>
            <?php } 
         } ?>
         </div>
<?php } 

      else {
         $target_directory = "C:/xampp/htdocs/SP/Profile/";
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
                  $img_upload_path = 'c:xampp/htdocs/SP/img/event/'.$new_img_name;
                  move_uploaded_file($img_tmp_name, $img_upload_path);

                  // DO QUERY HERE...
                  $ins = 'INSERT INTO `announcement` (`title`, `description`, `type`, `dateAnnounce`, `link`, `img`) 
                  VALUES ("'.$title.'", "'.$desc.'", "'.$type.'", "'.$date.'", "'.$link.'", "'.$new_img_name.'")';
         
                  $insert = mysqli_query($conn, $ins); 

                  if(!$insert){
                     error_log($conn);
                  }

                  // SELECT ANNOUNCMENT 
                  $selAnnounce = mysqli_query($conn, "SELECT * FROM `announcement` WHERE `type` = '$type' ORDER BY `announcement`.`id` DESC"); ?> 
                  
               <div class="events-content-box">
            <?php if(mysqli_num_rows($selAnnounce) > 0) {
                     while($announce = mysqli_fetch_assoc($selAnnounce)) { ?>
                  <div class="events-data">
                     <h1> <?=$announce['title']?> </h1>
                     <p> <?=$announce['description']?> <a target="blank" href="<?=$announce['link']?>"> Learn More </a> </p>
                  </div>
                  <?php } 
               } ?>
               </div>
         <?php  }
            }
      }
   }
?>