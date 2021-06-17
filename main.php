var marker;
function initialize() {
    var mapsProperty = {
      center:new google.maps.LatLng(-2.5827998624958255, 120.80228144146092),
      zoom:18,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var maps = new google.maps.Map(document.getElementById("googleMap"), mapsProperty);
    
    marker=new google.maps.Marker({
        position: new google.maps.LatLng(-2.5827998624958255, 120.80228144146092),
        map: maps
    });

    google.maps.event.addListener(maps, 'click', function(event) {
        addMark(this, event.latLng);
      });
  
}


 <?php
    // Sesuaikan dengan konfigurasi koneksi Anda
    $host     = "localhost";
    $username = "root";
    $password = "";
    $Dbname   = "googlemaps";
    $db     = new mysqli($host,$username,$password,$Dbname);
    
    $query = $db->query("SELECT * FROM lokasi ORDER BY nama_lokasi ASC");
    while ($row = $query->fetch_assoc()) {
      $nama = $row["nama_lokasi"];
      $lat  = $row["latitude"];
      $long = $row["longitude"];
      echo "addMarker($lat, $long, '$nama');\n";
    }
  ?> 


function addMark(mapsMark, markPosition){
    if(marker){
        marker.setPosition(markPosition);
        console.log("Marker Position" + markPosition);
    } else{
        marker = new google.maps.Marker({
            position: markPosition,
            map: mapsMark
        });
        console.log("Marker Position" + markPosition);
    }
}
  
  google.maps.event.addDomListener(window, 'load', initialize);