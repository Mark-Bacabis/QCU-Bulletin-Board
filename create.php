<?php 
    include "./include/db_connection.php";

  if (isset($_POST["create"])) {

    $StudentName = $_POST['StudentName'];
    $username = $_POST['username'];
    $course = $_POST['course'];
    $password = $_POST['password'];
    $confirmpasswordpassword = $_POST['confirmpassword'];

    $select = mysqli_query($con, "SELECT * FROM `stud_accounts` WHERE studentId = '".$_POST['username']."'");
    if(mysqli_num_rows($select)) {
      echo '<script>alert("This username already exist.!")</script>';
      echo '<script>window.location.href = "/qcu_bulletin/register.php"</script>';
    }else{
      if($confirmpasswordpassword != $password){
        echo '<script>alert("Passwords do not match.!")</script>';
        echo '<script>window.location.href = "/qcu_bulletin/register.php"</script>';
      }else{
      $queryCreate = "INSERT INTO stud_accounts VALUES (null, '$username', md5('$password'), '$StudentName', '$course')";
      $sqlCreate = mysqli_query($con, $queryCreate);
   
      echo '<script>alert("Successfull created!")</script>';
      echo '<script>window.location.href = "/qcu_bulletin/login.php"</script>';
      }
    }


  } else {
    echo '<script>window.location.href = "/qcu_bulletin/login.php"</script>';
  }
?>