
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../../Styles/admin-assist.css">
   <link rel="stylesheet" href="../../Styles/calendar.css">

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"/> <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet" /> 

   <!-- CHART -->
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

   <title> Admin </title>
</head>

   <!-- AJAX PLUGINS -->
   <script src="http://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   
   <!--AJAX-->
  
<body>
   <main>
      <section class="left-dashboard">
         <div class="left-header">
            <div class="qcu-title">
               <img src="../../icon/qcu-logo.png" alt="">
               <div class="text">
                  <h3> Quezon City University </h3>
                  <p> Admin </p>
               </div>
            </div>
           
         </div>

         <nav id="navigation-side">
            <div class="nav-link selected">
               <img src="../../icon/analytics.png" alt="">
               <h1> Overview </h1>
            </div>
            <div class="nav-link" >
            <img src="../../icon/loudspeaker.png" alt="">
               <h1> Announcement </h1>
            </div>
            <div class="nav-link" >
            <img src="../../icon/tool.png" alt="">
               <h1> Maintenance </h1>
            </div>
            <div class="nav-link" >
            <img src="../../icon/file.png" alt="">
               <h1> Request </h1>
            </div>
            <div class="nav-link" >
            <img src="../../icon/list.png" alt="">
               <h1> Approval History </h1>
            </div>
         </nav>
      </section>



      <section class="center-information">
         <div class="center-header">
            <div class="title">
               <h1> Admin </h1>
            </div>

            <div class="interval-time"> 
               <p> <span id="date"> December 4, 2021 </span> <span id="time"> 10:28:47 PM </span></p>
            </div>
           
         </div>

         <div class="center-content">
            <!-- OVERVIEW  -->
            <div class="overview-container container">
               <div class="overview">
                  <div class="title-header">
                     <h2> Dashboard </h2>
                     <hr>
                  </div>
                     <div class="summary-container">
                        <div class="summary-box students">
                           <div class="icon">
                              <img src="../../icon/student-with-graduation-cap.png" alt="">
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
               </div>
               
               <div class="announcements">
                  <div class="title-header">
                     <h2> Announcement </h2>
                     <hr>
                  </div>

                  <div class="announcement-box">
                     <div class="announcement">
                        <h1 class="title"> Cute si iska <span> 2022-05-18 1:27 PM </span></h1>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nam debitis maiores repudiandae voluptas nulla voluptatibus doloremque error optio neque.</p>
                     </div>
                     
                  </div>
               </div>
            </div>
            <!-- xx OVERVIEW -->

            <!-- ANNOUNCEMENT -->
               <div class="events-container container" id="events-container">
                  <div class="title-header">
                     <h2> Announcement and Events </h2>
                     <hr>
                  </div>

                  <div class="events-form">
                     <div class="top-form">
                        <input type="text" name="title" id="title" placeholder="Title here">
                        <div class="select-date">
                           <select name="type" id="type">
                              <option value="Announcement"> Announcement </option>
                              <option value="Events"> Events </option>
                              
                           </select>
                        </div>
                     </div>
                     
                     <div class="event-desc">
                        <textarea name="desc" id="event-desc" placeholder="Announcements and events"></textarea>
                     </div>

                     <div class="submit-form">
                        <input type="url" name="link" id="link" placeholder="Url: www.example.com">
                        <input type="file" name="eventImg" id="event-img">
                        <button id="Post"> Post </button>
                        
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
                              <h1> Iska Cute </h1>
                              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate non eum nisi id vero doloribus sed ducimus nobis nesciunt quam. <a target="blank" href="#"> Learn More </a> </p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            <!-- xx ANNOUNCEMENT -->

            <!-- MAINTENANCE  -->
               <div class="maintenance-container container">
                  <div class="title-header">
                     <h2> Maintenance </h2>
                     <hr>
                  </div>

                  <div class="pages" id="pages">

                     <!-- ADD CONTENT HERE... -->
                     <div class="page-container">
                        
                        <div class="history-title page-title">
                           <h1>History</h1>
                           <img src="../../icon/down-filled-triangular-arrow.png" alt="">
                        </div>
                        
                        <div class="history-content page-content">
                           <div class="content">
                              <textarea name="history" id="history"></textarea>
                              <div class="form-input">
                                 <input type="file" name="historyImg" id="historyImg">
                                 <button id="post"> Post </button>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="page-container">
                        <div class="history-title page-title">
                           <h1> Mission and Vision </h1>
                           <img src="../../icon/down-filled-triangular-arrow.png" alt="">
                        </div>
                        <div class="history-content page-content">
                           <div class="content">
                              <textarea name="history" id="history"></textarea>
                              <div class="form-input">
                                 <select name="mv" id="mv">
                                    <option value="Mission"> Mission </option>
                                    <option value="Vision"> Vision </option>
                                 </select>
                                 <button id="post"> Post </button>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="page-container">
                        <div class="history-title page-title">
                           <h1> Strategic Direction & Shared Values </h1>
                           <img src="../../icon/down-filled-triangular-arrow.png" alt="">
                        </div>
                        <div class="history-content page-content">
                           <div class="content">
                              <textarea name="history" id="history"></textarea>
                              <div class="form-input">
                                 <select name="sdsv" id="sdsv">
                                    <option value="sd"> Strategic Direction </option>
                                    <option value="sv"> Shared Values </option>
                                 </select>

                                 <button id="post"> Post </button>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="page-container">
                        <div class="history-title page-title">
                           <h1> Executive Officials </h1>
                           <img src="../../icon/down-filled-triangular-arrow.png" alt="">
                        </div>
                        <div class="history-content page-content">
                           <div class="content">
                           
                              <div class="form-input">
                                 
                              </div>


                              <div class="form-input">
                                 <input type="file" name="historyImg" id="historyImg">
                                 <button id="post"> Post </button>
                              </div>
                           </div>
                        </div>
                     </div>

                     
                  </div>
               </div>
            <!-- xx MAINTENANCE -->

            <!-- REQUEST -->
               <div class="request-container container">
                  <div class="title-header">
                     <h2> </h2>
                     <hr>
                  </div>         
                  
                  <div class="request">
                     <div class="result">
                        <p> Result: 3 </p>
                     </div>
                  
                     <table border="0">
                        <tr>
                           <th> id </th>
                           <th> emp id </th>
                           <th> Fullname </th>
                           <th> Dept </th>
                           <th> Date </th>
                           <th> Status </th>
                           <th> Action </th>
                        </tr>

                        <tr>
                           <td> 1 </td>
                           <td> 220002 </td>
                           <td> Mark Melvin Bacabis </td>
                           <td> BSIT </td>
                           <td> 2022-05-18 4:20 PM</td>
                           <td> Pending... </td>
                           <td> <a href="#"> see details </a></td>
                        </tr>
                       
                      
                     </table>
                  </div>

                  <div class="announcement-modal" id="announcement-modal">
                     <div class="announcement-form">
                        <div class="close">
                           +
                        </div>
                        <!-- <h1> Add Admin Assistant </h1> -->
                        <div class="announcement-info">
                           <div class="announcement-title">
                              <h1> Title: Sample title </h1>
                           </div>
                           <div class="announcement-desc">
                              <h3> Description </h3>
                              <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta provident quam nobis. Ad repellat tenetur inventore excepturi nulla? Eum quas itaque sit officia incidunt ratione voluptatibus est blanditiis mollitia aperiam? Explicabo architecto nam sapiente impedit voluptate enim rem. Velit, doloribus. </p>
                           </div>
                           <div class="announcement-link">
                              <p> Url: <a href="#"> www.url.com </a> </p>
                              
                           </div>
                        </div>


                        <div class="form-button">
                           <button id="cancel"> Decline </button>
                           <button id="add"> Approve </button>
                        </div>
                     </div>
                  </div>

               </div>
            <!-- xx REQUEST -->

            <!-- APPROVAL HISTORY -->
               <div class="request-container container">
                  <div class="title-header">
                     <h2> </h2>
                     <hr>
                  </div>         
                  
                  <div class="request">
                     <div class="result">
                        <p> Result: 3 </p>
                     </div>
                  
                     <table border="0">
                        <tr>
                           
                           <th> emp id </th>
                           <th> Fullname </th>
                           <th> Announcement </th>
                           <th> Dept </th>
                           <th> Date </th>
                           <th> Status </th>
                        </tr>

                        <tr>
                         
                           <td> 220002 </td>
                           <td> Mark Melvin Bacabis </td>
                           <td> <span style="font-size: .8em;"> Lorem ipsum dolor sit amet... </span></td>
                           <td> BSIT </td>
                           <td> <span style="font-size: .8em;"> 2022-05-18 4:20 PM </span></td>
                           <td> Approved </td>
                          
                        </tr>
                     
                     </table>
                  </div>
               </div>
            <!-- xx APPROVAL HISTORY-->
         </div>
      </section>



      <section class="right-dashboard">
         <div class="right-header">
            <div class="icon-profile">
               <div class="profile-img">
                  <img src="../admin-profile/profile.png">
               </div>
               
               <h3> Mark </h3>
            </div>

            <div class="icon-setting">
               <a href="#">
                  <img src="../../icon/power-off.png" alt="">
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
<script>
   var page = document.querySelectorAll('.page-title');
   var pageContainer = document.querySelectorAll('.page-container');

      for(let j = 0; j < page.length; j++){
         page[j].addEventListener('click', function() {
            for(let i = 0; i < page.length; i++){
               if(i == j){
                  if(pageContainer[j].style.height === 'max-content'){
                     pageContainer[j].style.height = '40px';
                  }
                  else{
                     pageContainer[j].style.height = "max-content";
                  }
               }
               else{
                  pageContainer[i].style.height = "40px";
               }

               
            }
            
         });
      }
      

  


</script>
<script src="../../Javascript/admin.js"></script>
<script src="../../Javascript/calendar.js"></script>
<script src="../../Javascript/dateNow.js"></script>

</html>