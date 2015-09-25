// ==============  GRAPH RÉPARTITION DES FILMS PAR CATEGORIES  GRAPH RÉPARTITION DES FILMS PAR CATEGORIES ============\\

$(function () {

    $.getJSON($('#container').data('tabe'),function(data){

        $('#container').highcharts({
            chart: {
                type: 'pie',
                options3d: {
                    enabled: true,
                    alpha: 45,
                    beta: 0
                }
            },
            title: {
                text: 'Répartion des films par categories'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Browser share',
                data: data
            }]
        });
    });


// =======================  GRAPH RÉPARTITION NB SEANCES/MOIS  GRAPH RÉPARTITION NB SEANCES/MOIS  ====================\\

    $.getJSON($('#containe').data('tab'),function(data){

        $('#containe').highcharts({
            chart: {
                type: 'column',
                margin:100,
                options3d: {
                    enabled: true,
                    alpha: 10,
                    beta: 25,
                    depth: 70
                }
            },
            title: {
                text: 'Répartition fu nombre de séances par mois'
            },
            subtitle: {
                text: 'Nombre de séances sorties et diffusées par mois'
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            xAxis: {
                categories: Highcharts.getOptions().lang.shortMonths
            },
            yAxis: {
                title: {
                    text: null
                }
            },
            series: [{
                name: 'Sales',
                data: data
            }]
        });

  });



// ==========  {{ GRAPH HISTORIQUE BUDGET/CATEGORIES/ANNEE }}{{ GRAPH HISTORIQUE BUDGET/CATEGORIES/ANNEE }}  =========\\

    $('#contain').highcharts({
        chart: {
            type: 'bar'
        },
        title: {
            text: 'Historique Budget par categories de films'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['Africa', 'America', 'Asia', 'Europe', 'Oceania'],
            title: {
                text: null
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Population (millions)',
                align: 'high'
            },
            labels: {
                overflow: 'justify'
            }
        },
        tooltip: {
            valueSuffix: ' millions'
        },
        plotOptions: {
            bar: {
                dataLabels: {
                    enabled: true
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'top',
            x: -40,
            y: 80,
            floating: true,
            borderWidth: 1,
            backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
            shadow: true
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Year 1800',
            data: [107, 31, 635, 203, 2]
        }, {
            name: 'Year 1900',
            data: [133, 156, 947, 408, 6]
        }, {
            name: 'Year 2012',
            data: [1052, 954, 4250, 740, 38]
        }]
    });




});