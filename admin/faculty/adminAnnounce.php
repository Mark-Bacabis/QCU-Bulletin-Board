<?php
    session_start();
    include "../../include/db_connection.php";
    include "../../process/select.php";
    $empID = $_SESSION['empID'];

       

    if (empty($empID)) {
        /* Unset user data */
        unset($empID);

        /* Redirect to login page */
        header("location: ../index.php");
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
    <title> Announcements | QUEZON CITY UNIVERSITY Bulletin Board</title>
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
            <a href="adminAnnounce.php" class="selected"><b>Announcements</a>
        </div>

        

        <div class="container">
            <div class="announce-content content">
                <h2> Announcement </h2>

                <form action="../../process/add-head-announce.php" method="POST">
                    <textarea name="announcement" id="announcement"></textarea>
                    <input type="submit" name="announceBtn" value="POST">
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