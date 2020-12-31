<?php
// $conn = mysqli_connect("localhost", "root", "") or die(mysqli_error());
// mysqli_select_db($conn,"homerent") or die(mysqli_error());
?>

    <html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <title>Google Maps</title>
        <style type="text/css">
            body { font: normal 10pt Helvetica, Arial; }
            #map { width: 1000px; height: 450px; border: 0px; margin-left:100px; padding: 0px;}
        </style>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyCHHWJWgWwDu5k1VAVEVc34k0QF16CXfQU&sensor=false" type="text/javascript"></script>
        <!-- <script src="https://maps.googleapis.com/maps/api/js"></script> -->
        <script type="text/javascript">
            //Sample code written by August Li
            var icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/blue.png",
                       new google.maps.Size(32, 32), new google.maps.Point(0, 0),
                       new google.maps.Point(16, 32));
            var center = null;
            var map = null;
            var currentPopup;
            var bounds = new google.maps.LatLngBounds();
            function addMarker(lat, lng, info) {
                if(info == '<b>Your Location</b>') {
                    icon = new google.maps.MarkerImage("http://maps.google.com/mapfiles/ms/micons/red.png");
                }
                var pt = new google.maps.LatLng(lat, lng);
                bounds.extend(pt);
                var marker = new google.maps.Marker({
                    position: pt,
                    icon: icon,
                    map: map
                });
                var popup = new google.maps.InfoWindow({
                    content: info,
                    maxWidth: 300
                });
                google.maps.event.addListener(marker, "click", function() {
                    if (currentPopup != null) {
                        currentPopup.close();
                        currentPopup = null;
                    }
                    popup.open(map, marker);
                    currentPopup = popup;
                });
                google.maps.event.addListener(popup, "closeclick", function() {
                    map.panTo(center);
                    currentPopup = null;
                });
            }           
            function initMap() {
                map = new google.maps.Map(document.getElementById("map"), {
                    center: new google.maps.LatLng(0, 0),
                    zoom: 14,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR
                    },
                    navigationControl: true,
                    navigationControlOptions: {
                        style: google.maps.NavigationControlStyle.ZOOM_PAN
                    }
                });
<?php
// $res= mysql_query("SELECT * FROM poi_example")or die(mysql_error());
 $sql="SELECT * FROM seller";
 $res=mysqli_query($con,$sql); 
while($row = mysqli_fetch_array($res))
{
  $name = $row['store_name'];
  $lat = $row['lat'];
  $lon = $row['lon'];
  $desc = $row['first_name'];
   $last = $row['last_name'];



  echo("addMarker($lat, $lon, '<b>$name</b><br />$desc $last');\n");

}

?>

getLocation();
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    console.log("Geolocation is not supported by this browser.");
  }
}

function showPosition(position) {
    console.log("Latitude: " + position.coords.latitude + "Longitude: " + position.coords.longitude);
    addMarker(position.coords.latitude,position.coords.longitude,'<b>Your Location</b>');
}

 center = bounds.getCenter();
     map.fitBounds(bounds);

     }

     </script>
     </head>
     <body onLoad="initMap()" style="margin:0px; border:0px; padding:0px;">
     <div id="map"></div>
     </body>
     </html>