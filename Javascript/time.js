
let time = 200;


const cd = document.getElementById('countdown');
const otp = document.getElementById('resend');

setInterval(Timer, 1000);



function Timer(){
   let seconds = time;

   if(seconds == 0){
      cd.innerHTML = 0;
      otp.disabled = false;
      otp.style.background = '#4454a4';
   }
   else{
      cd.innerHTML = `${seconds}` + 's';
      time--;
   }
}





