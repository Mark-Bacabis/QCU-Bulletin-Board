$(document).ready(function(){
   // NEW PASSWORD
   $('#newPass').keyup(function(){
      var newPass = $('#newPass').val();

      $('#message1').load('../Process/changePass.php',{
         newPass:newPass
      });
   });

   // CONFIRM PASSWORD
   $('#confirmPass').keyup(function(){
      var newPassCon = $('#newPass').val();
      var confirmPass = $('#confirmPass').val();

      $('#message2').load('../Process/changePass.php',{
         newPassCon:newPassCon,
         confirmPass:confirmPass
      });
   });

   // CHANGE BUTTON
   $('#changeBtn').click(function(){
      var changeBtn = $('#changeBtn').val();

      var currPassVal = $('#currentPass').val();
      var newPassVal = $('#newPass').val();
      var confirmVal = $('#confirmPass').val();
      
      $('#update-message').load('../Process/changePass.php',{
         changeBtn:changeBtn,
         currPassVal:currPassVal,
         newPassVal:newPassVal,
         confirmPassVal:confirmVal
      });
   });
});
