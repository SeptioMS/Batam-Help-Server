<?php
include "../proses/config.php";
$un = $_POST['un'];
$ps = $_POST['ps'];
$nm = $_POST['nm'];
$al = $_POST['al'];
$tl = $_POST['tl'];
$el = $_POST['el'];

if($un != null && $ps != null && $nm != null && $al != null && $tl != null && $el != null){
$stmt = $con->prepare("INSERT INTO user VALUES (?,?,?,?,?,?,'Aktif','Instansi')");
$stmt->bind_param('ssssss', $un, $nm, $al, $el, $ps, $tl);

if($stmt->execute()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> Anda berhasil menambah data Instansi Baru.
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
  <strong>Warning!</strong> Isi semua form area.
</div>
<?php
}
?>