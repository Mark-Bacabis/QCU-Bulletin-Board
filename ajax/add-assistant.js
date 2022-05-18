$(document).ready(function(){
   $("#assistant-add").click(function(){
      var btnAdd = $("#assistant-add").val();
      var fname = $("#fname").val();
      var lname = $("#lname").val();
      var email = $("#email").val();
      var cNum = $("#cNum").val();

      if(fname == ''){
         $(".fname .errMessage").load("../process/validation.php", {

         });
      }
      else if(lname == ''){
         $(".lname .errMessage").load("../process/validation.php", {

         });
      }
      else if(email == ''){
         $(".email .errMessage").load("../process/validation.php", {

         });
      }
      else if(cNum == ''){
         $(".cNum .errMessage").load("../process/validation.php", {

         });
      }
      
      else{
         $(".assistants table").load("../process/add-assistant.php", {
            btnAdd: btnAdd,
            fname: fname,
            lname: lname,
            email: email,
            cNum: cNum
         });
         $(".update-box").load("../process/add-update.php",{
         
         });
         $(".assistant-result").load("../process/cntAssistant.php",{

         });
      }

     
   });
});