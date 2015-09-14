

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
        console.log('Mon evenement!');

        var elt = $(this);

        console.log(elt);
        console.log(elt.attr('action'));
        console.log(elt.serialize());


        $.ajax({
            url: elt.attr('action'),
            method: "POST", // Methode d'envoi de ma requete
            data: elt.serialize()
            // data: envoyer des données
        }).done(function() {
            elt.parents('.panel').fadeOut('slow');
            $.growl.warning({ title: "Bravo!", message: "Film ajouté!", duration: 5000 });

        });
        console.log('coucou');

    });


});
//# sourceMappingURL=all.js.map