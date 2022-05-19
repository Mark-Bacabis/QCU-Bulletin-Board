<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <title>Announcements | QUEZON CITY UNIVERSITY Bulletin Board</title>
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
                <form action="#" method="get">
                    <input type="text" id="title" name="title" placeholder=" Title Here..."><br><br>
                    <textarea name="announcement"></textarea><br>
                    <input type="text" id="url" name="url" placeholder=" URL: www.example.com">
                    <input type="file" id="file" name="file">
                    <input type="submit" value="POST">
                </form>
            </section>

        </div>

        
    </div>
    </body>
    </html>