<html><head>
</head><title></title>
<body></br>
<?php
	include '../proses/config.php';
				$dari=$_POST['dari'];
$c=mysqli_query($con,"select DISTINCT tanggal as tgl from pelaporan where tanggal='$dari'");
				$tgl=mysqli_fetch_array($c);
				
	?>

	<h1 align='center'>LAPORAN PENGADUAN TANGGAL <?php echo $tgl['tgl'];?></h1>
	<p align='center'>_________________________________________________________________________________________________________</p>
	<table border='1' align='center'>
      <tr><th>Tanggal Pelaporan</th><th>Judul Laporan</th><th>Nama Pelapor</th><th>Deskripsi</th><th>Status Laporan</th><th>Alamat</th></tr>
	
  <?php
	if(isset($_POST['dari'])){
				$dari=$_POST['dari'];
				$a=mysqli_query($con,"select * from pelaporan where tanggal='$dari' order by tanggal asc");
				$c=mysqli_query($con,"select DISTINCT tanggal as tgl from pelaporan where tanggal='$dari'");
				$tgl=mysqli_fetch_array($c);
			}else{
				
			}
			while($b=mysqli_fetch_array($a)){
				
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