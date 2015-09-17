

var latlng = new google.maps.LatLng(45.75722,  4.89888);

var options = {
    zoom: 10,
    center: latlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};



var carte = new google.maps.Map(document.getElementById("map"), options);





$(document).ready(function() {


    var geocoder = new google.maps.Geocoder();

    $('marker').each(function (index) {

        var address = $(this).attr('data-ville');
        var title = $(this).attr('data-title');
        var images = $(this).attr('data-images');
        var sessions = $(this).attr('data-sessions');



        geocoder.geocode({'address' : address},function(results,status){
            if (status === google.maps.GeocoderStatus.OK){


                var marker = new google.maps.Marker({
                    map : carte,
                    position: results[0].geometry.location

                });

                var infowindow = new google.maps.InfoWindow({

                    content: "<div class='alert alert-info'><h2>"+title+"</h2><img src='"+images+"' alt='' style='width:50px;height:50px;' class='rounded'></br>"+"<h3>"+address+"</h3></br>"+"<p>Seances à venir: "+sessions+"</p></div>"



                });

                marker.addListener('click', function() {
                    //ma windows s'ouvre sur ma carte et plus précisement sur mon marqueur
                    infowindow.open(carte,marker);
                });

            }



        });


    });

});














//# sourceMappingURL=gmap.js.map