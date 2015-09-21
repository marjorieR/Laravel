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