<?php
include "../proses/config.php";


$tn = $_POST['tn'];
$sa = $_POST['sa'];
$tl = $thisday = date('Y-m-d');
$idl = $_GET['idpelaporan'];

if($sa != null ){
$stmt = $con->prepare("update pelaporan set tanggapan=?, status_aduan=?, tgl_tanggapan=? where idpelaporan=?");
$stmt->bind_param('ssss', $tn, $sa, $tl, $idl);

if($stmt->execute()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Data Laporan Telah diubah.
</div>
<?php
} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Error!</strong> Maaf terjadi kesalahan, data error.
</div>
<?php
}
} else{
?> 
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Warning!</strong> Maaf Anda Belum Memilih Status Pelaporan.
</div>
<?php
}
?>