// LINKS

var navLinks = document.querySelectorAll('.nav-link');
var secNavLinks = document.querySelector('.secondary-nav-about');
var dropIcon = document.querySelector('.drop-down-about img');


// CONTAINERS 

const dashboard = document.getElementById('dashboard-container');
const announcement = document.getElementById('events-container');
const historyCon = document.getElementById('history-container');
const mv = document.getElementById('mv-container');




navLinks[0].addEventListener('click', ()=>{
   navLinks[0].classList.add('selected');
   navLinks[1].classList.remove('selected');
   navLinks[2].classList.remove('selected');

   dashboard.style.display = 'flex'
   announcement.style.display = 'none';
   historyCon.style.display = 'none';
   mv.style.display = 'none';
});


navLinks[1].addEventListener('click', ()=>{
   navLinks[0].classList.remove('selected');
   navLinks[1].classList.add('selected');
   navLinks[2].classList.remove('selected');

   
   dashboard.style.display = 'none'
   announcement.style.display = 'flex';
   historyCon.style.display = 'none';
   mv.style.display = 'none';
});


navLinks[2].addEventListener('click', ()=>{
   navLinks[0].classList.remove('selected');
   navLinks[1].classList.remove('selected');
   navLinks[2].classList.add('selected');

   secNavLinks.style.display = 'block';
   dropIcon.style.transform = 'rotate(0deg)';

   dashboard.style.display = 'none'
   announcement.style.display = 'none';
   mv.style.display = 'flex';
   
});

