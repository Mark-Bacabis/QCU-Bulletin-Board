$(document).ready(function(){
   $(document).on('click', 'button[data-role=Details]', function(){
      var empID = $(this).data("id");
      
      $("#announcement-modal .announcement-info").load("../../process/announce-details.php",{
         id: empID
      });

      $("#add").click(function(){
         var addBtn = $("#add").val();
         var cancelBtn = $("#cancel").val();
         $(".request table").load("../../process/approved.php",{
            addBtn:addBtn,
            cancelBtn: cancelBtn,
            id: empID
         });
         document.getElementById('announcement-modal').style.display = 'none';
      });

      $("#cancel").click(function(){
         var cancelBtn = $("#cancel").val();
         var addBtn = $("#add").val();
         $(".request table").load("../../process/approved.php",{
            addBtn:addBtn,
            cancelBtn: cancelBtn,
            id: empID
         });
         document.getElementById('announcement-modal').style.display = 'none';
      });
      document.getElementById('announcement-modal').style.display = 'flex';
   });

  

  
});