
<?php
session_start();
include("config.php");
$userid = $_POST['username'];
$psw = $_POST['password'];


    $cek = mysqli_query($con, "SELECT * FROM user WHERE username='$userid' AND password='$psw'");
	
    if($cek->num_rows==1){//jika berhasil akan bernilai 1
        $c = mysqli_fetch_array($cek);
        $_SESSION['username'] = $c['username'];
        $_SESSION['jenis'] = $c['jenis'];
		$_SESSION['nama'] = $c['nama'];
		if($c['jenis']=="Admin"){
            header("location:..\admin\index.php");
        }else if($c['jenis']=="Instansi" && $c['Status']=="Aktif"){
            header("location:..\instansi\index.php");
        }
    }else{
        echo "<script>alert('Username atau password anda salah ! ')</script>";
		echo "<script>window.open('../../index.html','_self')</script>";
    }

?>
