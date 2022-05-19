<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminStyle.css">
    <title>Change Password | QUEZON CITY UNIVERSITY Bulletin Board</title>
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
        <div class="pass-content">
            <section>
                <h3><center>Change Password</center></h3><br>
                <form action="#" method="POST" enctype="multipart/form-data">
                        <label> Old Password </label><br>
                        <input type="text" id="oldpass" name="oldpass"><br>
                        <label> New Password <span>*8-16 Characters*</span></label><br>
                        <input type="text" name="newpass" id="newpass"><br>
                        <label> Confirm Password </label><br>
                        <input type="text" name="confirmpass" id="confirmpass"><br>
                        <input type="submit" value="Change">                      
                </form>
            </section>

        </div>

        <div class="pass1-content">
            <section>
                <form action="#" method="POST" enctype="multipart/form-data">
                        <img id="user" src="../profile/<?=$prof['profile']?>" alt="">
                        <input type="file" name="file" id="file">                     
                </form>
            </section>

        </div>
        
    </div>
</body>
</html>