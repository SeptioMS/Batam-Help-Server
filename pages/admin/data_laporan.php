<?php
// buat koneksi dengan MySQL,
include ('../proses/config.php');
 
// jalankan query
$batas   = 5;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
 $posisi  = 0;
 $halaman = 1;
}
else{ 
  $posisi  = ($halaman-1) * $batas; 
}
$query  = "SELECT * FROM pelaporan where status_aduan='Belum ditangani' Order by idpelaporan DESC LIMIT $posisi,$batas";
$tampil = mysqli_query($con, $query);
?>
</br>
          </br><h1>Data Pelaporan Masyarakat</h1>
          
<table class="table">
      <thead><tr><th>Tanggal Pelaporan</th><th>Judul Laporan</th><th>Nama Pelapor</th><th>Deskripsi Laporan</th><th>Status Laporan</th><th>Tanggapan</th></tr></thead>
<?php
while ($data=mysqli_fetch_array($tampil)){
	
	?>
    <tbody>
    <?php
  echo "<tr>
          <td>$data[tanggal]</td>
          <td>$data[judulpelaporan]</td>
          <td>$data[namapelapor]</td>
		  <td>$data[deskripsi]</td>
          <td>$data[status_aduan]</td>
          <td>$data[tanggapan]</td>
          
		</tr>";
		
} 
?>
</tbody>
</table>
<?php
$query2     = mysqli_query($con, "select * from pelaporan where status_aduan='Belum ditangani'");
$jmldata    = mysqli_num_rows($query2);
$jmlhalaman = ceil($jmldata/$batas);

echo "<br> Halaman : ";

for($i=1;$i<=$jmlhalaman;$i++)
if ($i != $halaman){
 echo " <a href=\"index.php?halaman=$i\">$i</a> | ";
}
else{ 
 echo " <b>$i</b> | "; 
}

?>
