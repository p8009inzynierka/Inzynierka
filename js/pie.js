var randomScalingFactor = function() {
    return Math.round(Math.random() * 100);
};
var lineChartData = {
    labels: ["01-06", "02-06", "03-06", "04-06", "05-06", "06-06", "07-06", "08-06", "09-06", "10-06"],
    datasets: [{
        label: "Liczba odwiedzin",
        borderColor: window.chartColors.black, // kolor linii
        backgroundColor: window.chartColors.blue, //kolor kropek
        fill: true,
        data: [100, 210, 150, 200, 324, 321, 222, 543, 223, 432],
        yAxisID: "y-axis-1",
    }]
};

var config = {
    type: 'pie',
    data: {
        datasets: [{
            data: [100, 210, 150, 200, 324],
            backgroundColor: [
                window.chartColors.red,
                window.chartColors.orange,
                window.chartColors.yellow,
                window.chartColors.green,
                window.chartColors.blue,
            ],
            label: 'Dataset 1'
        }],
        labels: ["eu.pl", "chartowo.pl", "suchylas.pl", "winogrady.eu", "xyz.pl"],
    },
    options: {
        responsive: true
    }
};

window.onload = function() {
    var ctx = document.getElementById("chart-area").getContext("2d");
    window.myPie = new Chart(ctx, config);

    var ctx = document.getElementById("canvas").getContext("2d");
    window.myLine = Chart.Line(ctx, {
        data: lineChartData,
        options: {
            responsive: true,
            hoverMode: 'index',
            stacked: false,
            title:{
                display: true,
                text:'Statystyka odwiedzin'
            },
            scales: {
                yAxes: [{
                    type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                    display: true,
                    position: "left",
                    id: "y-axis-1",
                }, {

                    // grid line settings
                    gridLines: {
                        drawOnChartArea: true, // only want the grid lines for one axis to show up
                    },
                }],
            }
        }
    });
};

document.getElementById('randomizeData').addEventListener('click', function() {
    config.data.datasets.forEach(function(dataset) {
        dataset.data = dataset.data.map(function() {
            return randomScalingFactor();
        });
    });

    window.myPie.update();
});

var colorNames = Object.keys(window.chartColors);
document.getElementById('addDataset').addEventListener('click', function() {
    var newDataset = {
        backgroundColor: [],
        data: [],
        label: 'New dataset ' + config.data.datasets.length,
    };

    for (var index = 0; index < config.data.labels.length; ++index) {
        newDataset.data.push(randomScalingFactor());

        var colorName = colorNames[index % colorNames.length];;
        var newColor = window.chartColors[colorName];
        newDataset.backgroundColor.push(newColor);
    }

    config.data.datasets.push(newDataset);
    window.myPie.update();
});


document.getElementById('removeDataset').addEventListener('click', function() {
    config.data.datasets.splice(0, 1);
    window.myPie.update();
});


