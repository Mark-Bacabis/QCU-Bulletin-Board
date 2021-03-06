<?php
   // error_reporting(0);
   session_start();
   
   
   include "../include/db_connection.php";
   include "../process/function.php";
   include "../process/select.php";
   include "../process/count.php";

   $empID = $_SESSION['empID'];

   // SELECT SUPER ADMIN WHERE...
   $selAdmin = "SELECT * FROM `users` WHERE `position` = 'main admin' AND `empID` = $empID";
   $selectedAdmin = mysqli_query($con, $selAdmin);
   $superAdmin = mysqli_fetch_assoc($selectedAdmin);

   // COUNT ALL BSIT STUDENTS
   $cntBSITQ = mysqli_query($con, "SELECT COUNT(*) AS total FROM `student_status` ss 
   JOIN `stud_accounts` sa 
   ON ss.Student_ID = sa.studentId WHERE ss.Course = 'BSIT';");
   $cntBSIT = mysqli_fetch_assoc($cntBSITQ);

    // COUNT ALL BSA STUDENTS
    $cntBSAQ = mysqli_query($con, "SELECT COUNT(*) AS total FROM `student_status` ss 
    JOIN `stud_accounts` sa 
    ON ss.Student_ID = sa.studentId WHERE ss.Course = 'BSA';");
    $cntBSA = mysqli_fetch_assoc($cntBSAQ);

     // COUNT ALL BSECE STUDENTS
   $cntBSECEQ = mysqli_query($con, "SELECT COUNT(*) AS total FROM `student_status` ss 
   JOIN `stud_accounts` sa 
   ON ss.Student_ID = sa.studentId WHERE ss.Course = 'BSECE';");
   $cntBSECE = mysqli_fetch_assoc($cntBSECEQ);

    // COUNT ALL BSENT STUDENTS
    $cntBSENTQ = mysqli_query($con, "SELECT COUNT(*) AS total FROM `student_status` ss 
    JOIN `stud_accounts` sa 
    ON ss.Student_ID = sa.studentId WHERE ss.Course = 'BSENT';");
    $cntBSENT = mysqli_fetch_assoc($cntBSENTQ);

     // COUNT ALL BSIE STUDENTS
   $cntBSIEQ = mysqli_query($con, "SELECT COUNT(*) AS total FROM `student_status` ss 
   JOIN `stud_accounts` sa 
   ON ss.Student_ID = sa.studentId WHERE ss.Course = 'BSIE';");
   $cntBSIE = mysqli_fetch_assoc($cntBSIEQ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../Styles/admin.css">
   <link rel="stylesheet" href="../Styles/calendar.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/> <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" /> 
   <title> QCU Bulletin Board Dashboard </title>
</head>

<!-- AJAX PLUGINS -->
<script src="http://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- CHART JS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- AJAXS -->
<script src="../ajax/add-assistant.js"></script>
<script src="../ajax/del-assistant.js"></script>
<script src="../ajax/add-faculty.js"></script>
<script src="../ajax/del-faculty.js"></script>
<body>
   <main>

      <section class="left-dashboard">
         <div class="left-header">
            <div class="qcu-title">
               <img src="../icon/qcu-logo.png" alt="">
               <div class="text">
                  <h3> Quezon City University </h3>
                  <p> Bulletin Board </p>
               </div>
            </div>
         </div>

         <nav id="navigation-side">
            <div class="nav-link selected">
               <img src="../icon/dashboard.png" alt="">
               <h1> Dashboard </h1>
            </div>
            <div class="nav-link" >
            <img src="../icon/management.png" alt="">
               <h1> Admin Assistants </h1>
            </div>
            <div class="nav-link" >
            <img src="../icon/hierarchy.png" alt="">
               <h1> Departments Head </h1>
            </div>
            <div class="nav-link" >
            <img src="../icon/student-with-graduation-cap.png" alt="">
               <h1> Students </h1>
            </div>

            <div class="nav-link" >
            <img src="../icon/restore.png" alt="">
               <h1> Activity log </h1>
            </div>
            
           
         </nav>

      
      </section>



      <section class="center-information">
         <div class="center-header">
            <div class="title">
               <h1> SUPER ADMIN </h1>
            </div>

            <div class="interval-time"> 
               <p> <span id="date"> December 4, 2021 </span> <span id="time"> 10:28:47 PM </span></p>
            </div>
           
         </div>

         <div class="center-content">
            <!-- DASHBOARD -->
               <div class="dashboard-container container" id="dashboard-container">
                  <div class="overview">
                     <div class="title-header">
                        <h2> Dashboard </h2>
                        <hr>
                     </div>

                     <div class="summary-container">
                        <div class="summary-box students">
                           <div class="icon">
                              <img src="../icon/management.png" alt="">
                           </div>
                           <div class="summary-info">
                              <h1 class="total"> <?=$adminCnt['total']?> </h1>
                              <p class="summary-title"> Admin Assistants </p>
                           </div>
                        </div>

                        <div class="summary-box dept-head">
                           <div class="icon">
                              <img src="../icon/hierarchy.png" alt="">
                           </div>
                           <div class="summary-info">
                              <h1 class="total"> <?=$facultyCnt['total']?> </h1>
                              <p class="summary-title">  Head Department</p>
                           </div>
                        </div>

                        <div class="summary-box admin-assist">
                           <div class="icon">
                              <img src="../icon/student-with-graduation-cap.png" alt="">
                           </div>
                           <div class="summary-info">
                              <h1 class="total"> <?=$studCnt['total']?> </h1>
                              <p class="summary-title"> Students </p>
                           </div>
                        </div>
                        
                     </div>
                     <div class="charts">
                        <div class="box donut-container"> 
                           <canvas id="donut-chart"></canvas>
                        </div>
                        <div class="box pie-container"> 
                           <canvas id="pie-chart"></canvas>
                        </div>
                     </div>
                  </div> 
               </div> 
            <!-- xxx DASHBOARD -->     
            
            
            <!-- ADMIN ASSISTANT --> 
               <div class="admin-assist-container container">
                  <div class="title-header">
                     <h2> Admin Assistants </h2>
                     <hr>
                  </div>
                   
                  
                  <div class="assistants">
                     <div class="add-assistant">
                        <button id="addAssistant"> 
                           <div class="icon">
                              +
                           </div>
                           <p> Add new assistant </p>
                        </button>
                        <div class="assistant-result">
                           <p> Result: <?=$adminCnt['total']?> </p>
                        </div>
                     </div>
                     
                     <table border="0">
                        <tr>
                           
                           <th> emp id </th>
                           <th> Fullname </th>
                           <th> Email </th>
                           <th> Contact </th>
                           <th> Action </th>
                        </tr>
                        <?php
                        if(mysqli_num_rows($selAssistant) > 0){
                           while($rows = mysqli_fetch_array($selAssistant)){ ?>
                           <tr>
                              
                              <td> <?=$rows['empID']?></td>
                              <td> <?=$rows['fullname']?></td>
                              <td> <?=$rows['email']?> </td>
                              <td> <?=$rows['contact']?> </td>
                              <td> <button data-role="Delete" data-id="<?=$rows['empID']?>"> Del </button> </td>
                           </tr>

                        <?php  }
                        } else { ?>
                           <tr>
                              <td colspan="6"> No Applicants Yet. </td>
                           </tr>
                        <?php }
                        ?>
                     </table>

                     <div class="update-box">
                     
                     </div>
                  </div>

                  <div class="del-modal" id="del-modal">
                     <p> Are you sure you want to delete this employee? </p>
                     <h2 class="emp-id"></h2>
                     <div class="form-button">
                        <button id="del-no"> No </button>
                        <button id="del-yes"> Yes </button>
                       
                     </div>
                  </div>

                  <div class="assistant-modal" id="assistant-modal">
                     <div class="assistant-form">
                        <h1> Add Admin Assistant </h1>
                        <div class="form-input fname">
                           <label for="fname"> Firstname <span class="errMessage"> </span></label>
                           <input type="text" name="fname" id="fname">
                        </div>

                        <div class="form-input lname">
                           <label for="lname"> Lastname <span class="errMessage"> </span></label>
                           <input type="text" name="lname" id="lname">
                        </div>

                        <div class="form-input email">
                           <label for="email"> Email <span class="errMessage"> </span></label>
                           <input type="email" name="email" id="email">
                        </div>

                        <div class="form-input cNum" >
                           <label for="cNum"> Contact number <span class="errMessage"> </span></label>
                           <input type="email" name="cNum" id="cNum">
                        </div>

                        <div class="form-button">
                           <button id="assistant-cancel"> Cancel </button>
                           <button id="assistant-add"> Add </button>
                        </div>
                     </div>
                  </div>

               </div>
            <!-- xxx ADMIN ASSISTANT -->

            <!-- HEAD DEPT -->
               <div class="head-container container">
                  <div class="title-header">
                     <h2> Head Department </h2>
                     <hr>
                  </div>
                   
                  
                  <div class="heads">
                     <div class="add-head">
                        <button id="addHead"> 
                           <div class="icon">
                              +
                           </div>
                           <p> Add Faculty Head  </p>
                        </button>
                        <div class="head-result">
                           <p> Result: <?=$facultyCnt['total']?> </p>
                        </div>
                     </div>
                     <table border="0">
                        <tr>
                          
                           <th> emp id </th>
                           <th> Fullname </th>
                           <th> Email </th>
                           <th> Dept </th>
                           <th> Action </th>
                        </tr>
                        <?php
                        if(mysqli_num_rows($selFaculty) > 0){
                           while($rows = mysqli_fetch_array($selFaculty)){ ?>
                           <tr>
                            
                              <td> <?=$rows['empID']?></td>
                              <td> <?=$rows['fullname']?></td>
                              <td> <?=$rows['email']?> </td>
                              <td> <?=$rows['Dept']?> </td>
                              <td> <button data-role="Delete-head" data-id="<?=$rows['empID']?>"> Del </button> </td>
                           </tr>

                        <?php  }
                        } else { ?>
                           <tr>
                              <td colspan="6"> No Applicants Yet. </td>
                           </tr>
                        <?php }
                        ?>
                     </table>

                     <div class="update-box-box">
                     
                     </div>
                  </div>


                  <div class="del-modal" id="del-modal-head">
                     <p> Are you sure you want to delete this employee? </p>
                     <h2 class="emp-id"></h2>
                     <div class="form-button">
                        <button id="del-no-head"> No </button>
                        <button id="del-yes-head"> Yes </button>
                       
                     </div>
                  </div>

                  <div class="head-modal" id="head-modal">
                     <div class="head-form">
                        <h1> Add Head </h1>
                        <div class="form-input">
                           <label for="fname"> Firstname </label>
                           <input type="text" name="fname" id="head-fname">
                        </div>

                        <div class="form-input">
                           <label for="lname"> Lastname </label>
                           <input type="text" name="lname" id="head-lname">
                        </div>

                        <div class="form-input">
                           <label for="email"> Email </label>
                           <input type="email" name="email" id="head-email">
                        </div>

                        <div class="form-input">
                           <label for="dept"> Department </label>
                           <select name="dept" id="head-dept">
                              <option value="BSIT"> BSIT </option>
                              <option value="BSIE"> BSIE </option>
                              <option value="BSA"> BSA </option>
                              <option value="BSECE"> BSECE </option>
                              <option value="BSENT"> BSENT </option>
                           </select>
                        </div>

                        <div class="form-button">
                           <button id="head-cancel"> Cancel </button>
                           <button id="head-add"> Add </button>
                        </div>
                     </div>
                  </div>

               </div>
            <!-- xxx HEAD DEPT  -->


            <!-- STUDENTS -->
               <div class="students-container container">
                     <div class="title-header">
                        <h2> Students </h2>
                        <hr>
                     </div>
                     
                     <div class="search">
                        <div class="result">
                           <p> Result: <?=$studCnt['total']?> </p>
                        </div>
                        <div class="search-select">
                           <select name="course" id="course">
                              <option value="All"> All </option>
                              <option value="BSIT"> BSIT </option>
                              <option value="BSIE"> BSIE </option>
                              <option value="BSECE"> BSECE </option>
                              <option value="BSENT"> BSENT </option>
                           </select>
                           <input type="search" name="search" id="search">
                        </div>
                       
                     </div>
                     <div class="students-table"> 
                        <table border="0">
                           <tr>
                             
                              <th> stud id </th>
                              <th> Fullname </th>
                              <th> Status </th>
                              <th> Course </th>
                              <!-- <th> YL</th> -->
                           
                        
                           </tr>
                           <?php
                        if(mysqli_num_rows($selectedStud) > 0){
                           while($rows = mysqli_fetch_array($selectedStud)){ ?>
                           <tr>
                            
                              <td> <?=$rows['Student_ID']?></td>
                              <td> <?=$rows['Given_Name']?> <?=$rows['Middle_Name']?> <?=$rows['Surname']?></td>
                              <td> <?=$rows['Status']?> </td>
                              <td> <?=$rows['Course']?> </td>
                              <!-- <td> <?=$rows['Dept']?> </td> -->
                           </tr>

                        <?php  }
                        } else { ?>
                           <tr>
                              <td colspan="6"> No Applicants Yet. </td>
                           </tr>
                        <?php }
                        ?>
                        
                        </table>
                     </div>

               </div>
            <!-- xxx STUDENTS -->

            <!-- Activity Log -->
               <div class="act-log-container container">
                  <div class="title-header">
                     <h2> Activity Log </h2>
                     <hr>
                  </div>
                 <div class="tbl">
                 <table border="0">
                     <tr>
                        <th> id </th>
                        <th> activity </th>
                        <th> date and time </th>
                     </tr>
                     <?php
                        if(mysqli_num_rows($selLogQ) > 0){
                           while($log = mysqli_fetch_assoc($selLogQ)){?>
                              <tr>
                                 <td> <?=$log['schoolID']?></td>
                               
                                 <td> <?=$log['fullname']?> <?=$log['activity']?> </td>
                                 <td> <?=$log['date']?> <?=$log['time']?></td>
                              </tr>
                      <?php  }
                        }
                     ?>
                   
                  
                  </table>
                 </div>
                 
                  
               </div>
            <!-- xxx Activity Log -->
      </section>



      <section class="right-dashboard">
         <div class="right-header">
            <div class="icon-profile">
               <div class="profile-img">
                  <img src="admin-profile/<?=$superAdmin['avatar']?>">
               </div>
               <h3> <?=$superAdmin['fullname']?> </h3>
            </div>

            <div class="icon-setting">
               <a href="./logout.php">
                  <img src="../icon/power-off.png" alt="">
               </a> 
            </div>
         </div>

         <div class="calendar-box">
            <div class="calendar">
               <div class="month">
                  <i class="fas fa-angle-left prev"></i>
                  <div class="date">
                     <h1></h1>
                     <p></p>
                  </div>
                  <i class="fas fa-angle-right next"></i>
               </div>
               <div class="weekdays">
                  <div>Sun</div>
                  <div>Mon</div>
                  <div>Tue</div>
                  <div>Wed</div>
                  <div>Thu</div>
                  <div>Fri</div>
                  <div>Sat</div>
               </div>
               <div class="days"> </div>
            </div>
         </div>
      </section>
   </main>
</body>
<script src="../Javascript/admin.js"></script>
<script src="../Javascript/calendar.js"></script>
<script src="../Javascript/dateNow.js"></script>

<!-- Doughnut chart -->
<script>
   const data = {
      labels: [
         'Admin Assistants',
         'Head Department',
         'Students'
      ],
      datasets: [{
         label: 'My First Dataset',
         data: [
            <?=$adminCnt['total']?> ,
            <?=$facultyCnt['total']?>,
            <?=$studCnt['total']?> 
         ],
         backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(255, 205, 86)'
         ],
         hoverOffset: 4
      }]
   };

   const config = {
   type: 'doughnut',
   data: data,
   };

   const myChart = new Chart(
      document.getElementById('donut-chart'),
      config
  );

</script>

<!-- Pie Chart -->
<script>
   const pieData = {
      labels: [
         'BSIT',
         'BSA',
         'BSIE',
         'BSECE',
         'BSENT'
      ],
      datasets: [{
         label: 'My First Dataset',
         data: [
            <?=$cntBSIT['total']?>,
            <?=$cntBSA['total']?>,
            <?=$cntBSIE['total']?>,
            <?=$cntBSECE['total']?>,
            <?=$cntBSENT['total']?>
         ],
         backgroundColor: [
            'rgb(255, 99, 132)',
            'rgb(54, 162, 235)',
            'rgb(54, 235, 84)',
            'rgb(235, 54, 54)',
            'rgb(255, 205, 86)'
         ],
         hoverOffset: 4
      }]
   };

   const configPie = {
      type: 'pie',
      data: pieData,
   };

   const myChartPie = new Chart(
      document.getElementById('pie-chart'),
      configPie
  );



</script>

</html>