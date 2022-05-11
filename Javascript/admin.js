// LINKS

var navLinks = document.querySelectorAll('.nav-link');
var secNavLinks = document.querySelector('.secondary-nav-about');
var dropIcon = document.querySelector('.drop-down-about img');

let isClicked = false;

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

   isClicked = true;

   if(isClicked == true){
      secNavLinks.style.display = 'block';
      dropIcon.style.transform = 'rotate(0deg)';
      isClicked = false;
   }
   else{
      secNavLinks.style.display = 'none';
      dropIcon.style.transform = 'rotate(180deg)';
   }
   
});

