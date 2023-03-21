<?php require "../../dbConnection.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script type="text/javascript" src="../js/loader.js"></script>
    <script src="https://use.fontawesome.com/bf2a0481ce.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>



  
</head>
<body>
    
<!-- --------------------------------------------- -->

<!-- ================================================ -->
<!-- this is the product category table division  -->
<!-- ================================================ -->

<?php
  $sql = "SELECT * FROM product_category_table";
    $stmt = $conn->prepare($sql);
    // $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    while($datas = $result->fetch_array()):
  ?>

<script>
  
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
    ['Category', 'Sales'],
    ['Appliance',     <?= $datas['appliance']; ?>],
    ['Automotive',      <?= $datas['automotive']; ?>],
    ['Bathroom',  <?= $datas['bathroom']; ?>],
    ['Building Materials', <?= $datas['building_materials']; ?>],
    ['Consumable',    <?= $datas['consumable']; ?>],
    ['Electrical', <?= $datas['electrical']; ?>],
    ['Faucet & Bath Mixer',    <?= $datas['faucet_bath_mixer']; ?>],
    ['Furniture', <?= $datas['furniture']; ?>],
    ['Garden Outdoor',    <?= $datas['garden_outdoor']; ?>],
    ['Home Improvement',    <?= $datas['home_improvement']; ?>],
    ['Kitchen', <?= $datas['kitchen']; ?>],
    ['Sanitarywares', <?= $datas['sanitarywares']; ?>],
    ['Service',    <?= $datas['services']; ?>],
    ['Tile & Stone', <?= $datas['tile_stone']; ?>]
]);

var options = {
    title: 'Sales By Product Category:'  
};

var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
}
</script>
<?php endwhile; ?>

<!-- ======================================= -->

<?php
    $sql = "SELECT * FROM chbc_sales";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();

    while($datas = $result->fetch_array()):
    $date = $datas['date_identifier'];
    $banilad = $datas['banilad'];
?>

<script src="https://www.gstatic.com/charts/loader.js">
  google.charts.load('current', {'packages':['line']});
google.charts.setOnLoadCallback(drawChart);
function drawChart() {

var data = new google.visualization.DataTable();
    data.addColumn('number', 'Day');
    data.addColumn('number', 'Banilad');


data.addRows([

[<?= $date; ?>,  <?= $banilad; ?>]

]);

<?php endwhile; ?>

var options = {
    chart: {
    title: 'Sales By Branch',
    subtitle: 'in millions of pesos (PHP)'
 },
    width: 1200,
    height: 500
};

var chart = new google.charts.Line(document.getElementById('linechart_material'));

chart.draw(data, google.charts.Line.convertOptions(options));
}

</script>

<?php
       
       $sql = "SELECT * FROM trafic_count_table ORDER BY id ASC";
       $stmt = $conn->prepare($sql);
       $stmt->execute();
       $result = $stmt->get_result();
     
     while($datas = $result->fetch_array()):

       $banilad = $datas['banilad_acc_transc'];
       $banilad2 = $datas['banilad_acc_foot'];
     ?>

<script>
   google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Branch', 'Transaction', 'Foot'],
          ['Banilad', <?= $banilad; ?>, <?= $banilad2; ?>],
  
        ]);

        var options = {
          chart: {
            title: 'Transaction adn Foot trafic',
            subtitle: 'Transaction and Foot trafic: January 2023',
          },
          bars: 'vertical',
          vAxis: {format: 'decimal'},
          height: 400,
          colors: ['#1b9e77', '#d95f02', '#7570b3'],
        };

        var chart = new google.charts.Bar(document.getElementById('chart_div'));

        chart.draw(data, google.charts.Bar.convertOptions(options));

        var btns = document.getElementById('btn-group');

        btns.onclick = function (e) {

          if (e.target.tagName === 'BUTTON') {
            options.vAxis.format = e.target.id === 'none' ? '' : e.target.id;
            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        }
      }
</script>

      <?php endwhile; ?>



<!-- =================================== -->
<!-- this is the end of the column chart material divission -->
<!-- =================================== -->
<main>
  <div class="box-top"></div>
  <!-- this is the side nav start ----------------------- -->
  <div class="btnOpen"></div>
      <div class="side-nav">
      <a href="../index.php"><div class="logo-container">
          <img src="../images/chbc-logo.png" alt="Chbc Logo" srcset="">
        </div>
      </a>
        <a href="../index.php"><div class="dashBox">
          <span>
            <img src="../images/meter.png" alt="">
          </span>
            Dashboard
        </div>
        </a>

        <div class="components">
          BRANCHES
        </div>
        <div class="branches-container">
          <ul>
            <li class="active">Banilad</li>
            <li>Mactan</li>
            <li>Consolacion</li>
            <li>Minglanilla</li>
            <li>N. Bacalso</li>
            <li>Carcar</li>
          </ul>
        </div>

          <div class="btn-hide">
            <div class="btn-box">
              <div class="hide-btn"></div>
            </div>
          </div>
      </div>
      <script src="../js/index.js"></script>
  <!-- this is the side nav end ----------------------- -->
  <div class="main-container">
    <h1>BANILAD BRANCH CHART</h1>
    <hr>
    <div id="linechart_material" ></div>
    <!-- ------------------------------------------------ -->
    <div class="main-box">
      <div class="box ban">
        <div id="piechart" style="width: 79%; height: 600px; margin-top: 344px"></div> <!-- this is the data from piechart -->
      </div>
      <div class="box ban">
      <div id="chart_div" style="width: 400px;  position: absolute; bottom: -196px; left: 0;"></div><!-- this is the data from column chart material -->
      </div>
    </div>
    <!-- ------------------------------------------------ -->
  </div>
</main>

<!-- =========================================================== -->
<!-- this is the footer division -->
<!-- =========================================================== -->

<footer>© 2023 Copyright MIS Deparment</footer>

</body>
</html>