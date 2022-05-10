var announceBtn = document.querySelector('#announcement');
   var newsBtn = document.querySelector('#news');
   var eventsBtn = document.querySelector('#events');

   announceBtn.addEventListener('click', ()=>{
      announceBtn.classList.add('selected-event');
      newsBtn.classList.remove('selected-event');
      eventsBtn.classList.remove('selected-event');
      
   });

   newsBtn.addEventListener('click', ()=>{
      announceBtn.classList.remove('selected-event');
      newsBtn.classList.add('selected-event');
      eventsBtn.classList.remove('selected-event');
   });

   eventsBtn.addEventListener('click', ()=>{
      announceBtn.classList.remove('selected-event');
      newsBtn.classList.remove('selected-event');
      eventsBtn.classList.add('selected-event');
   });