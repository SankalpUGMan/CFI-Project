<!DOCTYPE html>
<html>
<head>
<title>
  Marauder's Map
</title>  
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <script src="jquery.min.js"></script>
    <style>
       #map {
          height: 600px;
          width: 100%;
          }
    </style>
</head>
<body>
  <h1><center><font face = "Verdana" color = "red" size = "8">
   Insti Map
  </font></center></h1>                                 
    <div id="map">
    </div>
      <script>
      var map, infoWindow;
      function initMap() 
        {
          var loc1 = {lat: 12.991824, lng: 80.230296};
          var loc2 = {lat: 12.991771, lng: 80.230291};
          var loc3 = {lat: 12.991322, lng: 80.230157};
          var loc4 = {lat: 12.991625, lng: 80.230425};
          var loc5 = {lat: 12.991343, lng: 80.230414};
          var loc6 = {lat: 12.991628, lng: 80.230570};
          var loc7 = {lat: 12.991421, lng: 80.230715};
          var loc8 = {lat: 12.991646, lng: 80.230800};
          var loc9 = {lat: 12.991317, lng: 80.231015};
          var loc10 = {lat: 12.991986, lng: 80.230806};
          var loc11 = {lat: 12.991923, lng: 80.230575};
          map = new google.maps.Map(document.getElementById('map'), 
        {
          center: {lat: 12.9918, lng: 80.2309},
          zoom: 19
        });
        infoWindow = new google.maps.InfoWindow;
        
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            console.log("Hello");
            $.ajax({
              url: 'location_save.php',
              type: 'POST',
              data:{latitude:pos.lat,longitude:pos.lng,name:'Hello'},
              success: function(result) {
                
              }
            });

            infoWindow.setPosition(pos);
            infoWindow.setContent('Your Location');
            infoWindow.open(map);
            map.setCenter(pos);
            }, 
          function() {
            handleLocationError(true, infoWindow, map.getCenter());
            });
            } 
        else {
            handleLocationError(false, infoWindow, map.getCenter());
        }
          var marker = new google.maps.Marker({
          position: loc1,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc2,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc3,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc4,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc5,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc6,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc7,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc8,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc9,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc10,
          map: map
        });
          var marker = new google.maps.Marker({
          position: loc11,
          map: map
        });
        }
          function handleLocationError(browserHasGeolocation, infoWindow, pos) {
           infoWindow.setPosition(pos);
           infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
       }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl88fG4avYn9E-ikBULp-5v1hXFjcoOOI&callback=initMap">
    </script>
</body>
</html>