<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Padukuhan Combongan | Dashboard</title>
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">

  <style>
        .nowrap {
            white-space: nowrap;
        }

        .pagination a.active {
            background-color: #007bff;
            color: #fff;
        }

    </style>

    <!-- Letakkan di bagian bawah halaman atau sebelum tag </body> -->


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <a href="../logout.php" class="btn btn-danger"  onClick="return confirm('Apakah anda yakin ingin keluar?')"><i class="fas fa-power-off"></i> Logout</a>
    </ul>
  </nav>
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Padukuhan Combongan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/logodukuh.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="../index/index.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>Home</p>
            </a>
          </li>
            <li class="nav-item">
              <a href="../data_penduduk/data_penduduk.php" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Data Penduduk</p>
            </a>
          </li>
               <li class="nav-item">
            <a href="../tb_struktur/struktur.php" class="nav-link">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>Struktur Organisasi</p>
            </a>
          </li>
               <li class="nav-item">
            <a href="../tb_galeri/galeri.php" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Galeri</p>
            </a>
          </li>
               <li class="nav-item">
            <a href="../tb_pengumuman/pengumuman.php" class="nav-link">
              <i class="nav-icon fas fa-bell"></i>
              <p>Pengumuman</p>
            </a>
             </li>
               <li class="nav-item">
            <a href="../tb_pesan/pesan.php" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Pesan</p>
            </a>
            </li>

       <!-- Menu Item -->
                        <!-- Dropdown Menu -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                     Profile Desa
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../BWILAYAH/batas_wilayah.php" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Batas Wilayah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../JARAK/jarak_pemerintahan.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Jarak Pemerintahan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../SARANA/sarana_desa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sarana Prasarana</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../TOPOLOGI/topologi.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Topologi Desa</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../DESA/data_desa.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Desa</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                    </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
