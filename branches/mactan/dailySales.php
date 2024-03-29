<?php
  require "../../dbConnection.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <style>

form{
    max-width: 100%;
    padding: 12px;
  }

  input[type=date]{
    padding: 5px 13px;
  }
  input[type=submit]{
    padding: 8px 13px;
    cursor: pointer;
    background-color: #424242;
    color: white;
    border: none;
  }
  input[type=submit]:hover{
    background-color: #2e2e2e;
  }

  .currency_box:nth-child(1), .currency_box:nth-child(3), .currency_box:nth-child(4){
    max-width: 100%;
    padding: 12px;
    /* margin-bottom: 34px;
    margin-top: 12px; */
    text-align: center;
  }
 .currency_box:nth-child(3){
    color: gray;
  }


  .dailyStyle{
    position: relative;
    padding: 3px;
  }

  .session_box{
    padding: 12px;
    text-align: center;
    position: absolute;
    background-color: green!important;
  }

  .cnversation{
    max-width: 100%;
    padding: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    
  }

  span{
    color: red;
    font-size: 20px;
    margin-right: 12px;
  }

    #chart_div{
      position: absolute;
    width: 400px;
    height: 400px;
    bottom: 0;
    right: 220px;
    }

    #myChart2{
      display: block;
    box-sizing: border-box;
    height: 320px!important;
    width: 400px;
    }
  </style>

</head>
   
<body>

<form method="GET" class="form_container" >
  <input type="date" name="dates" value="<?php if(isset($_GET['dates'])){echo $_GET['dates'];};?>">
  <input type="submit" name="submit" value="submit">
</form>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.2.1/chart.min.js" integrity="sha512-v3ygConQmvH0QehvQa6gSvTE2VdBZ6wkLOlmK7Mcy2mZ0ZF9saNbbk19QeaoTHdWIEiTlWmrwAL4hS8ElnGFbA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->





<?php


if(isset($_GET['dates'])){

  if(empty($_GET['dates'])){
   echo $sample = "Please Select Dates";
   echo $_GET['dates'];
    exit();
  }

  $datesCalendar = strval($_GET['dates']);
  // if(empty($datesCalendar)){
  //   echo $sample = $_SESSION['no_input'] = "Select Date";
  // }else {

    $sql = "SELECT * FROM mactandailysales_foottr WHERE dates_server LIKE CONCAT('%',?,'%')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $datesCalendar);
    $stmt->execute();
    $result = $stmt->get_result();
  
    if($result->num_rows > 0){
      while($row = $result->fetch_array()):
  
        $daily_sales = $row["daily_sales"];
        $daily_plan = $row["daily_plan"];
        $last_y_dailysales = $row["last_y_dailysales"];
        $trans_count = $row["trans_count"];
        $foot_trfic = $row["foot_trfic"];
        
        $total = $trans_count / $foot_trfic;  
        $total_count_rate = number_format((float) $total,'2','.','');
      

        
      
?>






<script src="js/chart.min.js"></script>

<script src="js/chart.js"></script>

<div class="dailyStyle">
<div class="currency_box">MTD Daily Sales Comparison</div>
  <canvas id="myChart"></canvas>
  <div class="currency_box">Sales in Pesos</div>
  <div class="currency_box">MTD Foot Traffic vs Transaction Count</div>
  <canvas id="myChart2"></canvas>
  <div class="cnversation">Conversion Rate: <span><?php echo $total_count_rate; ?></span></div>
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
        data: [<?= $daily_plan; ?>],
        backgroundColor: [
          'rgb(255 99 132 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

        {
        label: 'Daily Sales Actual',
        data: [<?= $daily_sales; ?>],
        backgroundColor: [
          'rgb(75 192 192 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

      {
        label: 'Last Year',
        data: [<?= $last_y_dailysales; ?>],
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

<!-- ================================================================ -->
<!-- ================================================================ -->
<!-- ================================================================ -->


<script>
  const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {

    type: 'bar',
    data: {
      labels: [''],
     
      datasets: [
        {
        label: 'Foot Traffic',
        data: [<?= $foot_trfic; ?>],
        backgroundColor: [
          'rgb(54 162 235 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

        {
        label: 'Transaction',
        data: [<?= $trans_count; ?>],
        backgroundColor: [
          'rgb(255 99 132 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

      {
        // label: 'Daily Sales3',
        data: [0],
        backgroundColor: [
          // 'rgb(255 159 64 / 86%)'
          'gray'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      }
    ]
    
    },


    options: {
      indexAxis: 'x',
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
    
  });
</script>



<?php

endwhile;

} else {
  echo "No data found";
}
} else {

  $sql = "SELECT * FROM mactandailysales_foottr ORDER BY 	dates_server DESC";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->get_result();

    $row = $result->fetch_array();
    $daily_sales = $row["daily_sales"];
    $daily_plan = $row["daily_plan"];
    $last_y_dailysales = $row["last_y_dailysales"];
    $trans_count = $row["trans_count"];
    $foot_trfic = $row["foot_trfic"];

    $total = $trans_count / $foot_trfic;  
    $total_count_rate = number_format((float) $total,'2','.','');
    
  
?>


<script src="js/chart.min.js"></script>
<script src="js/chart.js"></script>

<div class="dailyStyle">
  <div class="currency_box">MTD Daily Sales Comparison</div>
  <canvas id="myChart"></canvas>
  <div class="currency_box">Sales in Pesos</div>
  <div class="currency_box">MTD Foot Traffic vs Transaction Count</div>
  <canvas id="myChart2"></canvas>
  <div class="cnversation">Conversion Rate: <span><?php echo $total_count_rate; ?></span></div>
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
        data: [<?= $daily_plan; ?>],
        backgroundColor: [
          'rgb(255 99 132 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

        {
        label: 'Daily Sales Actual',
        data: [<?= $daily_sales; ?>],
        backgroundColor: [
          'rgb(75 192 192 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

      {
        label: 'Last Year',
        data: [<?= $last_y_dailysales; ?>],
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

<!-- ================================================================ -->
<!-- ================================================================ -->
<!-- ================================================================ -->


<script>
  const ctx2 = document.getElementById('myChart2');

  new Chart(ctx2, {

    type: 'bar',
    data: {
      labels: [''],
     
      datasets: [
        {
        label: 'Transaction',
        data: [<?= $trans_count; ?>],
        backgroundColor: [
          'rgb(255 99 132 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },
      
        {
        label: 'Foot Traffic',
        data: [<?= $foot_trfic; ?>],
        backgroundColor: [
          'rgb(54 162 235 / 86%)'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      },

      {
        // label: 'Daily Sales3',
        data: [0],
        backgroundColor: [
          // 'rgb(255 159 64 / 86%)' // uncomment this if the daily sales is ok
          'gray'
        ],
        // borderColor: '#36A2EB',
        borderWidth: 1,
        borderRadius: 5
      }
    ]
    
    },


    options: {
      indexAxis: 'x',
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
    
  });
</script>






<?php

};
?>




</body>
</html>