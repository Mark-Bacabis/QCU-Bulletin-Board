$(document).ready(function(){
   $('#announcement').click(function(){
      var announceBtn = $('#announcement').val();
      $('#output-container').load('process/events.php', {
         announceBtn:announceBtn,
      });
   });
   $('#news').click(function(){
      var newsBtn = $('#news').val();
      $('#output-container').load('process/events.php', {
         newsBtn:newsBtn
      });
   });

   $('#events').click(function(){
      var eventsBtn = $('#events').val();
      $('#output-container').load('process/events.php', {
         eventsBtn:eventsBtn
      });
   });
});






function disableImg(){
   var type = $('#type').val();
   var img = document.getElementById('event-img');

   if(type === 'Announcement'){
     img.disabled = true;
   }else{
      img.disabled = false;
   }
}

function Post(){
   var imgFile = $('#event-img').prop('files')[0];
  
   var btnPost = $('#Post').val();  
   var title = $('#title').val();
   var type = $('#type').val();
   var date = $('#dateEvent').val();
   var desc = $('#event-desc').val();
   var link = $('#link').val();
   
   var form_data = new FormData();
   form_data.append("btnPost", btnPost);
   form_data.append("title", title);
   form_data.append("type", type);
   form_data.append("date", date);
   form_data.append("desc",  desc);
   form_data.append("link", link);
   form_data.append("image", imgFile);
   

   $.ajax({
      url: 'process/events.php',
      type: 'POST',
      dataType: 'script',
      cache: false,
      contentType: false,
      processData: false,
      data: form_data,

      success: function(data, status){
         $('#output-container').html(data);
      }
   });
}

