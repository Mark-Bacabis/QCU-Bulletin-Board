<?php
    session_start();
    $fid = $_SESSION['empID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <title> Announcements | QUEZON CITY UNIVERSITY Bulletin Board</title>
</head>
<body>
    <div class="header">
        <div class="logo"> <img src="./images/qcu_logo.png" alt=""> 
        </div>
            <div class="qcu"><h1>QUEZON CITY UNIVERSITY <br><span>Bulletin Board</span></h1>
            </div>
    </div>
            <div class="topnav">
                <a href="adminHome.php"><b>Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="adminAnnounce.php"><b>Announcements</a>
            </div>

    <div class="container">
        <div class="announce-content">
            <section>
                <form action="../../process/add-head-announce.php" method="post">
                    <textarea name="announcement"></textarea><br>
                    <input type="submit" value="POST" name="announceBtn">
                </form>
            </section>

        </div>

        
    </div>
    </body>
    </html>