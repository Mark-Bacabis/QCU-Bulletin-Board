$(document).ready(function(){
   $(document).on('click', 'button[data-role=Delete-head]', function(){
      var empID = $(this).data("id");
      
      document.getElementById('del-modal-head').style.display = 'flex';
      document.getElementById('del-modal-head').querySelector('h2').innerHTML = empID;   
   });

   $('#del-yes-head').click(function(){
      var empID = $('#del-modal-head .emp-id').html();

      $(".heads table").load("../process/del-head.php", {
         empID:empID
      });
      $(".update-box-head").load("../process/del-update.php",{
         
      });
      $(".head-result").load("../process/cntFaculty.php",{

      });
   })

   $('#del-no-head').click(function(){
      document.getElementById('del-modal-head').style.display = 'none';
   
   })
});