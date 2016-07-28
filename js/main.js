function validateForm(idObj) {

    var _form = $('#' + idObj);
    var _stringVar = _form.serialize();
    var _urlFile = '';

    //console.log('cadena de variables='+_stringVar);

    $.ajax({
        method: "POST",
        url: _urlFile,
        data: _stringVar
    }).success(function (msg) {
        // alert("Data Saved: " + msg);
        $('.add-blackout').addClass('blackout');
        $('.msg').load('includes/msg-succes.php');
        $(".blackout").click(function(){
            $('.msg, .blackout').fadeOut(300, function(){
                $(this).remove();
            });
        });
    });
}

$.ajaxSetup({
    cache: false
});

// MAP

function initMap() {

    var myLatLng = {lat: 25.644775, lng: -100.32451600000002};
    var mapDiv = document.getElementById('map');

    var map = new google.maps.Map(mapDiv, {
        center: {lat: 25.644775, lng: -100.32451600000002},
        zoom: 17,
        draggable: false,
        scrollwheel: false
    });
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Super Colchones | Luxury'
    });
}