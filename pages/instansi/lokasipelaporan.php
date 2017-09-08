<?php

$instansi = $_SESSION['nama'];
?>
<link rel="stylesheet" href="../../dist/leaflet.css" />
	<script src="../../dist/leaflet.js"></script>
	<script>
		function peta_awal() {
			// posisi default peta saat diload
			// koordinat dan zoom view peta 
			var map = L.map('map').setView([1.1068747, 104.0285189], 12);
			L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				maxZoom: 18,
				attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>'
			}).addTo(map);
			
			
   

			<?php
			
			require ('../proses/config.php');
			// query
			$sql = "SELECT * from pelaporan where status_aduan='Belum ditangani' and instansi='$instansi'";
			$data = mysqli_query($con,$sql);

			$js = '';

			// looping sesuai dengan jumlah lokasi yang ada pada database
			while($row = mysqli_fetch_assoc($data)) {
				$js .= 'L.marker(['.$row['latitude'].', '.$row['longitude'].']).addTo(map)
						.bindPopup("<p>Judul Laporan: <b>'.$row['judulpelaporan'].'</b></br>Nama pelapor : '.$row['namapelapor'].'</br>Instansi Tujuan : '.$row['instansi'].'</br>Status Laporan : '.$row['status_aduan'].'</br></p>");
						';
			}
			echo $js;

			?>

			var popup = L.popup();
		}
		
	</script><script>

		function Start(page) {
OpenWin = this.open(page, "CtrlWindow", "location=center,scrollbars=yes,resizable=no,width=600,height=300,top=300, left=500,");
}
		
</script>
<!--  Free CSS Template | Designed by TemplateMo.com  -->
<body onLoad="peta_awal()">
	<h3>Lokasi Pelaporan Kejadian</h3>
                	<div id="map" style="width: 750px; height:550px; color: rgb(0, 0, 0);">
					
                </div>
            	
        </body>