$(document).ready(function(){
   $('#yearl').change(function(){
      var yl = $('#yearl').val();
      var course = $('#course').val();

      $('.students-box').load('process/studentFetch.php',{
         course: course,
         yl:yl
      });

      $('.result').load('process/countStud.php', {
         course: course,
         yl:yl
      })
   });

   $('#course').change(function(){
      var yl = $('#yearl').val();
      var course = $('#course').val();

      $('.students-box').load('process/studentFetch.php',{
         course: course,
         yl:yl
      });

      $('.result').load('process/countStud.php', {
         course: course,
         yl:yl
      })
   });


   $('#searchStud').keyup(function(){
      var search = $('#searchStud').val();
         $('.students-box').load('process/searchStud.php',{
            search:search
         });

      $('.result').load('process/countStud.php', {
         search:search
      })
   });
});