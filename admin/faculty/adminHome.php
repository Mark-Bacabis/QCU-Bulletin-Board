<?php
    session_start();
    include "../../include/db_connection.php";
    include "../../process/select.php";
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <title>Home | QUEZON CITY UNIVERSITY Bulletin Board</title>
</head>
<body>
    <div class="header">
        <div class="logo"> <img src="./images/qcu_logo.png" alt=""> 
        </div>
            <div class="qcu"><h1>QUEZON CITY UNIVERSITY <br><span>Bulletin Board</span></h1>
            </div>
    </div>
    <main>
        <div class="topnav">
            <a href="adminHome.php"><b>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="adminAnnounce.php"><b>Announcements</a>
        </div>

        

        <div class="container">
            <div class="home-content content">
                <h2> Announcement </h2>
                <?php if(mysqli_num_rows($selAnnounceQ) > 0 ){ 
                    while($rows = mysqli_fetch_assoc($selAnnounceQ)){ ?>
                          <div class="announce">
                       <div class="announce-input">
                            <h1> <?=$rows['title']?> </h1>
                            <p> <?=$rows['announcement']?> <a href="<?=$rows['link']?>"><?=$rows['link']?></a></p>
                       </div>
                       <div class="img">
                            <img src="../../img/announce images/<?=$rows['image']?>" alt="">
                       </div>
                    </div>
                <?php  }
                }
                    ?>
                  
            </div>

            <div class="home1-content content">
                <h3> My Announcement </h3>
                <?php 
                    if (mysqli_num_rows($selFacApp) > 0){
                        while($rows=mysqli_fetch_assoc($selFacApp)){ ?>
                    
                    <div class="announce">
                       <div class="announce-input">
                            <p> <?=$rows['date']?> </p>
                            <p> <?=$rows['description']?> </p>
                       </div>
                    </div>

                    <?php }
                    }
                ?>
                    
            </div>
            
        </div>

    </main>

    </body>
    </html>