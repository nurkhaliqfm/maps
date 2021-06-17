<!DOCTYPE html>
<html>
  <head>
    <title>Add Map</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <!--main css-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUgmfDS3Dc4FmRguXbK_Wmqe9oZOIFoSY&callback=initMap&libraries=&v=weekly"></script>

    <style>
       
        .col-8{max-width: 100%;}

        #titik{width: 50%;      
         margin: auto;
         position: absolute;
          left: 0;  right: 0;
        
        }
    </style>


  </head>
  <body>

    <div class="container"><br>
    <h2 style="text-align: center;">Formulir Pendaftaran Mitra Usaha <br>PANGOJE'</h2>
    <form action="user_act.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label>Nama warung/Toko :</label>
        <input type="text" class="form-control" placeholder="Masukkan Nama warung/Toko" name="namawarung" required="required">
      </div>
      <div class="form-group">
        <label>Hari Buka warung/Toko :</label>
        <input type="text" class="form-control" placeholder="Contoh : Senin - Jumat" name="haribuka" required="required">
      </div>
      <div class="form-group">
        <label>Jam Buka Warung/Toko :</label>
        <input type="text" class="form-control" placeholder="Contoh : 09.00 - 18.00" name="jambuka" required="required">
      </div>
      <div class="form-group">
        <label>Nama Pemilik :</label>
        <input type="text" class="form-control" placeholder="Masukkan Nama Pemilik Warung/Toko" name="nama" required="required">
      </div>
      <div class="form-group">
        <label>Nomor Telepon :</label>
        <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon" name="nohp" required="required">
      </div>
      <div class="form-group">
        <label>Nomor WA :</label>
        <input type="number" class="form-control" placeholder="Masukkan Nomor WA" name="nowa" required="required">
      </div><div class="form-group">
        <label>Alamat Email :</label>
        <input type="text" class="form-control" placeholder="Masukkan Alamat Email" name="email" required="required">
      </div>
      
      <div class="form-group">
        <label>Alamat Lengkap Warung/Toko :</label>
        <textarea class="form-control" name="alamatwarung" placeholder="sertakan Nama Desa, Kecamatan dan Kabupaten" required="required"></textarea>
      </div><br><br>

      <h3>Pilih Titik Lokasi Warung/toko anda pada Map</h3>
    <!--The div element for the map -->
      <div id="googleMap"></div>

      <br><br>

      <div style="text-align: center;  position: center;" id="titik" class="form-group">
                <label for="exampleFormControlInput1">Titik lokasi Warung Anda</label>
                <input type="text" class="form-control" id="nilai" name="latlong">
      </div> <br><br><br><br><br>
      <div class="form-group">
        <label>Foto KTP:</label>
        <input type="file" name="foto" required="required">
        <p style="color: green">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
      </div><br>
      <div class="form-group">
        <h5><br>Dengan demikian, saya setuju bahwa PANGOJE' dapat mengumpulkan, menggunakan, dan mengungkapkan informasi yang saya berikan, atas nama perusahaan pemohon, sesuai dengan Pemberitahuan Privasi PANGOJE' yang telah saya baca dan pahami.</h5>
      </div><br>      
      <input type="submit" name="" value="Simpan" class="btn btn-primary">

     
    </form>
  </div><br><br><br><br>

    <!--main js-->
    <script >

    var marker;
    function initialize() {
        var mapsProperty = {
          center:new google.maps.LatLng(-2.591374183197512, 120.80367619014866),
          zoom:15,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var maps = new google.maps.Map(document.getElementById("googleMap"), mapsProperty); 
        
        document.getElementById('nilai').value = new google.maps.LatLng(-2.591374183197512, 120.80367619014866); //Ini Yang Saya Ubah dan Tambahkan by Putra. Cari tau mi sendiri Hahahah
        
        marker=new google.maps.Marker({
            position: new google.maps.LatLng(-2.591374183197512, 120.80367619014866),
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
            document.getElementById('nilai').value = markPosition //Ini Yang Saya Ubah dan Tambahkan by Putra. Cari tau mi sendiri Hahahah
        } else{
            marker = new google.maps.Marker({
                position: markPosition,
                map: mapsMark
            });
            document.getElementById('nilai').value = markPosition //Ini Yang Saya Ubah dan Tambahkan by Putra. Cari tau mi sendiri Hahahah
        }
    }
      

     
      google.maps.event.addDomListener(window, 'load', initialize); 

       
                   

    </script>




    <!-- <script type="text/javascript">
      var mymap = L.map('googleMap').setView([-2.5827998624958255, 120.80228144146092], );

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
    </script> -->
  </body>
</html>