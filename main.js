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
  

 var mymap = L.map('mapid').setView([-2.5827998624958255, 120.80228144146092], 13);

 var popup = L.popup();

 function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("koordinatnya adalah " + e.latlng
                    .toString()
                    ) //set isi konten yang ingin ditampilkan, kali ini kita akan menampilkan latitude dan longitude
                .openOn(mymap);

            document.getElementById('latlong').value = e.latlng //value pada form latitde, longitude akan berganti secara otomatis
        }
        mymap.on('click', onMapClick);


  google.maps.event.addDomListener(window, 'load', initialize);