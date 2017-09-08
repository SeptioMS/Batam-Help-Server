<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
session_start();

//cek apakah user sudah login
if(!isset($_SESSION['username'])){
    //die("Anda belum login");//jika belum login jangan lanjut..
	echo "<script>alert('Anda Belum Login ! ')</script>";
	echo "<script>window.open('Login.php','_self')</script>";
}

//cek level user
if($_SESSION['jenis']!="Instansi"){
    die("Anda bukan Instansi");//jika bukan admin jangan lanjut
}
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BATAM HELP !</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link rel="stylesheet" href="../../dist/css/skins/skin-green.css">

	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="hold-transition skin-green sidebar-mini">
   
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B</b>H</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>BATAM</b>HELP</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <!-- /.messages-menu -->

              <!-- Notifications Menu -->
             
              <!-- Tasks Menu -->
              
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="../../dist/img/instansi.jpg" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"><?php echo "".$_SESSION['username']."";?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="../../dist/img/instansi.jpg" class="img-circle" alt="User Image">
                    <p>
                      <?php echo "".$_SESSION['username']."";?>
                      
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                     </div>
                    <div class="col-xs-4 text-center">
                     </div>
                    <div class="col-xs-4 text-center">
                     </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left" style="align:center">
                      </div>
                    <div class="pull-right">
                       <a href="../proses/Logout.php" class="btn btn-default btn-flat">LOG OUT</a>
                   
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../../dist/img/instansi.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo "".$_SESSION['username']."";?></p>
              <!-- Status -->
             
            </div>
          </div>

          <!-- search form (Optional) -->
          
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="index.php?page=daftardatalaporan"><i class="fa fa-link"></i> <span>Daftar data pelaporan</span></a></li>
            <li><a href="index.php?page=lokasipelaporan"><i class="fa fa-link"></i> <span>Lokasi Data Pelaporan</span></a></li>
          <li><a href="cetaklaporan.php"><i class="fa fa-link"></i> <span>Cetak Pelaporan</span></a></li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Aplikasi Pelaporan Kejadian Kota Batam
          </h1></section>

        <!-- Main content -->
        <section class="content">
<?php 	
   	                if(!isset($_GET["page"])){
   	                    require "daftardatapelaporan.html";
   	                }else {
   	                	if($_GET['page'] == "daftardatalaporan")
   	                    {
   	                        require "daftardatapelaporan.html";
   	                    } 
   	                    if($_GET['page'] == "lokasipelaporan")
   	                    {
   	                        require "lokasipelaporan.php";
   	                    }
						
						
					}
				?>
	  			

		<!-- Your Page Content Here -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2015 <a href="#">Septio Misdia Saputra</a>.</strong> All rights reserved.
      </footer>


      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
     
    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js"></script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
