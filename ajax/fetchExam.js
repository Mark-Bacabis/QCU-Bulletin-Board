$(document).ready(function(){
   $('#addDate').click(function(){
      var btnAdd = $('#addDate').val();
      var date = $('#dates').val();
      var term = $('#term').val();
      $('.exam-box').load('process/examQuery.php', {
         btnAdd: btnAdd, 
         date : date,
         term: term
      });
   });
});