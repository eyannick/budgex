// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#212121';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
    type: 'bar',  
    data: {
    labels: ["Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre"],
    datasets: [{
      label: "Revenus",
      backgroundColor: "#2e7d32",
      borderColor: "#2e7d32",
      data: [3158, 5312, 6251, 7841, 9821, 14984],
    }, {
      type: 'bar',
      label: 'Dépenses',
      backgroundColor: "#9c27b0",
      borderColor: "#9c27b0",
      data: [10000, 10, 10, 10],
    }, {
      type: 'bar',
      label: 'Reste net',
      backgroundColor: "#0dcaf0",
      borderColor: "#0dcaf0",
      data: [10000, 10, 10, 10],
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
          max: 20000,
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
