$(document).ready(function() {
   $('#yl').change(function(){
      var yl = $('#yl').val();
      var sem = $('#sem').val();
      
      $('#course-box').load('../Process/courseAjax.php', {
         yl : yl,
         sem : sem
      });
   });

   $('#sem').change(function(){
      var yl = $('#yl').val();
      var sem = $('#sem').val();

      $('#course-box').load('../Process/courseAjax.php', {
         yl : yl,
         sem : sem
      });
   });
});