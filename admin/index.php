<?php 
error_reporting(1);
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Styles/adminLogin.css">
   <title> QCU Administrator </title>
</head>
<body>
   <main>
      <div class="form-login">
         <div class="icon-holder">
            <img src="../icon/settings.png" alt="">
         </div>

         <div class="qcu-title">
            <img src="../icon/qcu-logo.png" alt="">
            <h2> Quezon City University </h2>
         </div>
         
         <form action="process/login.php" method="POST">
           
            <label for="user"> Username </label>
            <input type="text" name="user" id="user">
            <label for="pass"> Password </label>
            <input type="password" name="pass" id="pass">
            <input type="submit" value="Login" name="loginBtn">
         </form>
         <p> <?=$_SESSION['errMess'] ?></p>
      </div>
      <div class="footer">
         <p> &copy; NxtBrigade | 2021 </p>
      </div>
   </main>

</body>
</html>
<?php unset($_SESSION['errMess']); ?>