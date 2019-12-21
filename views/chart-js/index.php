<?php
  $this->title = 'My first chart';

$script = <<< JS
var speedCanvas = document.getElementById("speedChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;

var dataFirst = {
    label: "Car A - Speed (mph)",
    data: [0, 100, 75, 20, 20, 55, 40],
    lineTension: 0,
    fill: false,
    borderColor: '#00ffff'
  };

var dataSecond = {
    label: "Car B - Speed (mph)",
    data: [20, 15, 60, 60, 65, 30, 70],
    lineTension: 0,
    fill: false,
  borderColor: 'blue'
  };

var speedData = {
  labels: ["0s", "10s", "20s", "30s", "40s", "50s", "60s"],
  datasets: [dataFirst, dataSecond]
};

var chartOptions = {
  legend: {
    display: true,
    position: 'top',
    labels: {
      boxWidth: 80,
      fontColor: 'black'
    }
  }
};

var lineChart = new Chart(speedCanvas, {
  type: 'line',
  data: speedData,
  options: chartOptions
});

JS;
$this->registerJs($script, yii\web\View::POS_READY);

  ?>
  <div id="me-chart">
  	  <h1><?=$this->title ?></h1>
  	  <canvas id="speedChart" width="600" height="400"></canvas>

  </div>