const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
   type: 'doughnut',
   data: {
      labels: [
         <?php if(mysqli_num_rows($courseSel) > 0) {
            while ($code = mysqli_fetch_assoc($courseSel)){ ?>
               "<?=$code['Code']?>", 
         <?php }
         } ?>
      ],
      datasets: [{
         label: '# of Votes',
         data: [
            <?=$bsaCount?>, 
            <?=$bseceCount?>, 
            <?=$bsentCount?>, 
            <?=$bsieCount?>, 
            <?=$bsitCount?>
         ],
         backgroundColor: [
            'rgba(255, 99, 132, .6)',
            'rgba(54, 162, 235, .6)',
            'rgba(255, 206, 86, .6)',
            'rgba(75, 192, 192, .6)',
            'rgba(150, 120, 3, .6)'
         ],
         borderColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
         ],
         borderWidth: 0,
      }]
   },
   options: {
      responsive: true,
      
      plugins: {
         legend: {
            display: true,
            position: 'left'
         },
         title: {
            display: true,
            text: 'Student per Course'
         }
      }
   }
});