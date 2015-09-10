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




});