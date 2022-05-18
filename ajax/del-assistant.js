$(document).ready(function(){
   $(document).on('click', 'button[data-role=Delete]', function(){
      var empID = $(this).data("id");
      
      document.getElementById('del-modal').style.display = 'flex';
      document.getElementById('del-modal').querySelector('h2').innerHTML = empID;   
   });

   $('#del-yes').click(function(){
      var empID = $('#del-modal .emp-id').html();

      $(".assistants table").load("../process/del-assistant.php", {
         empID:empID
      });
      $(".update-box").load("../process/del-update.php",{
         
      });
      $(".assistant-result").load("../process/cntAssistant.php",{

      });
   })

   $('#del-no').click(function(){
      document.getElementById('del-modal').style.display = 'none';
   
   })
});