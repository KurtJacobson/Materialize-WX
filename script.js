console.log("Loading Script")

//if($("div").attr("id") == "temp_guage")
if(false)
{

    console.log("Loading TempGuage")

    Highcharts.chart('temp_guage', {

            chart: {
                type: 'gauge',
                width: null,
                margin: [0, 0, 0, 0],
                alignTicks: false,
                plotBackgroundColor: null,
                plotBackgroundImage: null,
                plotBorderWidth: 0,
                plotShadow: false
            },

            title: {
                text: null
            },

            credits: {
                enabled: false
            },

            pane: {
                startAngle: -150,
                endAngle: 150
            },

            yAxis: [{ // Fahrenheit dial
                    min: 0,
                    max: 120,
                    tickPosition: 'outside',
                    lineColor: '#933',
                    lineWidth: 2,
                    minorTickPosition: 'outside',
                    tickColor: '#933',
                    minorTickColor: '#933',
                    tickLength: 5,
                    minorTickLength: 5,
                    labels: {
                        distance: 12,
                        rotation: 'auto'
                    },
                    offset: -20,
                    endOnTick: false
                },
                { // Centigrade dial
                    min: -17.77,
                    max: 48.88,
                    lineColor: '#339',
                    tickColor: '#339',
                    minorTickColor: '#339',
                    offset: -25,
                    lineWidth: 2,
                    labels: {
                        distance: -20,
                        rotation: 'auto'
                    },
                    tickLength: 5,
                    minorTickLength: 5,
                    endOnTick: false
                }
            ],

            series: [{
                name: 'Temp',
                color: 'black',
                zIndex: 2, // Bring main needle to top
                data: [60],
                dataLabels: {
                    formatter: function () {
                        var degf = this.y,
                            degc = Math.round((degf - 32) * 5 / 9); // Convert °F to °C
                        return '<span style="color:#933">' + degf + ' °F</span><br/>' +
                            '<span style="color:#339">' + degc + ' °C</span>';
                    },
                    backgroundColor: null,
                    y: 60,
                },
                tooltip: {
                    valueSuffix: ' °F'
                },
                animation: {
                    duration: 0
                },
            }, { // Max temp needle
                name: 'Max',
                color: 'red',
                data: [60],
                dataLabels: {
                    enabled: false
                },
                tooltip: {
                    valueSuffix: ' °F'
                },
                animation: {
                    duration: 0
                },
                dial: {
                    borderWidth: 1,
                    //borderColor: '#9A0000',
                    backgroundColor: '#CC0000',
                }
            }, { // Min temp needle
                name: 'Min',
                color: 'blue',
                data: [60],
                dataLabels: {
                    enabled: false
                },
                tooltip: {
                    valueSuffix: ' °F'
                },
                animation: {
                    duration: 0
                },
                dial: {
                    borderWidth: 1,
                    //borderColor: '#1B4684',
                    backgroundColor: '#3465A4',
                }
            }]
        },

        // Add some life
        function (chart) {
            setInterval(function () {
                if (chart.axes) { // not destroyed

                    var point = chart.series[0].points[0],
                        newVal,
                        inc = Math.round((Math.random() - 0.5) * 20);

                    // Don't exceed scale limits
                    newVal = point.y + inc;
                    if (newVal < 0 || newVal > 120) {
                        newVal = point.y - inc;
                    }

                    // Update the main pointer
                    point.update(newVal);

                    // Update the Max pointer
                    var maxPoint = chart.series[1].points[0];
                    if (maxPoint.y < newVal) {
                        maxPoint.update(newVal);
                    }

                    // Update the Min pointer
                    var minPoint = chart.series[2].points[0];
                    if (minPoint.y > newVal) {
                        minPoint.update(newVal);
                    }
                }
            }, 500);
        });
}


/**************************************************************
Wind barbs plot
***************************************************************/
//if($("div").attr("id") == "wind_barbs")
if(true)
{
    console.log("Loading W");

    Highcharts.chart('wind_barbs', {

        title: {
            text: ''
        },

        credits: {
        enabled: false
        },

        legend: {
        enabled: false
        },

        xAxis: {
            type: 'datetime',
            offset: 40
        },

        plotOptions: {
            series: {
                pointStart: Date.UTC(2017, 0, 29),
                pointInterval: 36e5 // 1 hr
            }
        },

        series: [{
            type: 'windbarb',
            data: [
                [9.8, 177.9],
                [10.1, 177.2],
                [11.3, 179.7],
                [10.9, 175.5],
                [9.3, 159.9],
                [8.8, 159.6],
                [7.8, 162.6],
                [5.6, 186.2],
                [6.8, 146.0],
                [6.4, 139.9],
                [3.1, 180.2],
                [4.3, 177.6],
                [5.3, 191.8],
                [6.3, 173.1],
                [7.7, 140.2],
                [8.5, 136.1],
                [9.4, 142.9],
                [10.0, 140.4],
                [5.3, 142.1],
                [3.8, 141.0],
                [3.3, 116.5],
                [1.5, 327.5],
                [0.1, 1.1],
                [1.2, 11.1]
            ],
            name: 'Wind',
            color: Highcharts.getOptions().colors[1],
            showInLegend: false,
            tooltip: {
                valueSuffix: ' mph'
            }
        }, {
            type: 'area',
            keys: ['y', 'rotation'], // rotation is not used here
            data: [
                [9.8, 177.9],
                [10.1, 177.2],
                [11.3, 179.7],
                [10.9, 175.5],
                [9.3, 159.9],
                [8.8, 159.6],
                [7.8, 162.6],
                [5.6, 186.2],
                [6.8, 146.0],
                [6.4, 139.9],
                [3.1, 180.2],
                [4.3, 177.6],
                [5.3, 191.8],
                [6.3, 173.1],
                [7.7, 140.2],
                [8.5, 136.1],
                [9.4, 142.9],
                [10.0, 140.4],
                [5.3, 142.1],
                [3.8, 141.0],
                [3.3, 116.5],
                [1.5, 327.5],
                [0.1, 1.1],
                [1.2, 11.1]
            ],
            color: Highcharts.getOptions().colors[0],
            fillColor: {
                linearGradient: { x1: 0, x2: 0, y1: 0, y2: 1 },
                stops: [
                    [0, Highcharts.getOptions().colors[0]],
                    [
                        1,
                        Highcharts.color(Highcharts.getOptions().colors[0])
                            .setOpacity(0.25).get()
                    ]
                ]
            },
            name: 'Wind speed',
            tooltip: {
                valueSuffix: ' mph'
            }
        }]

    });
}

if(false){
Highcharts.chart('wind_direction', {
        chart: {
            type: 'gauge',
            margin: [0, 0, 0, 0],
            plotBackgroundColor: null,
            plotBackgroundImage: null,
            plotBorderWidth: 0,
            plotShadow: false
        },

        title: {
            text: null
        },

        credits: {
            enabled: false
        },

        pane: {
            startAngle: 0,
            endAngle: 360,
            background: [{
                backgroundColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, '#FFF'],
                        [1, '#333']
                    ]
                },
                //borderWidth: 1,
                //outerRadius: '110%'
            }, {
                backgroundColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, '#333'],
                        [1, '#FFF']
                    ]
                },
                //borderWidth: 4,
                //outerRadius: '10%'
            }, {
                // default background
            }, {
                backgroundColor: '#DDD',
                borderWidth: 4,
                outerRadius: '105%',
                innerRadius: '100%'
            }]
        },
        // the value axis
        yAxis: [{
            title: {
                text: '',
            },
            min: 0,
            max: 360,
            lineColor: '#333',
            offset: -10,
            tickInterval: 20,
            tickWidth: 2,
            tickPosition: 'outside',
            tickLength: 10,
            tickColor: '#333',
            minorTickInterval: 5,
            minorTickWidth: 1,
            minorTickLength: 10,
            minorTickPosition: 'outside',
            minorTickColor: '#666',
            labels: {
                step: 1,
                distance: -12,
                rotation: 'auto'
            },
        }, {
            title: {
                text: '',
            },
            type: 'category',
            categories: ['N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW', 'N'],
            min: 0,
            max: 8,
            lineColor: '#ddd',
            offset: -50,
            tickInterval: 1,
            tickWidth: 1,
            tickPosition: 'outside',
            tickLength: 40, // =50-10
            tickColor: '#ddd',
            minorTickInterval: 1,
            minorTickWidth: 0,
            minorTickLength: 50,
            minorTickPosition: 'inside',
            minorTickColor: '#0f0',
            labels: {
                step: 1,
                distance: 2,
                rotation: 'auto'
            },
            endOnTick: true,
        }, {
            type: 'number',
            title: {
                text: '',
            },
            labels: {
                enabled: false,
            },
            min: 0,
            max: 12,
            lineColor: '#ddd',
            offset: -50,
            tickInterval: 10,
            tickWidth: 1,
            tickPosition: 'inside',
            tickLength: 45,
            tickColor: '#ddd',
            minorTickWidth: 0,
            endOnTick: false,
        }],

        series: [{
            name: 'Bearing',
            color: 'black',
            yAxis: 0,
            data: [0],
            dial: {
                radius: '88%',
                baseWidth: 10,
                baseLength: '0%',
                rearLength: 0,
                borderWidth: 1,
                borderColor: '#9A0000',
                backgroundColor: '#CC0000',
            },
            tooltip: {
                valueSuffix: '°'
            }
        }, {
            name: 'Bearing',
            color: 'black',
            data: [0],
            yAxis: 0,
            dial: {
                radius: '-88%',
                baseWidth: 10,
                baseLength: '0%',
                rearLength: 0,
                borderWidth: 1,
                borderColor: '#1B4684',
                backgroundColor: '#3465A4',
            },
            tooltip: {
                valueSuffix: '°'
            }
        }]

    },
    // Add some life
    function (chart) {
        if (!chart.renderer.forExport) {
            setInterval(function () {
                var point = chart.series[0].points[0];
                var newVal;
                var inc = Math.round((Math.random() - 0.5) * 60);
                newVal = point.y + inc;
                if (newVal < 0 || newVal > 360) {
                    newVal = point.y - inc;
                }
                console.log(newVal);
                point.update(newVal);
                var point2 = chart.series[1].points[0];
                point2.update(newVal);
            }, 1000);
        }
    });
}
