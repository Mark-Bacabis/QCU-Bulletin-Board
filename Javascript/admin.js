// CONTAINERS
const dashboardContainer = document.getElementById('dashboard-container');
const studentContainer = document.getElementById('student-container');
const courseContainer = document.getElementById('course-container');
const examContainer = document.getElementById('exam-sched-container');
const eventsContainer = document.getElementById('events-container');

// CHARTS
const doughnut = document.querySelector('.doughnut-box');
const pie = document.querySelector('.pie-box');
const charts = document.querySelector('.charts-container');

// LINK BUTTONS IN SIDE BAR DASHBOARD
const dashboardLink = document.getElementById('link-dashboard');
const studentLink = document.getElementById('link-student');
const courseLink = document.getElementById('link-courses');
const examLink = document.getElementById('link-exam');
//const subjectLink = document.getElementById('link-subject');
const eventLink = document.getElementById('link-events');

// LINK BUTTONS IN SIDE BAR DASHBOARD MINIMIZE
const dashboardLinkmob = document.getElementById('link-dashboard-mob');
const studentLinkmob = document.getElementById('link-student-mob');
const courseLinkmob = document.getElementById('link-courses-mob');
const examLinkmob = document.getElementById('link-exam-mob');
//const subjectLinkmob = document.getElementById('link-subject-mob');
const eventLinkmob = document.getElementById('link-events-mob');


// selected link
const selected = document.getElementById('selected');
const selectedmob = document.getElementById('selected-mob');

// burger icon
const burgerIconMin = document.getElementById('burger-icon');
const burgerIconMax = document.getElementById('burger-icon-max');


// side bar container
const sideBarMin = document.querySelector('.left-dashboard-minimize');
const sideBarMax = document.querySelector('.left-dashboard');
const centerContainer = document.querySelector('.center-information');
const rightContainer = document.querySelector('.right-dashboard');



// minimize/maximize side bar event
burgerIconMax.addEventListener('click', (e) => {

   rightContainer.style.width = '25%';
   sideBarMax.style.width = '20%';
   centerContainer.style.width = '55%';
   sideBarMin.style.display = 'none';
   sideBarMax.style.display = 'flex';

   doughnut.style.width = '48%';
   pie.style.width = '48%';
   charts.style.justifyContent = 'space-between';
  
});

burgerIconMin.addEventListener('click', (e) => {
   rightContainer.style.width = '341.5px%';
   sideBarMax.style.width = '10%';
   centerContainer.style.width = '73%';
   sideBarMin.style.display = 'flex';
   sideBarMax.style.display = 'none';

   doughnut.style.width = '40%';
   pie.style.width = '40%';
   charts.style.justifyContent = 'space-evenly';
});




// LINK EVENTS MAX
dashboardLink.addEventListener('click', (e)=>{
   selected.style.top = '0%';
   dashboardLink.style.filter = 'invert(1)';
   studentLink.style.filter = 'invert(0)';
   courseLink.style.filter = 'invert(0)';
   examLink.style.filter = 'invert(0)';
   //subjectLink.style.filter = 'invert(0)';
   eventLink.style.filter = 'invert(0)';

   dashboardContainer.style.display = 'flex';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'none'
   eventsContainer.style.display = 'none';
});

studentLink.addEventListener('click', (e)=>{
   selected.style.top = '20%';

   dashboardLink.style.filter = 'invert(0)';
   studentLink.style.filter = 'invert(1)';
   courseLink.style.filter = 'invert(0)';
   examLink.style.filter = 'invert(0)';
   //subjectLink.style.filter = 'invert(0)';
   eventLink.style.filter = 'invert(0)';
   
   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'flex';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'none'
   eventsContainer.style.display = 'none';
   
});

courseLink.addEventListener('click', (e)=>{
   selected.style.top = '40%';

   dashboardLink.style.filter = 'invert(0)';
   studentLink.style.filter = 'invert(0)';
   courseLink.style.filter = 'invert(1)';
   examLink.style.filter = 'invert(0)';
   //subjectLink.style.filter = 'invert(0)';
   eventLink.style.filter = 'invert(0)';
   

   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'flex';
   examContainer.style.display = 'none'
   eventsContainer.style.display = 'none';

});

examLink.addEventListener('click', (e)=>{
   selected.style.top = '60%';

   dashboardLink.style.filter = 'invert(0)';
   studentLink.style.filter = 'invert(0)';
   courseLink.style.filter = 'invert(0)';
   examLink.style.filter = 'invert(1)';
   //subjectLink.style.filter = 'invert(0)';
   eventLink.style.filter = 'invert(0)';

   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'flex'
   eventsContainer.style.display = 'none';
   
});

/*subjectLink.addEventListener('click', (e)=>{
   selected.style.top = '66.54%';

   dashboardLink.style.filter = 'invert(0)';
   studentLink.style.filter = 'invert(0)';
   courseLink.style.filter = 'invert(0)';
   examLink.style.filter = 'invert(0)';
   subjectLink.style.filter = 'invert(1)';
   eventLink.style.filter = 'invert(0)';

   
   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'none';
   eventsContainer.style.display = 'none';
   
}); */

eventLink.addEventListener('click', (e)=>{
   selected.style.top = '80%';

   dashboardLink.style.filter = 'invert(0)';
   studentLink.style.filter = 'invert(0)';
   courseLink.style.filter = 'invert(0)';
   examLink.style.filter = 'invert(0)';
   //subjectLink.style.filter = 'invert(0)';
   eventLink.style.filter = 'invert(1)';

   
   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'none';
   eventsContainer.style.display = 'flex';
  
   
});






// LINK EVENTS MIN
dashboardLinkmob.addEventListener('click', (e)=>{
   selectedmob.style.top = '0%';
   
   dashboardLinkmob.style.filter = 'invert(1)';
   studentLinkmob.style.filter = 'invert(0)';
   courseLinkmob.style.filter = 'invert(0)';
   examLinkmob.style.filter = 'invert(0)';
   //subjectLinkmob.style.filter = 'invert(0)';
   eventLinkmob.style.filter = 'invert(0)';
   
   dashboardContainer.style.display = 'flex';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'none'
   eventsContainer.style.display = 'none';

});

studentLinkmob.addEventListener('click', (e)=>{
   selectedmob.style.top = '20%';

   dashboardLinkmob.style.filter = 'invert(0)';
   studentLinkmob.style.filter = 'invert(1)';
   courseLinkmob.style.filter = 'invert(0)';
   examLinkmob.style.filter = 'invert(0)';
   //subjectLinkmob.style.filter = 'invert(0)';
   eventLinkmob.style.filter = 'invert(0)';

   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'flex';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'none'
   eventsContainer.style.display = 'none';

});

courseLinkmob.addEventListener('click', (e)=>{
   selectedmob.style.top = '40%';

   dashboardLinkmob.style.filter = 'invert(0)';
   studentLinkmob.style.filter = 'invert(0)';
   courseLinkmob.style.filter = 'invert(1)';
   examLinkmob.style.filter = 'invert(0)';
   //subjectLinkmob.style.filter = 'invert(0)';
   eventLinkmob.style.filter = 'invert(0)';
   
   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'flex';
   examContainer.style.display = 'none'
   eventsContainer.style.display = 'none';
   
});

examLinkmob.addEventListener('click', (e)=>{
   selectedmob.style.top = '60%';

   dashboardLinkmob.style.filter = 'invert(0)';
   studentLinkmob.style.filter = 'invert(0)';
   courseLinkmob.style.filter = 'invert(0)';
   examLinkmob.style.filter = 'invert(1)';
   //subjectLinkmob.style.filter = 'invert(0)';
   eventLinkmob.style.filter = 'invert(0)';

   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'flex'
   eventsContainer.style.display = 'none';
   
});

/*subjectLinkmob.addEventListener('click', (e)=>{
   selectedmob.style.top = '66.54%';

   dashboardLinkmob.style.filter = 'invert(0)';
   studentLinkmob.style.filter = 'invert(0)';
   courseLinkmob.style.filter = 'invert(0)';
   examLinkmob.style.filter = 'invert(0)';
   subjectLinkmob.style.filter = 'invert(1)';
   eventLinkmob.style.filter = 'invert(0)';


      
   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'none';
   eventsContainer.style.display = 'none';
   
});*/

eventLinkmob.addEventListener('click', (e)=>{
   selectedmob.style.top = '80%';

   dashboardLinkmob.style.filter = 'invert(0)';
   studentLinkmob.style.filter = 'invert(0)';
   courseLinkmob.style.filter = 'invert(0)';
   examLinkmob.style.filter = 'invert(0)';
   //subjectLinkmob.style.filter = 'invert(0)';
   eventLinkmob.style.filter = 'invert(1)';

   dashboardContainer.style.display = 'none';
   studentContainer.style.display = 'none';
   courseContainer.style.display = 'none';
   examContainer.style.display = 'none';
   eventsContainer.style.display = 'flex';
   
});








