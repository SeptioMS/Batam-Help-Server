<html><head>
</head><title></title>
<body></br>
	<h1 align='center'>LAPORAN PENGADUAN YANG BELUM DI TANGANI</h1>
	<p align='center'>_________________________________________________________________________________________________________</p>
<table border='1' align='center'>
      <tr><th>Tanggal Pelaporan</th><th>Judul Laporan</th><th>Nama Pelapor</th><th>Deskripsi</th><th>Status Laporan</th><th>Alamat</th></tr>
  <?php
	include '../proses/config.php';
	$a=mysqli_query($con,"SELECT * FROM pelaporan where status_aduan ='Belum ditangani' ORDER BY idpelaporan");
			while($b=mysqli_fetch_array($a)){
				$_SESSION['tanggal'] = $b['tanggal'];
	?>
	
				<tr>
					<td class="tbl"><?php echo $b['tanggal'] ?></td>
					<td class="tbl"><?php echo $b['judulpelaporan'] ?></td>
					<td class="tbl"><?php echo $b['namapelapor'] ?></td>
					<td class="tbl"><?php echo $b['deskripsi'] ?></td>
					<td class="tbl"><?php echo $b['status_aduan'] ?></td>
					<td class="tbl"><?php echo $b['alamat'] ?></td>
				</tr>
				<?php
			}
			?>
		</table>
		<script>
window.print();
</script>
</body>
		</html>