

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
$(document).ready(function(){



    $('table#list .btn-danger').click(function(e){

        e.preventDefault(); //annule l'événement href de mes liens

        console.log('vous avez cliquez dessus');

        var elt = $(this);  // je recupere le liens sur lequel j'ai cliqué

        //model ajax
        $.ajax({

            url: elt.attr('href') //url de mon du lien sur lequel j'ai cliqué

        }).done(function(){

            elt.parents('tr').fadeOut('slow')
        })


    });



    // Ciblage de mon bon element
    // greffe de mon evenement

    $('#actionslist').change(function(e){

        console.log('Coucou, tu veux mon projet');

        var selection = $(this).val(); //recupere la valeur de l'option selectionn"
        console.log(selection);


        //si je veux utiliser l'action 1 qui est de supprimer
        if(selection=="1"){

            // boucle jquery : pour chaque bouton coché
            $('#list :checked').each(function(index){

               // Envoyer une requete ajax de suppression pour chaque film coché

                var elt = $(this);
                $.ajax({

                    url: elt.attr('data-url') //url de mon du lien sur lequel j'ai cliqué

                }).done(function(){

                    elt.parents('tr').fadeOut('slow')
                })

            });
        }
    });



    $('table#list .btn-info').click(function(e){

        e.preventDefault(); //annule l'événement href de mes liens

        console.log('vous avez cliquez dessus');

        var elt = $(this);  // je recupere le liens sur lequel j'ai cliqué

        //model ajax
        $.ajax({

            url: elt.attr('href') //url de mon du lien sur lequel j'ai cliqué

        }).done(function(){

            elt.parents('tr').fadeOut('slow')
        })


    });



    $('form#addMovie').submit(function(e){
        e.preventDefault();
        //console.log('Mon evenement!');

        var elt = $(this);

        //console.log(elt);
       // console.log(elt.attr('action'));
       // console.log(elt.serialize());


        $.ajax({
            url: elt.attr('action'),
            method: "POST", // Methode d'envoi de ma requete
            data: elt.serialize()
            // data: envoyer des données
        }).done(function() {
            elt.parents('.panel').fadeOut('slow');
            $.growl.warning({ title: "Bravo!", message: "Film ajouté!", duration: 5000 });

        });
        //console.log('coucou');

    });


    $('form#addTasks').submit(function(e){
        e.preventDefault();

        console.log('coucou');

        var elt = $(this);
        console.log(elt);

        $.ajax({
            url: elt.attr('action'),
            method: "POST",
            data: elt.serialize()

        }).done(function() {
            elt.parents('.task').fadeIn('slow');

            $.growl.warning({ title: "Bravo!", message: "Task ajouté!", duration: 5000 });

            document.getElementById("addTasks").reset();





        });



    });

    $('#dashajax').on("click",".checkbox", function(e){

        e.preventDefault(); //annule l'événement href de mes liens

        console.log('vous avez cliquez dessus');

        var elt = $(this);  // je recupere le liens sur lequel j'ai cliqué

        //model ajax
        $.ajax({

            url: elt.attr('href') //url de mon du lien sur lequel j'ai cliqué

        }).done(function(){

            //elt.parents('div').fadeOut('slow')
        })


    });











});
$(document).ready(function(){

    setInterval(function () {
        console.log('OK');

        //appel ajax
        $.ajax({
            url: $('#panelajax').attr('data-url')

        }).done(function(data){
            $('#dashboard').html(data);
        });


        $.ajax({
            url: $('#sessions').attr('data-url')

        }).done(function(data){
            $('#dashboardajax').html(data);
        });

        $.ajax({
            url: $('#tasks').attr('data-url')

        }).done(function(data){
            $('#dashajax').html(data);
        });





    }, 3000);









});
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

});

$(function () {
    $('#containe').highcharts({
        chart: {
            type: 'column',
            margin:75,
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
            data: [2, 3, null, 4, 0, 5, 1, 4, 6, 3]
        }]
    });
});
//# sourceMappingURL=all.js.map