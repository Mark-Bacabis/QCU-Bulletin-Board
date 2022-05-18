// LINKS
var navLinks = document.querySelectorAll('.nav-link');

// BUTTONS
var assistantButton = document.getElementById('addAssistant');
var assistantCancel = document.getElementById('assistant-cancel');

var headButton = document.getElementById('addHead');
var headCancel = document.getElementById('head-cancel');

// CONTAINERS 
var containers = document.querySelectorAll('.container');
var assistantsModal = document.getElementById('assistant-modal');
var headModal = document.getElementById('head-modal');


navLinks[0].addEventListener('click', ()=>{

   for(let i = 0; i < containers.length; i++){
      if(i == 0){
         navLinks[i].classList.add('selected');
         containers[i].style.display = 'flex';
      }
      else{
         containers[i].style.display = 'none';
         navLinks[i].classList.remove('selected');
      }
   }
});


navLinks[1].addEventListener('click', ()=>{
   for(let i = 0; i < containers.length; i++){
      if(i == 1){
         navLinks[i].classList.add('selected');
         containers[i].style.display = 'flex';
      }
      else{
         containers[i].style.display = 'none';
         navLinks[i].classList.remove('selected');
      }
   }
});


navLinks[2].addEventListener('click', ()=>{
   for(let i = 0; i < containers.length; i++){
      if(i == 2){
         navLinks[i].classList.add('selected');
         containers[i].style.display = 'flex';
      }
      else{
         containers[i].style.display = 'none';
         navLinks[i].classList.remove('selected');
      }
   }
   
});


navLinks[3].addEventListener('click', ()=>{
   for(let i = 0; i < containers.length; i++){
      if(i == 3){
         navLinks[i].classList.add('selected');
         containers[i].style.display = 'flex';
      }
      else{
         containers[i].style.display = 'none';
         navLinks[i].classList.remove('selected');
      }
   }
   
});


navLinks[4].addEventListener('click', ()=>{
   
   for(let i = 0; i < containers.length; i++){
      if(i == 4){
         navLinks[i].classList.add('selected');
         containers[i].style.display = 'flex';
      }
      else{
         containers[i].style.display = 'none';
         navLinks[i].classList.remove('selected');
      }
   }
   
});




assistantButton.addEventListener('click', ()=>{
   assistantsModal.style.display = 'flex';
});

assistantCancel.addEventListener('click', ()=>{
   assistantsModal.style.display = 'none';
});


headButton.addEventListener('click', ()=>{
   headModal.style.display = 'flex';
});
headCancel.addEventListener('click', ()=>{
   headModal.style.display = 'none';
});

