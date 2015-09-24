$(document).ready(function(){
console.log('je suis la');

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


        //$.ajax({
        //    url: $('#chat').attr('data-url')
        //
        //}).done(function(data){
        //    $('#boardajax').html(data);
        //});


    }, 3000);










});
//# sourceMappingURL=realtime.js.map