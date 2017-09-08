<?php
include "config.php";
mysqli_query($con,"UPDATE masyarakat SET status = 'Aktif' WHERE id='" . $_GET["idmasy"] . "'");
header("Location:../admin/index.php?page=masyarakat");
?>	