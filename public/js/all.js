

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



        $.getJSON($('#hero-area').data('url'),function(data){
            var items=[];

            $.each(data,function(key,val){
                    items.push(val.firstname);
            });

            console.log(items);
        });





        $(".chat-controls-input .form-control").autosize();


        $('.switcher').switcher({ theme: 'modern' });






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

// =================================>    SESSION FILMS FAVORIS    <======================================

    $('.switcher').click(function(e){

        var elt = $(this);

            if($(this).is(':checked')){

                $.ajax({

                    url: elt.data('url'),
                    method: "POST",
                    data: {id:elt.data('id'), action:'add', _token: elt.data('token') }

                }).done(function(){

                    console.log(elt.data('id')+' en favoris')

                });


            }else{

                $.ajax({

                    url: elt.data('url'),
                    method: "POST",
                    data: {id:elt.data('id'), action:'remove',_token: elt.data('token')}

                }).done(function(){

                    console.log( elt.data('id')+'retiré des favoris')

                });

            }



    });



// =================================>    SESSION J'AIME / J'AIME PAS  ACTEURS    <======================================



    $('.likes').click(function(e){

        e.preventDefault();
        console.log('click');

        var elt = $(this);




        if($(this).hasClass('text-success')){

            console.log('success');

        $.ajax({

            url: elt.data('url'),
            method: "POST",
            data: {id:elt.data('id'), action:'add', _token: elt.data('token') }


        }).done(function(){

            //console.log( elt.data('id')+'dans les likes');
            elt.removeClass('text-success');

        });


        }else{

            $.ajax({

                url: elt.data('url'),
                method: "POST",
                data: {id:elt.data('id'), action:'remove',_token: elt.data('token')}

            }).done(function(){
                elt.addClass('text-success');

                console.log( elt.data('id')+'retiré des likes')

            });

        }



    });




    $('.dislikes').click(function(e){

        e.preventDefault();
        console.log('click');

        var elt = $(this);



        if($(this).hasClass('text-danger')){

            console.log('success');

            $.ajax({

                url: elt.data('url'),
                method: "POST",
                data: {id:elt.data('id'), action:'add', _token: elt.data('token') }


            }).done(function(){

                console.log( elt.data('id')+'dans les dislikes');
                elt.removeClass('text-danger');

            });


        }else{

            $.ajax({

                url: elt.data('url'),
                method: "POST",
                data: {id:elt.data('id'), action:'remove',_token: elt.data('token')}

            }).done(function(){

                elt.addClass('text-danger');
                console.log( elt.data('id')+'retiré des dislikes')

            });

        }



    });



// =====================================>    SESSION ACTION BANNIR USERS    <===========================================


    $('.banni').click(function(e){

        e.preventDefault();
        console.log('Banana Click');

        var elt = $(this);


        if($(this).hasClass('btn-danger')){

            console.log('Banana Success :(');

            $.ajax({

                    url: elt.data('url'),
                    method: "POST",
                    data: {id:elt.data('id'), action:'add', _token: elt.data('token') }

                }).done(function(){

                    elt.removeClass('btn-danger');
                    elt.addClass('btn-warning');
                    elt.text("Debannir");

                    console.log(elt.data('id')+' en banni')

                });


        }else{
            console.log('Banana Success :)');
            $.ajax({

                url: elt.data('url'),
                method: "POST",
                data: {id:elt.data('id'), action:'remove',_token: elt.data('token')}

            }).done(function(){

                elt.removeClass('btn-warning').removeAttr('disable');
                elt.addClass('btn-danger');
                elt.text("Bannir")


            });

        }



    });
















});
//# sourceMappingURL=all.js.map