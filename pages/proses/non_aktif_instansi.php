<?php
include "../proses/config.php";
mysqli_query($con,"UPDATE user SET status = 'Tidak Aktif' WHERE username='" . $_GET["user"] . "'");
header("Location:../admin/index.php?page=instansi");

?>
