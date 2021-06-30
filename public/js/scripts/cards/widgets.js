/*=========================================================================================
    File Name: widgets.js
    Description: widgets page content with different types of cards
    ----------------------------------------------------------------------------------------
    Item Name: Frest HTML Admin Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(document).ready(function () {

  var $primary = '#5A8DEE';
  var $success = '#39DA8A';
  var $danger = '#FF5B5C';
  var $warning = '#FDAC41';
  var $info = '#00CFDD';
  var $label_color = '#304156';
  var $danger_light = '#FFC1C1';
  var $gray_light = '#828D99';
  var $bg_light = "#f2f4f4";
  var assetPath = $('html').attr('data-asset-path');
 
  // Half Radial Chart
  // -----------------
  var radialHalfChartOptions = {
    chart: {
      height: 240,
      width: 310,
      type: "radialBar",
    },
    series: [67],
    labels: ["842k"],
    colors: [$warning],
    plotOptions: {
      radialBar: {
        hollow: {
          margin: -5,
          size: '85%',
          image: assetPath + 'images/cards/face-regular-24.png',
          imageWidth: 32,
          imageHeight: 32,
          imageClipped: false,
        },
        startAngle: -120,
        endAngle: 130,
        track: {
          background: [$bg_light],
          startAngle: -100,
          endAngle: 120,
        },
        dataLabels: {
          name: {
            show: true,
            fontSize: "34px",
            offsetY: 50,
            color: $label_color
          },
          value: {
            fontSize: "28px",
            show: false
          }
        }
      }
    },
    stroke: {
      lineCap: "round"
    },
    responsive: [{
      breakpoint: 1200,
      options: {
        chart: {
          width: 290,
          height:250
        }
      }
    },
    {
      breakpoint: 1024,
      options: {
        chart: {
          width: 250,
          height:250
        }
      }
    },
    {
      breakpoint: 991,
      options: {
        chart: {
          width: 300,
          height:270
        }
      }
    },
    {
      breakpoint: 768,
      options: {
        chart: {
          width: 650,
          height:300
        }
      }
    },
    {
      breakpoint: 568,
      options: {
        chart: {
          width: 450,
          height:270
        }
      }
    },
    {
      breakpoint: 450,
      options: {
        chart: {
          width: 300,
          height:250
        }
      }
    },
    {
      breakpoint: 360,
      options: {
        chart: {
          width: 220,
          height:270
        }
      }
    }]
  };

  var radialHalfChart = new ApexCharts(
    document.querySelector("#radial-chart-half"),
    radialHalfChartOptions
  );
  radialHalfChart.render();


  // Donut Chart Spending
  // ---------------------
  var donustSpendingChart = {
    chart: {
      width: 270,
      type: 'donut',
    },
    dataLabels: {
      enabled: false
    },
    series: [44, 55, 13, 33],
    labels: ["Public Transport", "Cafe & Resturants", "Business Projects", "Traveling & Vocation"],
    stroke: {
      width: 0
    },
    colors: [$danger, $success, $warning, $primary],
    plotOptions: {
      pie: {
        donut: {
          size: '95%',
          labels: {
            show: true,
            name: {
              show: true,
              fontFamily: 'Rubik',
              color: $gray_light,
              offsetY: 30
            },
            value: {
              show: true,
              fontSize: '32px',
              fontFamily: 'Rubik',
              color: undefined,
              offsetY: -20,
              formatter: function (val) {
                return val
              }
            },
            total: {
              show: true,
              label: 'Total',
              color: $gray_light,
              formatter: function (w) {
                return w.globals.seriesTotals.reduce(function (a, b) {
                  return a + b
                }, 0)
              }
            }
          }
        }
      }
    },
    legend: {
      show: false
    },
    responsive: [{
      breakpoint: 1200,
      options: {
        chart: {
          width: 290,
          height:250
        }
      }
    },
    {
      breakpoint: 1024,
      options: {
        chart: {
          width: 250,
          height:250
        }
      }
    },
    {
      breakpoint: 991,
      options: {
        chart: {
          width: 300,
          height:270
        }
      }
    },
    {
      breakpoint: 768,
      options: {
        chart: {
          width: 650,
          height:300
        }
      }
    },
    {
      breakpoint: 568,
      options: {
        chart: {
          width: 450,
          height:270
        }
      }
    },
    {
      breakpoint: 450,
      options: {
        chart: {
          width: 300,
          height:250
        }
      }
    },
    {
      breakpoint: 360,
      options: {
        chart: {
          width: 190,
          height:190
        }
      }
    }]
  }

  var donustChartSpending = new ApexCharts(
    document.querySelector("#donut-chart-spending"),
    donustSpendingChart
  );

  donustChartSpending.render();


  // Donut Chart Statistics
  // -----------------------

  var donustChartStatistics = {
    chart: {
      width: 280,
      type: 'donut'
    },
    dataLabels: {
      enabled: false
    },
    series: [70, 30, 40],
    labels: ["Installation", "Page Views", "Active Users"],
    stroke: {
      width: 0
    },
    colors: [$primary, $warning, $danger],
    plotOptions: {
      pie: {
        donut: {
          size: '95%',
          labels: {
            show: true,
            name: {
              show: true,
              fontSize: '22px',
              fontFamily: 'Rubik',
              color: $gray_light,
              offsetY: 20
            },
            value: {
              show: true,
              fontSize: '32px',
              fontFamily: 'Rubik',
              color: undefined,
              offsetY: -30,
              formatter: function (val) {
                return val
              }
            },
            total: {
              show: true,
              label: 'Copies',
              color: $gray_light,
              formatter: function (w) {
                return w.globals.seriesTotals.reduce(function (a, b) {
                  return a + b
                }, 0)
              }
            }
          }
        }
      }
    },
    legend: {
      show: false
    },
    responsive: [{
      breakpoint: 1200,
      options: {
        chart: {
          width: 290,
          height:250
        }
      }
    },
    {
      breakpoint: 1024,
      options: {
        chart: {
          width: 250,
          height:250
        }
      }
    },
    {
      breakpoint: 991,
      options: {
        chart: {
          width: 300,
          height:270
        }
      }
    },
    {
      breakpoint: 768,
      options: {
        chart: {
          width: 650,
          height:300
        }
      }
    },
    {
      breakpoint: 568,
      options: {
        chart: {
          width: 450,
          height:270
        }
      }
    },
    {
      breakpoint: 450,
      options: {
        chart: {
          width: 300,
          height:250
        }
      }
    },
    {
      breakpoint: 360,
      options: {
        chart: {
          width: 190,
          height:190
        }
      }
    }]
  }

  var donustChartStatistics = new ApexCharts(
    document.querySelector("#donut-chart-statistics"),
    donustChartStatistics
  );
  donustChartStatistics.render();

  // Daily Sales States - Heat Map Chart
  // -----------------------------------
  function generateData(count, yrange) {
    var i = 0,
      series = [];
    while (i < count) {
      var x = 'w' + (i + 1).toString(),
        y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

      series.push({
        x: x,
        y: y
      });
      i++;
    }
    return series;
  }
  var heatChartOptions = {
    chart: {
      height: 300,
      type: 'heatmap',
      toolbar: {
        show: false
      }
    },
    plotOptions: {
      heatmap: {
        enableShades: false,

        colorScale: {
          ranges: [{
              from: 0,
              to: 10,
              color: '#90B3F3'
            },
            {
              from: 11,
              to: 20,
              color: '#7EA6F1'
            },
            {
              from: 21,
              to: 30,
              color: '#6B9AEF'
            },
            {
              from: 31,
              to: 40,
              color: '#598DEE'
            },
            {
              from: 41,
              to: 50,
              color: '#4680EC'
            },
            {
              from: 51,
              to: 60,
              color: '#3474EA'

            }
          ]
        }
      }
    },
    dataLabels: {
      enabled: false
    },
    series: [{
        name: 'Sunday',
        data: generateData(24, {
          min: 0,
          max: 60
        })
      },
      {
        name: 'Monday',
        data: generateData(24, {
          min: 0,
          max: 60
        })
      },
      {
        name: 'Tuesday',
        data: generateData(24, {
          min: 0,
          max: 60
        })
      },
      {
        name: 'Wednesday',
        data: generateData(24, {
          min: 0,
          max: 60
        })
      },
      {
        name: 'Thursday',
        data: generateData(24, {
          min: 0,
          max: 60
        })
      },
      {
        name: 'Friday',
        data: generateData(24, {
          min: 0,
          max: 60
        })
      },
      {
        name: 'Saturday',
        data: generateData(24, {
          min: 0,
          max: 60
        })
      }
    ],
    xaxis: {
      labels: {
        show: false
      },
      axisBorder: {
        show: false
      },
      axisTicks: {
        show: false
      }
    },
    yaxis: {
      labels: {
        style: {
          color: $gray_light,
          fontSize: '15px'
        }
      }
    }
  }
  var heatChart = new ApexCharts(
    document.querySelector("#sales-heatmap-chart"),
    heatChartOptions);
  heatChart.render();




});

