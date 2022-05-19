$(document).ready(function(){
   $(document).on('click', 'button[data-role=Details]', function(){
      var empID = $(this).data("id");

      $(".announcement-info").load("../../process/announce-details.php",{
         id: empID
      });

      document.getElementById('announcement-modal').style.display = 'flex';
   });

  
});