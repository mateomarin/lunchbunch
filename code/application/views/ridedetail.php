<!DOCTYPE html>
<html>
  <head>
    <title>Ride Details</title>
    <style>
        html, body 
        {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map 
        {
            height: 100%;
            width: 50%;
        }
        #right-panel 
        {
            font-family: 'Roboto','sans-serif';
            line-height: 30px;
            padding-left: 10px;
        }

        #right-panel select, #right-panel input 
        {
            font-size: 15px;
        }

        #right-panel select 
        {
            width: 100%;
        }

        #right-panel i 
        {
            font-size: 12px;
        }
    </style>
    <style>
        #right-panel 
        {
            float: right;
            width: 48%;
            padding-left: 2%;
        }
        #output 
        {
            font-size: 11px;
        }
    </style>
      
     <script>
         $(document).load(function()
            {
                var distance = "";
                var duration = "";

                function initMap() 
                {
                    var bounds = new google.maps.LatLngBounds;
                    var markersArray = [];

                    var selectedMode = DRIVING;
                    var origin1 = "1980 Zanker Rd #30, San Jose, CA 95112";
                    var destinationA = $array['destination'];
                    
                    var destinationIcon = 'https://chart.googleapis.com/chart?' + 'chst=d_map_pin_letter&chld=D|FF0000|000000';
                    var originIcon = 'https://chart.googleapis.com/chart?' + 'chst=d_map_pin_letter&chld=O|FFFF00|000000';
                    var map = new google.maps.Map(document.getElementById('map'), 
                        {
                            center: {lat: 55.53, lng: 9.4},
                            zoom: 10
                        }
                    );
                    var geocoder = new google.maps.Geocoder;

                    var service = new google.maps.DistanceMatrixService;
                    service.getDistanceMatrix(
                        {
                            origins: [origin1],
                            destinations: [destinationA],
                            travelMode: google.maps.TravelMode[selectedMode],
                            unitSystem: google.maps.UnitSystem.IMPERIAL,
                            avoidHighways: false,
                            avoidTolls: false
                        }, function(response, status) 
                            {
                                if (status !== google.maps.DistanceMatrixStatus.OK) 
                                {
                                    alert('Error was: ' + status);
                                } 
                                else 
                                {
                                    var originList = response.originAddresses;
                                    var destinationList = response.destinationAddresses;
                                    var outputDiv = document.getElementById('output');
                                    outputDiv.innerHTML = '';
                                    deleteMarkers(markersArray);

                                    var showGeocodedAddressOnMap = function(asDestination) 
                                        {
                                            var icon = asDestination ? destinationIcon : originIcon;
                                            return function(results, status) 
                                                {
                                                    if (status === google.maps.GeocoderStatus.OK) 
                                                    {
                                                        map.fitBounds(bounds.extend(results[0].geometry.location));
                                                        markersArray.push(new google.maps.Marker(
                                                            {
                                                                map: map,
                                                                position: results[0].geometry.location,
                                                                icon: icon
                                                            }));
                                                    } 
                                                    else 
                                                    {
                                                        alert('Geocode was not successful due to: ' + status);
                                                    }
                                                };
                                        };

                                    for (var i = 0; i < originList.length; i++) 
                                    {
                                        var results = response.rows[i].elements;
                                        geocoder.geocode({'address': originList[i]},
                                        showGeocodedAddressOnMap(false));
                                        for (var j = 0; j < results.length; j++) 
                                        {
                                            geocoder.geocode(
                                                {
                                                    'address': destinationList[j]
                                                },
                                                    showGeocodedAddressOnMap(true));
                                            outputDiv.innerHTML += originList[i] + ' to ' + destinationList[j] + ': ' + results[j].distance.text + ' in ' + results[j].duration.text + '<br>';
                                            distance = results[j].distance.text;
                                            duration = results[j].duration.text;
                                        }
                                    }
                                    
                                }
                            });
                        return
                    }

                function deleteMarkers(markersArray) 
                {
                  for (var i = 0; i < markersArray.length; i++) 
                  {
                    markersArray[i].setMap(null);
                  }
                  markersArray = [];
                }
         });
         document.getElementById("output").innerHTML = distance +  duration;
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQroyo-GY-YEfdmHQANwVznL8Q2WTBT9s&signed_in=true&callback=initMap"async defer></script>

  </head>
  <body>
<?php require('/partials/navbar.php'); ?>
    <div id="right-panel">
      <div id="floating-panel">
          <h1>Ride Details:</h1>
          <div id="driver">
            <img src="" alt="driver pic">
            <div class="ride_details">
                <ul>
<?php foreach( $result_array as $details){ ?>
                    <li><?= $details['destination_name'] ?></li>
                    <li><?= $details['dining status'] ?></li>
                    <li><?= $details['timestamp'] ?></li>
                    <li><?= $details['accepts_order_id'] ?></li>
<?php } ?>
                </ul>
            </div>
          </div>
          <div class="ridedetail">
              <ul>
<?php foreach( $result_array as $details){ ?>
                  <li>Driver: <?= $details['driver'] ?></li>
                  <li>Where to: <?= $details['destination_name'] ?></li>
                  <li>Number of Available Seats: <?= $details['seats'] ?></li>
                  <li>Dining Status: <?= $details['dining status'] ?></li>
                  <li>Leaving Time: <?= $details['timestamp'] ?></li>
                  <li>Accepts Orders: <?= $details['orders'] ?></li>
                  <li>Contact Info: <?= $details['contact'] ?></li>
<?php } ?>
              </ul>
              <a href="#"><button>Reserve Seat</button></a>
              <a href="#"><button>Place Order</button></a>
          </div>
      </div>
      <div>
        <strong>Results</strong>
      </div>
      <div id="output"></div>
        <p id="output"></p>
        <script>
            
        </script>
      </div>
      <div id="map"></div>
  </body>
</html>