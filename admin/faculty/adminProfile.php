<?php
   session_start();
   include "../../include/db_connection.php";
   include "../../process/select.php";

   $empID = $_SESSION['empID'];

      
   function actLog($schoolID, $activity, $date, $time){
      include "../../include/db_connection.php";

      $ins = "INSERT INTO `activity_log`(`schoolID`, `activity`, `date`, `time`) VALUES ('$schoolID','$activity', '$date', '$time')";
      mysqli_query($con, $ins);

   }
       

   if (empty($empID)) {
      /* Unset user data */
      unset($empID);

      /* Redirect to login page */
      header("location: ../index.php");
   }
    
   if (isset($_POST['changePass'])) {

      $oldpass = $_POST['oldpass'];
      $nPass = $_POST['nPass'];
      $cPass = $_POST['cPass'];

      $oldPQ = mysqli_query($con, "SELECT * FROM `users_account` ua
      JOIN `users` u 
      ON ua.empID = u.empID
      WHERE ua.password = '$oldpass' AND ua.empID = $empID;");

      $schoolID = $empID;
      $activity = "Changed Password";
      $date = date('Y-m-d');
      $time = date('H:i:s A');  
      
      if(empty($oldpass) || empty($nPass) || empty($cPass)){
         echo '<script> alert("Input some data!!") </script>';
      }
      else{

         if(mysqli_num_rows($oldPQ) === 1){
            if($nPass == $cPass){
               $queryUpdate = "UPDATE `users_account` SET `password`= '$nPass' WHERE empID = $empID";
               $upd = mysqli_query($con, $queryUpdate);
   
               if($upd){
                  actLog($schoolID, $activity, $date, $time);
                  echo '<script> alert("Password Changed Successfully!") </script>';
               }
               else{
                  echo '<script> alert("'.error_log($con).'") </script>';
               }
            }
            else{
               echo '<script> alert("New password and confirm password are not match!") </script>';
            }
         } else {
            echo '<script> alert("Old password incorrect!") </script>';
         }
      }
   }





    
    $selFacApp = mysqli_query($con, "SELECT u.fullname, fa.* FROM `faculty_announcment` fa
    JOIN `users` u
    ON fa.empID = u.empID
    WHERE fa.status = 'Approved' AND fa.empID = $empID");

    $selAdmin = mysqli_query($con, "SELECT * FROM `users` u
    JOIN `faculty_dept` fd
    ON u.empID = fd.empID
    WHERE u.empID = $empID");
    $admin = mysqli_fetch_assoc($selAdmin);

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <link rel="stylesheet" href="../../Styles/faculty.css">
    <title>Home | QUEZON CITY UNIVERSITY Bulletin Board</title>
     <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   
   <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

</head>
<body>
      <div class="header">
        <div class="logo"> <img src="./images/qcu_logo.png" alt=""> 
        </div>
            <div class="qcu"><h1>QUEZON CITY UNIVERSITY <br><span>Bulletin Board</span></h1>
            </div>

            <div class="logout">
                <div class="btn_logout">
                    <div class="profile">
                        <img src="../admin-profile/<?=$fname['avatar']?>" alt="">
                    </div>
                    <p> <?=$admin['fullname']?> </p>
                    <i class='fas'>&#xf0d7;</i>
                </div>
               
                <div class="dropdown">
                  <a href="./adminProfile.php"> Profile </a>
                  <a href="../logout.php"> Logout </a>
                </div>
            </div>
      </div>
      
      <main>
        <div class="topnav">
            <a href="adminHome.php"><b>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="adminAnnounce.php"><b> Announcements </a>
        </div>

        

        <div class="container">
            <div class="password-content">
               <h2> Change Password </h2>
               <form action="./adminProfile.php" method="POST">
                  <div class="form-input">
                     <label for="oldpass"> Old Password </label>
                     <input type="password" name="oldpass" id="oldpass">
                  </div>
                  <div class="form-input">
                     <label for="nPass"> New Password </label>
                     <input type="password" name="nPass" id="nPass">
                  </div>
                  <div class="form-input">
                     <label for="cPass"> Confirm Password </label>
                     <input type="password" name="cPass" id="cPass">
                  </div>
                  <div class="form-button">
                     <input type="submit" value="Change" name="changePass">
                  </div>

               </form>
                
            </div>

            <div class="profile-content">
               <h2> Change Profile </h2>

               <div class="profile">
                  <img id="user" src="../profile/<?=$prof['profile']?>" alt="">
               </div>

               <form action="../../process/changeFaculty.php" method="POST" enctype="multipart/form-data">
                  <input type="file" name="file" id="file">  
                  <div class="form-button">
                     <input type="submit" value="Change profile" name="changeProfile">
                  </div>          
               </form>
                    
            </div>
            
        </div>

    </main>
</body>
<script>
          const btn_logout = document.querySelector('.btn_logout')
    const dropdown = document.querySelector('.dropdown')
    btn_logout.addEventListener('click', () => {
        dropdown.classList.toggle('active')
    });
</script>
</html>