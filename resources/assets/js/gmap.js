var latlng = new google.maps.LatLng(45.75722,  4.89888);


var options = {

    center: latlng,
    zoom:19,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

var carte = new google.maps.Map(document.getElementById("map"),options);

