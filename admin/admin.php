
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
               <h1>Overview</h1>
            </div>
            <div class="nav-link" >
            <img src="../icon/loudspeaker.png" alt="">
               <h1>Announcement</h1>
            </div>
            <div class="nav-link about">
               <img src="../icon/info-button.png" alt="">
               <div class="drop-down-about">
                  <h1>About</h1>
                  <img src="../icon/down-filled-triangular-arrow.png" alt="">
               </div>
              

               <div class="secondary-nav-about">
                  <div class="sec-nav-link">
                     <h2>History</h2>
                  </div>
                  <div class="sec-nav-link">
                     <h2>Mision & Vision </h2>
                  </div>
                  <div class="sec-nav-link">
                     <h2> Strategic Direction & Shared Values </h2>
                  </div>
                  <div class="sec-nav-link">
                     <h2>Executive Officials</h2>
                  </div>
               </div>
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

                     <div class="charts">
                        <div class="box donut-container"> 
                              
                        </div>
                        <div class="box pie-container"> 
                            
                        </div>
                     </div>
                  </div>

                  <div class="announcement">
                     <div class="title-header">
                        <h2> Announcement </h2>
                        <hr>
                     </div>

                     <div class="announce-box">
                       
                     </div>
                  </div>
                  
               </div> 
            <!-- xxx DASHBOARD -->   
               
            <!-- ANNOUNCEMENTS -->
               <div class="events-container" id="events-container">
                  <div class="title-header">
                     <h2> Announcement and Events </h2>
                     <hr>
                  </div>

                  <div class="events-form">
                     <div class="top-form">
                        <input type="text" name="title" id="title" placeholder="Title here">
                        <div class="select-date">
                           <select name="type" id="type" onchange="disableImg()">
                              <option value="Announcement"> Announcement </option>
                              <option value="Events"> Events </option>
                       
                           </select>

                           <select name="courses" id="courses">
                              <option value="Overall"> Overall </option>
                              <option value="BSIT"> BSIT </option>
                              <option value="BSIE"> BSIE </option>
                              <option value="BSENT"> BSENT </option>
                              <option value="BSECE"> BSECE </option>
                              <option value="BSA"> BSA </option>
                           </select>
                        </div>
                     </div>
                     
                     <div class="event-desc">
                        <textarea name="desc" id="event-desc" placeholder="Announcements and Events"></textarea>
                     </div>

                     <div class="submit-form">
                        <input type="url" name="link" id="link" placeholder="Url: www.example.com">
                        <input type="file" name="eventImg" id="event-img" disabled>
                        <button id="Post" onclick="Post()"> Post </button>
                        
                     </div>

                  </div>

                  <div class="events-output">
                     <div class="button-header">
                        <button id="announcement" class="selected-event"> Announcement </button>
                        <button id="events"> Events </button>
                     </div>
                     
                     <div class="output-container" id="output-container">
                        <div class="events-content-box">
                       
                           <div class="events-data">
                              <h1>  </h1>
                              <p>  <a target="blank" href="#"> Learn More </a> </p>
                           </div>
                  
                        </div>
                     </div>
                  </div>
               </div>
            <!--xxx ANNOUNCEMENTS -->


            <!-- ABOUT -->
            <!-- history -->
            <div class="history-container">
               <div class="title-header">
                  <h2> History </h2>
                  <hr>
               </div>

               <div class="history-form">
                  <textarea name="history" id="history"></textarea>

                  <div class="history-button">
                     <input type="file" name="historyPic" id="historyPic">
                     <button id="HistoryPost" onclick="Post()"> Post </button>
                  </div>
               </div>
            </div>
            <!-- xx history xx-->

             <!-- Mission Vision -->
             <div class="mv-container" id="mv-container">
               <div class="title-header">
                  <h2> Mission and Vision </h2>
                  <hr>
               </div>

               <div class="mv-form">
                  <select name="mvOption" id="mv-option">
                     <option value="Mission"> Mission </option>
                     <option value="Vision"> Vision </option>
                  </select>
                  <textarea name="mv" id="mv"></textarea>
                  <button id="mvPost"> Post </button>
               </div>
            </div>
            <!-- xx Mission Vision  xx-->
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
<script src="../Javascript/admin.js"></script>
<script src="../Javascript/eventsButton.js"></script>
<script src="../Javascript/calendar.js"></script>
<script src="../Javascript/dateNow.js"></script>


</html>