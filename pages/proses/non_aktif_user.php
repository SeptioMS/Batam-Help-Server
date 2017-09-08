<?php
include "config.php";
mysqli_query($con,"UPDATE masyarakat SET status = 'Tidak Aktif' WHERE idmasyarakat='" . $_GET["idmasy"] . "'");
header("Location:../admin/index.php?page=masyarakat");

?>
