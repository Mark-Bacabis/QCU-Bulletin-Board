// LINKS

var navLinks = document.querySelectorAll('.nav-link');

// CONTAINERS 
var containers = document.querySelectorAll('.container');


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


