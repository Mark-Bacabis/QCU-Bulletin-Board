
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../Styles/admin.css">
   <link rel="stylesheet" href="../Styles/calendar.css">

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/> <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" /> 


   <title> Admin </title>
</head>

<body>
   <main>
      <section class="left-dashboard-minimize">
         <div class="left-header">
            <div class="qcu-title">
               <img src="../icon/qcu-logo.png" alt="">
            </div>

            <div class="burger-icon" id="burger-icon-max">
               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 25 15">
                  <g id="Group_162" data-name="Group 162" transform="translate(-220 -28)">
                     <rect id="Rectangle_195" data-name="Rectangle 195" width="25" height="3" rx="1.5" transform="translate(220 28)" fill="#fff"/>
                     <rect id="Rectangle_196" data-name="Rectangle 196" width="19" height="3" rx="1.5" transform="translate(226 34)" fill="#fff"/>
                     <g id="Group_148" data-name="Group 148" transform="translate(223.396 40)">
                        <rect id="Rectangle_197" data-name="Rectangle 197" width="22" height="3" rx="1.5" transform="translate(-0.396)" fill="#fff"/>
                     </g>
                  </g>
               </svg>
            </div>
         </div>

         <nav>
            <div class="selected" id="selected-mob">
               
            </div>
            <ul>
               <li>  
                  <a id="link-dashboard-mob"> 
                     <img src="../icon/dashboard.png" class="dashboard-icon" >
                  </a> 
               </li>
               <li>  
                  <a id="link-student-mob"> 
                     <img src="../icon/student-with-graduation-cap.png" class="dashboard-icon" >
                  </a> 
               </li>
               <li>  
                  <a id="link-courses-mob"> 
                     <img src="../icon/online-education.png" class="dashboard-icon">
                  </a> 
               </li>
               <li>  
                  <a id="link-exam-mob"> 
                     <img src="../icon/exam.png" class="dashboard-icon">
                  </a> 
               </li>
               <!--<li>  
                  <a id="link-subject-mob"> 
                     <img src="../icon/book.png" class="dashboard-icon">
                  </a> 
               </li> -->
               <li>  
                  <a id="link-events-mob"> 
                     <img src="../icon/calendar-silhouette.png" class="dashboard-icon">
                  </a> 
               </li>
               
            </ul>
         </nav>


         <div class="left-footer">
            <img src="../icon/logo-black.png">
         </div>
      </section>

      <section class="left-dashboard">
         <div class="left-header">
            <div class="qcu-title">
               <img src="../icon/qcu-logo.png" alt="">
               <div class="text">
                  <h3> Quezon City University </h3>
                  <p> Good life, Starts Here.</p>
               </div>
            </div>
            <div class="burger-icon" id="burger-icon">
               <svg xmlns="http://www.w3.org/2000/svg" width="25" height="15" viewBox="0 0 25 15">
                  <g id="Group_162" data-name="Group 162" transform="translate(-220 -28)">
                     <rect id="Rectangle_195" data-name="Rectangle 195" width="25" height="3" rx="1.5" transform="translate(220 28)" fill="#fff"/>
                     <rect id="Rectangle_196" data-name="Rectangle 196" width="19" height="3" rx="1.5" transform="translate(226 34)" fill="#fff"/>
                     <g id="Group_148" data-name="Group 148" transform="translate(223.396 40)">
                        <rect id="Rectangle_197" data-name="Rectangle 197" width="22" height="3" rx="1.5" transform="translate(-0.396)" fill="#fff"/>
                     </g>
                  </g>
               </svg>
            </div>
         </div>

         <nav>
            <div class="selected" id="selected">
               
            </div>
            <ul>
               <li>  
                  <a id="link-dashboard"> 
                     <img src="../icon/dashboard.png" class="dashboard-icon" > dashboard 
                  </a> 
               </li>
               <li>  
                  <a id="link-student"> 
                     <img src="../icon/student-with-graduation-cap.png" class="dashboard-icon" > Student
                  </a> 
               </li>
               <li>  
                  <a id="link-courses"> 
                     <img src="../icon/online-education.png" class="dashboard-icon" > courses
                  </a> 
               </li>
               <li>  
                  <a id="link-exam"> 
                     <img src="../icon/exam.png" class="dashboard-icon" > exam 
                  </a> 
               </li>
               <!--<li>  
                  <a id="link-subject"> 
                     <img src="../icon/book.png" class="dashboard-icon" > subject
                  </a> 
               </li> -->
               <li>  
                  <a id="link-events"> 
                     <img src="../icon/calendar-silhouette.png" class="dashboard-icon" > events
                  </a> 
               </li>
               
            </ul>
         </nav>


         <div class="left-footer">
           
            <p> QCU Bulletin Board </p>
         </div>
      </section>



      <section class="center-information">
         <div class="center-header">
            <p> <span id="date"> December 4, 2021 </span> <span id="time"> 10:28:47 PM </span></p>
         </div>

         <div class="center-content">
            <!-- DASHBOARD -->
               <div class="dashboard-container" id="dashboard-container">
                  <div class="title-header">
                     <h2> Overview </h2>
                     <hr>
                  </div>
               </div>  
         </div>
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

<script src="../Javascript/calendar.js"></script>
<script src="../Javascript/dateNow.js"></script>


</html>