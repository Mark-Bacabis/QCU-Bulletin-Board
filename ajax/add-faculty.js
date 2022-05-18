$(document).ready(function(){
   $("#head-add").click(function(){
      var btnAdd = $("#head-add").val();
      var fname = $("#head-fname").val();
      var lname = $("#head-lname").val();
      var email = $("#head-email").val();
      var dept = $("#head-dept").val();

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
      else{
         $(".heads table").load("../process/add-faculty.php", {
            btnAdd: btnAdd,
            fname: fname,
            lname: lname,
            email: email,
            dept: dept
         });
         $(".update-box-head").load("../process/add-update.php",{
         
         });
         $(".head-result").load("../process/cntFaculty.php",{

         });
      }

     
   });
});