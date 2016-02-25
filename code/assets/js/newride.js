$(document).ready(function(){
    $('select').material_select();
    var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(37.3316565, -121.9141247),
    new google.maps.LatLng(37.3772118, -121.9141084));

    var input = document.getElementById('pac-input');
    var options = {
    bounds: defaultBounds,
    types: ['establishment']
    };

    autocomplete = new google.maps.places.Autocomplete(input, options);
    var coord = [];
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
        window.alert("Autocomplete's returned place contains no geometry");
        return;
        }
        coord = [place.geometry.location.lat(),place.geometry.location.lng()];
        console.log(coord);
    });

    $('#departure_time').timepicker();

    $('#submit-btn').on('click', function() {
        var data0 = {
        destination_coord:"1", seats_avail:$("select[name='seats_avail']").val(), departure_time:$("input[name='departure_time']").val(), duration_id:$("select[name='duration_id']").val(), accepts_order_id:$("input[name='accepts_order_id']").val(), takeout_fee:$("input[name='takeout_fee']").val() 
        };
        console.log(data0);
        $.ajax({
            type: "POST",
            url: "/Rides/add_new_ride",
            data: data0,
            success: function() {
                window.location.href = "/success";
            },
            error: function() {
                console.log('Its fucked up');
            }
        });
        // return false;

    });

});
