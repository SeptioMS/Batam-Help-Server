</br>
          </br><h1>Data Masyarakat</h1>
          
<table class="table">
 <tr>
 <th>Nama</th>
 <th>Alamat</th>
 <th>Telepon</th>
 <th>Status</th>
 <th>Email</th>
 <th>AKSI</th>
 </tr>
<?php
include ("../proses/config.php");
$query = "SELECT*FROM masyarakat";
$hasil = mysqli_query($con, $query);

$jum_hasil = $hasil->num_rows;

 if($jum_hasil){
// perulangan untuk menunjukkan data
 while($baris = $hasil->fetch_assoc()){

 // ekstrak baris
 // ini akan membuat $baris['nama'] menjadi $namadepan
 
?>
 <tr>
 <td><?php echo $baris['namamasyarakat']?></td>
 <td><?php echo $baris['alamat']?></td>
 <td><?php echo $baris['notelp']?></td>
 <td><?php echo $baris['status']?></td>
 <td><?php echo $baris['email']?></td>
 
 <td>
 <?php if($baris['status']=="Tidak Aktif"){
	  ?> <a class="btn btn-xs btn-success" href="../proses/aktivasi_user.php?idmasy=<?php echo $baris['id']; ?>" onclick="return confirm('Apakah anda yakin akan mengaktivkan akun ini?')"><i class="fa fa-check"></i>Aktifkan</a>
 <?php }else{
	  ?> <a class="btn btn-xs btn-danger" href="../proses/non_aktif_user.php?idmasy=<?php echo $baris['id']; ?>" onclick="return confirm('Apakah anda yakin akan menonaktifkan akun ini?')"><i class="fa fa-check"></i>Non Aktifkan</a>
 
 	 
 </td>
 <?php } ?>
 </tr>
 
 <?php } ?>

 </table>

 <?php } else{ // jika tabel kosong
 echo 'Tidak ada data ditemukan.';
 }
 
 // putuskan sambungan dengan database
 $hasil->close();
 
?>                    
