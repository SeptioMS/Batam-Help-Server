<?php
include "../proses/config.php";
mysqli_query($con,"UPDATE user SET status = 'Aktif' WHERE username='" . $_GET["user"] . "'");
header("Location:../admin/index.php?page=instansi");
?>	