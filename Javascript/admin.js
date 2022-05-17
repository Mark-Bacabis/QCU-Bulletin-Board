// LINKS

var navLinks = document.querySelectorAll('.nav-link');


// CONTAINERS 

const dashboard = document.getElementById('dashboard-container');



navLinks[0].addEventListener('click', ()=>{
   navLinks[0].classList.add('selected');
   navLinks[1].classList.remove('selected');
   navLinks[2].classList.remove('selected');
});


navLinks[1].addEventListener('click', ()=>{
   navLinks[0].classList.remove('selected');
   navLinks[1].classList.add('selected');
   navLinks[2].classList.remove('selected');

});


navLinks[2].addEventListener('click', ()=>{
   navLinks[0].classList.remove('selected');
   navLinks[1].classList.remove('selected');
   navLinks[2].classList.add('selected');
   
});

