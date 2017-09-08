<?php
include "../proses/config.php";

$nm = $_POST['nm'];
$ps = $_POST['ps'];
$al = $_POST['al'];
$tl = $_POST['tl'];
$el = $_POST['el'];
$un = $_GET['username'];

if($nm != null && $ps != null && $al != null && $tl != null && $el != null){
$stmt = $con->prepare("update user set nama=?, password=?, alamat=?, email=?, no_telp=? where username=?");
$stmt->bind_param('ssssss', $nm, $ps, $al, $el, $tl, $un);


if($stmt->execute()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Anda berhasil mengubah data Instansi.
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
  <strong>Warning!</strong> Maaf masih ada data yang kosong.
</div>
<?php
}
?>