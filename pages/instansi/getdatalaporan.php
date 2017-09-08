<?php
session_start();

$instansi = $_SESSION['nama'];
?>
<script>

		function Start(page) {
OpenWin = this.open(page, "CtrlWindow", "location=center,scrollbars=yes,resizable=no,width=300,height=200,top=300, left=500,");
}
		
</script>
<h1>Data Pelaporan Oleh Masyarakat</h1>
					<p></br>
					Pencarian Berdasarkan Kecamatan</br>
					<form method="post" action="" name="pencarian" id="pencarian">
					<select name="cari">
					<option value="Batam Kota">Batam Kota</option>
					<option value="Batu Aji">Batu Aji</option>
					<option value="Batu Ampar">Batu Ampar</option>
					<option value="Belakang Padang">Belakang Padang</option>
					<option value="Bengkong">Bengkong</option>
					<option value="Bulang">Bulang</option>
					<option value="Galang">Galang</option>
					<option value="Lubuk Baja">Lubuk Baja</option>
					<option value="Nongsa">Nongsa</option>
					<option value="Sagulung">Sagulung</option>
					<option value="Sungai Beduk">Sungai Beduk</option>
					<option value="Sekupang">Sekupang</option>
					
					</select>
					<input type="submit" id="submit" value="Cari ..."/>
					</form>
                    <?php
// buat koneksi dengan MySQL,
include ('../proses/config.php');
 
// jalankan query
$kecamatan = @$_POST['cari'];
$batas   = 5;
$halaman = @$_GET['halaman'];
if(empty($halaman)){
 $posisi  = 0;
 $halaman = 1;
}
else{ 
  $posisi  = ($halaman-1) * $batas; 
}
$query  = "SELECT * FROM pelaporan where kecamatan like '%$kecamatan%' and status_aduan='Belum ditangani' and instansi='$instansi' Order By idpelaporan DESC LIMIT $posisi,$batas";
$tampil = mysqli_query($con, $query);

echo "<table class='table'>
      <tr><th>Tanggal Pelaporan</th><th>Judul Laporan</th><th>Deskripsi Laporan</th><th>Alamat</th><th>Kecamatan</th><th>Status Aduan</th><th>Nama Pelapor</th><th>Aksi</th></tr>";

while ($data=mysqli_fetch_array($tampil)){
  echo "<tr>
          <td>$data[tanggal]</td>
          <td>$data[judulpelaporan]</td>
          <td>$data[deskripsi]</td>
		  <td>$data[alamat]</td>
          <td>$data[kecamatan]</td>
		  <td>$data[status_aduan]</td>
          <td>$data[namapelapor]</td>
		  "
          ?>
		  <td><a class="btn btn-xs btn-warning" data-toggle="modal" data-target="#myModal<?php echo $data['idpelaporan']; ?>">Ubah Status Laporan</a>
<div class="modal fade" id="myModal<?php echo $data['idpelaporan']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo $data['idpelaporan']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel<?php echo $data['idpelaporan']; ?>">Edit Data</h4>
      </div>
      <div class="modal-body">

<form>
  <div class="form-group">
    <label for="tl">Tanggal</label>
    <input type="text" class="form-control" id="tl<?php echo $data['idpelaporan']; ?>" value="<?php echo $thisday = date('d-m-Y');
 ?>">
  </div>
  <div class="form-group">
    <label for="tn">Tanggapan</label>
    <input type="text" class="form-control" id="tn<?php echo $data['idpelaporan']; ?>" value="">
  </div>
  <div class="form-group">
    <label for="ps">Pilih Status</label>
<select id="status<?php echo $data['idpelaporan']; ?>" name="status" class="form-control">
						        <option value="">Pilih Status</option>
						        <option value="Sudah ditangani">Sudah ditangani</option>
						        <option value="Belum ditangani">Belum ditangani</option>
						      </select>

	</div>
</form>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="button" onclick="updatedata('<?php echo $data['idpelaporan']; ?>')" class="btn btn-primary">Ubah</button>
      </div>
    </div>
  </div>
</div>		  
		  </td>
		  
		</tr>
		<?php
} ?><?php
echo "</table>";
$query2     = mysqli_query($con, "select * from pelaporan where kecamatan like '%$kecamatan%' and status_aduan='Belum ditangani' and instansi='$instansi' Order By idpelaporan");
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
?></p>
