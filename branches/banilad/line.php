<?php require '../../dbConnection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      #myChart{
        margin-top: 0px;
      }

    .mychartTitle{
      max-width: 100%;
      padding: 12px;
      /* margin-bottom: 34px; */
      margin-top: 64px;
      text-align: center;
    }
    </style>
</head>
<body>
<?php 

$sql = "SELECT * FROM baniladTable";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

  while($row = $result->fetch_array()):
    $prevSales1 = $row['salesPrev1'];
    $prevSales2 = $row['salesPrev2'];
    $prevSales3 = $row['salesPrev3'];
    $prevSales4 = $row['salesPrev4'];
    $prevSales5 = $row['salesPrev5'];
    $prevSales6 = $row['salesPrev6'];
    $prevSales7 = $row['salesPrev7'];
    $prevSales8 = $row['salesPrev8'];
    $prevSales9 = $row['salesPrev9'];
    $prevSales10 = $row['salesPrev10'];
    $prevSales11 = $row['salesPrev11'];
    $prevSales12= $row['salesPrev12'];
    $currentSales1 = $row['salesCurrent1'];
    $currentSales2 = $row['salesCurrent2'];
    $currentSales3 = $row['salesCurrent3'];
    $currentSales4 = $row['salesCurrent4'];
    $currentSales5 = $row['salesCurrent5'];
    $currentSales6 = $row['salesCurrent6'];
    $currentSales7 = $row['salesCurrent7'];
    $currentSales8 = $row['salesCurrent8'];
    $currentSales9 = $row['salesCurrent9'];
    $currentSales10= $row['salesCurrent10'];
    $currentSales11 = $row['salesCurrent11'];
    $currentSales12 = $row['salesCurrent12'];
  
  ?> 


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div>
  <div class="mychartTitle">Monthly Sales Comparison</div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

  const ctx = document.getElementById('myChart');

  new Chart(ctx, {


    type: 'line',
    data: {
      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
      datasets: [

      

        {
        label: 'Sales 2023',
        data: [<?= $currentSales1; ?>, <?= $currentSales2; ?>, <?= $currentSales3; ?>, <?= $currentSales4; ?>, <?= $currentSales5; ?>, <?= $currentSales6; ?>,
        <?= $currentSales7; ?>, <?= $currentSales8; ?>, <?= $currentSales9; ?>, <?= $currentSales10; ?>, <?= $currentSales11; ?>, <?= $currentSales12; ?>],
        borderColor: 'rgb(75 192 192 / 86%)',
        backgroundColor: [
          'rgb(75 192 192 / 86%)'
        ],
        pointStyle: 'circle',
      pointRadius: 10,
      pointHoverRadius: 15,
        borderWidth: 2
      }, 

      {
        label: 'Sales 2022',
        data: [<?= $prevSales1; ?>, <?= $prevSales2; ?>, <?= $prevSales3; ?>, <?= $prevSales4; ?>, <?= $prevSales5; ?>, <?= $prevSales6; ?>, <?= $prevSales7; ?>,
         <?= $prevSales8; ?>, <?= $prevSales9; ?>, <?= $prevSales10; ?>, <?= $prevSales11; ?>, <?= $prevSales12; ?>],
        borderColor: 'rgb(255 159 64 / 86%)',
        backgroundColor: [
          'rgb(255 159 64 / 86%)'
        ],
        pointStyle: 'circle',
      pointRadius: 10,
      pointHoverRadius: 15,
        borderWidth: 2

      }
    ]
    },

    <?php 
    endwhile; 
    ?> 
  
    options: {
      scales: {
        y: {
          beginAtZero: false
        }
      }
    }
    
  });
</script>
 
</body>
</html>