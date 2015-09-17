

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


    //
    //
    //$('#dashboard .panel-body > div').slimScroll({ height: 300, alwaysVisible: true, color: '#888',allowPageScroll: true });
    //
    //
    //init.push(function () {
    //    $('.widget-tasks .panel-body').pixelTasks().sortable({
    //        axis: "y",
    //        handle: ".task-sort-icon",
    //        stop: function( event, ui ) {
    //            // IE doesn't register the blur when sorting
    //            // so trigger focusout handlers to remove .ui-state-focus
    //            ui.item.children( ".task-sort-icon" ).triggerHandler( "focusout" );
    //        }
    //    });
    //    $('#clear-completed-tasks').click(function () {
    //        $('.widget-tasks .panel-body').pixelTasks('clearCompletedTasks');
    //    });
    //});

});