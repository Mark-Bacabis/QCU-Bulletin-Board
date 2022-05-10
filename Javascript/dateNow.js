var timeDisplay = document.getElementById('time');
var dateDisplay = document.getElementById('date');

function getDateNow(){
   var date = new Date();
   var year = date.getFullYear();
   var month = date.getMonth();
   var day = date.getDate();

   var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']

   for(var i = 0; i < months.length; i++){

      if(i == month){
         dateDisplay.innerText = months[i] + ' ' + day + ', ' + year;
      }
   }
  

}

function getTimeNow(){
   var time = new Date();
   var hour = time.getHours();
   var min = time.getMinutes();
   var sec = time.getSeconds();
   var h = time.getHours();
   var pe = "AM";

      if(hour > 12){
         hour = hour - 12;
      }
      if (hour == 0){
         hour = 12;
      }
      if (hour < 10){
         hour = '0' + hour;
      }
      if (min < 10){
         min = '0' + min;
      }
      if (sec < 10){
         sec = '0' + sec;
      }
      // 23 >= 12 && 23 <= 23
      if (h >= 12 && h <= 23){
         pe = 'PM';
      }

      // 1 <= 11 && 1 == 24
      if (h <= 11 && h == 24){
         pe = 'AM';
      }


      timeDisplay .innerText = hour + ':' + min + ':' + sec + ' ' + pe;

}
getDateNow();
setInterval(getDateNow, 500);

getTimeNow();
setInterval(getTimeNow, 1000);
