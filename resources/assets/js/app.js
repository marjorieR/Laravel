

$(document).ready( function(){


    init.push(function(){

        $('.date').datepicker({
            format:'dd/mm/yyyy',
            todayBtn: 'linked'
        });




        $('.wyswyg').summernote({
                height:200,
                tabsize:2,
                codemirror:{
                    theme:'monokai'
                }


            });

        $('#image').pixelFileInput(
            { placeholder:'Aucun fichier selectionné...'}
        );



        $(".js-example-tags").select2();

    });



        var easyPieChartDefaults = {
            animate: 2000,
            scaleColor: false,
            lineWidth: 6,
            lineCap: 'square',
            size: 90,
            trackColor: '#e5e5e5'
        }
        $('#easy-pie-chart-1').easyPieChart($.extend({}, easyPieChartDefaults, {
        }));
        $('#easy-pie-chart-2').easyPieChart($.extend({}, easyPieChartDefaults, {
        }));
        $('#easy-pie-chart-3').easyPieChart($.extend({}, easyPieChartDefaults, {
        }));




    $('#dashboard .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });


    //init.push(function () {
    //    $('.widget-tasks .panel-body').pixelTasks().sortable({
    //        axis: "y",
    //        handle: ".task-sort-icon",
    //        stop: function( event, ui ) {
    //
    //            ui.item.children( ".task-sort-icon" ).triggerHandler( "focusout" );
    //        }
    //    });
    //    $('#clear-completed-tasks').click(function () {
    //        $('.widget-tasks .panel-body').pixelTasks('clearCompletedTasks');
    //    });
    //});
    //
    //init.push(function () {
    //    Morris.Bar({
    //        element: 'hero-bar',
    //        data: [
    //            { device: 'New-York', geekbench: 5 },
    //            { device: 'Paris', geekbench: 8 },
    //            { device: 'San Francisco', geekbench: 3 },
    //            { device: 'Los Angeles', geekbench: 10 },
    //            { device: 'Toronto', geekbench: 15 },
    //            { device: 'Bagdad', geekbench: 9 }
    //        ],
    //        xkey: 'device',
    //        ykeys: ['geekbench'],
    //        labels: ['Villes'],
    //        barRatio: 0.4,
    //        xLabelAngle: 35,
    //        hideHover: 'auto',
    //        barColors: PixelAdmin.settings.consts.COLORS,
    //        gridLineColor: '#cfcfcf',
    //        resize: true
    //    });
    //});
    //
    //
    //init.push(function () {
    //    // Doughnut Chart Data
    //    var doughnutChartData = [{
    //        label: "Enre 18 et 25", data: 50
    //    }, {
    //        label: "Entre 25 et 35", data: 30
    //    }, {
    //        label: "Entre 35 et 45", data: 90
    //    }, {
    //        label: "Entre 45 et 60", data: 70
    //    }, {
    //        label: "Plus de 60", data: 80
    //    }];
    //    // Init Chart
    //    $('#jq-flot-pie').pixelPlot(doughnutChartData, {
    //        series: {
    //            pie: {
    //                show: true,
    //                radius: 1,
    //                innerRadius: 0.5,
    //                label: {
    //                    show: true,
    //                    radius: 3 / 4,
    //                    formatter: function (label, series) {
    //                        return '<div style="font-size:14px;text-align:center;padding:2px;color:white;">' + Math.round(series.percent) + '%</div>';
    //                    },
    //                    background: { opacity: 0 }
    //                }
    //            }
    //        }
    //    }, {
    //        height: 205
    //    });
    //});
    //
    //
    //init.push(function () {
    //    Morris.Area({
    //        element: 'hero-area',
    //        data: [
    //            { period: '2010 Q1', iphone: 2666, ipad: null, itouch: 2647 },
    //            { period: '2010 Q2', iphone: 2778, ipad: 2294, itouch: 2441 },
    //            { period: '2010 Q3', iphone: 4912, ipad: 1969, itouch: 2501 },
    //            { period: '2010 Q4', iphone: 3767, ipad: 3597, itouch: 5689 },
    //            { period: '2011 Q1', iphone: 6810, ipad: 1914, itouch: 2293 },
    //            { period: '2011 Q2', iphone: 5670, ipad: 4293, itouch: 1881 },
    //            { period: '2011 Q3', iphone: 4820, ipad: 3795, itouch: 1588 },
    //            { period: '2011 Q4', iphone: 15073, ipad: 5967, itouch: 5175 },
    //            { period: '2012 Q1', iphone: 10687, ipad: 4460, itouch: 2028 },
    //            { period: '2012 Q2', iphone: 8432, ipad: 5713, itouch: 1791 }
    //        ],
    //        xkey: 'period',
    //        ykeys: ['iphone', 'ipad', 'itouch'],
    //        labels: ['iPhone', 'iPad', 'iPod Touch'],
    //        hideHover: 'auto',
    //        lineColors: PixelAdmin.settings.consts.COLORS,
    //        fillOpacity: 0.3,
    //        behaveLikeLine: true,
    //        lineWidth: 2,
    //        pointSize: 4,
    //        gridLineColor: '#cfcfcf',
    //        resize: true
    //    });


        $.getJSON($('#hero-area').data('url'),function(data){
            var items=[];

            $.each(data,function(key,val){
                    items.push(val.firstname);
            });

            console.log(items);
        });





        $(".chat-controls-input .form-control").autosize();


});