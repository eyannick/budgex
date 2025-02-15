// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#212121';

// Account view Bar Chart
var ctx = document.getElementById("AccountViewBarChart");
var myLineChart = new Chart(ctx, {
    type: 'bar',  
    data: {
    labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"],
    datasets: [{
      type: 'bar',
      label: 'Solde du mois ',
      backgroundColor: "#6200ea",
      borderColor: "#6200ea",
      data: [3600, 3800, 4000, 4200, 4400, 4600, 5000, 5200, 5400, 5600, 6000, 6200],
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'Mois'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 12
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: 10000,
          maxTicksLimit: 6
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    },  
    tooltips: {
      callbacks: {
        label: function(tooltipItems, data) {
          return data.datasets[tooltipItems.datasetIndex].label +': ' + tooltipItems.yLabel + ' €';
        }
      }
    },
  }
});
