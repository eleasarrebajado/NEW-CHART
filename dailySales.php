<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <style>
    #chart_div{
      position: absolute;
    width: 400px;
    height: 400px;
    bottom: 0;
    right: 220px;
    }
  </style>
</head>
   
<body>


<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

<script src="js/chart.min.js"></script>
<script src="js/chart.js"></script>

<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {

    type: 'bar',
    data: {
      labels: [''],
     
      datasets: [
        {
        label: 'Daily Plan',
        data: [12],
        backgroundColor: [
          'rgb(255 99 132 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

        {
        label: 'Daily Sales Actual',
        data: [09],
        backgroundColor: [
          'rgb(75 192 192 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

      {
        label: 'Last Year',
        data: [23],
        backgroundColor: [
          'rgb(255 159 64 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      }
    ]
    
    },


    options: {
      indexAxis: 'y',
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
    
  });
</script>

</div>

</body>
</html>