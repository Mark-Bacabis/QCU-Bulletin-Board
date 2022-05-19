<?php 
    include "../include/db_connection.php";

  if (isset($_POST["create"])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword= $_POST['confirmpassword'];



    $students = mysqli_query($con, "SELECT * FROM `student` WHERE `Student_ID` = '".$username."'");
    $stud_account = mysqli_query($con, "SELECT * FROM `stud_accounts` WHERE `studentId` = '$username'");

    if($password === $confirmpassword){
      if(mysqli_num_rows($stud_account) == 1){
        echo '<script> alert("This username already exist.!") </script>';
        echo '<script> window.location.href = "./register.php" </script>';
      }
      else{
        if(mysqli_num_rows($students) == 1){
          $stud = mysqli_fetch_assoc($students);
          // $studID = $stud['Student_ID'];
          $ins = "INSERT INTO `stud_accounts`(`studentId`, `password`) VALUES ('$username', '$password')";
          $insStud = mysqli_query($con, $ins);


          if($insStud){
            echo '<script> alert("Account created successfully.") </script>';
            echo '<script> window.location.href = "./register.php" </script>';
          }
        } else{
            echo "<script> alert('This student id $username does not exist.') </script>";
            echo '<script> window.location.href = "./register.php" </script>';
        }
      }
    }
    else{
      echo '<script> alert("The password and confirm password are not match.") </script>';
      echo '<script> window.location.href = "./register.php" </script>';
    }

   

    // if(mysqli_num_rows($select)) {
    //   echo '<script>alert("This username already exist.!")</script>';
    //   echo '<script>window.location.href = "/qcu_bulletin/register.php"</script>';
    // }else{
    //   if($confirmpasswordpassword != $password){
    //     echo '<script>alert("Passwords do not match.!")</script>';
    //     echo '<script>window.location.href = "/qcu_bulletin/register.php"</script>';
    //   }else{
    //   $queryCreate = "INSERT INTO stud_accounts VALUES (null, '$username', md5('$password'), '$StudentName', '$course')";
    //   $sqlCreate = mysqli_query($con, $queryCreate);
   
    //   echo '<script>alert("Successfull created!")</script>';
    //   echo '<script>window.location.href = "/qcu_bulletin/login.php"</script>';
    //   }
  } 
?>