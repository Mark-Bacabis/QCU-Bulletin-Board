<?php
   error_reporting(0);
   session_start();
   $empID = $_SESSION['empID'];
   if(empty($empID)){
     // header("location:./index.php");
   }
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


<script src="../ajax/events.js"> </script>

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
            <img src="../icon/loudspeaker.png" alt="">
               <h1> Admin Assistants </h1>
            </div>
            <div class="nav-link" >
            <img src="../icon/loudspeaker.png" alt="">
               <h1> Departments Head </h1>
            </div>
            <div class="nav-link" >
            <img src="../icon/loudspeaker.png" alt="">
               <h1> Students </h1>
            </div>

            <div class="nav-link" >
            <img src="../icon/loudspeaker.png" alt="">
               <h1> Activity log </h1>
            </div>
            
           
         </nav>

      
      </section>



      <section class="center-information">
         <div class="center-header">
            <p> <span id="date"> December 4, 2021 </span> <span id="time"> 10:28:47 PM </span></p>
         </div>

         <div class="center-content">
            <!-- DASHBOARD -->
               <div class="dashboard-container" id="dashboard-container">
                  <div class="overview">
                     <div class="title-header">
                        <h2> Overview </h2>
                        <hr>
                     </div>

                     <div class="summary-container">
                        <div class="summary-box students">
                           <div class="icon">
                              <img src="../icon/student-with-graduation-cap.png" alt="">
                           </div>
                           <div class="summary-info">
                              <h1 class="total"> 42 </h1>
                              <p class="summary-title"> Students </p>
                           </div>
                        </div>

                        <div class="summary-box dept-head">
                           <div class="icon">

                           </div>
                           <div class="summary-info">
                              <h1 class="total"> 42 </h1>
                              <p class="summary-title"> Students </p>
                           </div>
                        </div>

                        <div class="summary-box admin-assist">
                           <div class="icon">

                           </div>
                           <div class="summary-info">
                              <h1 class="total"> 42 </h1>
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
               <div class="admin-assist-container">
                  <div class="title-header">
                     <h2> Admin Assistants </h2>
                     <hr>
                  </div>

                  <div class="add-assistant">
                  
                  </div>
                  <div class="assistants">
                     <table border="1">
                        <tr>
                           <th> employee id </th>
                           <th> Fullname </th>
                           <th> Email </th>
                           <th> Contact </th>
                        </tr>
                        <tr>
                           <td> 220002 </td>
                           <td> Mark Melvin Bacabis </td>
                           <td> mark.melvin.bacabis@gmail.com </td>
                           <td> 09987654321 </td>
                        </tr>
                     </table>
                  </div>

               </div>
            <!-- xxx ADMIN ASSISTAN -->
      </section>



      <section class="right-dashboard">
         <div class="right-header">
            <div class="icon-profile">
               <div class="profile-img">
                  <img src="admin-profile/profile.png">
               </div>
               <h3> Jessica </h3>
            </div>

            <div class="icon-setting">
               <a href="#">
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

<script>
   const data = {
   labels: [
      'Red',
      'Blue',
      'Yellow'
   ],
   datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
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


<script>
   const pieData = {
   labels: [
      'Red',
      'Blue',
      'Yellow'
   ],
   datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
         'rgb(255, 99, 132)',
         'rgb(54, 162, 235)',
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