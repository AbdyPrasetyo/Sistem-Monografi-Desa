<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Padukuhan Combongan</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <style>
    .pengumuman-divider {
    margin: 20px 0;
    border: 1px solid #ddd;
    }
    /* ======= Gaya CSS untuk Pengumuman ======= */

    .pengumuman-item {
      text-align: left;
      

    }
    .isi-pengumuman {
        text-align: justify;
    }

    .pengumuman-divider {
        margin: 20px 0;
        border: 1px solid #ddd;
    }


        :root {
            --level-1: #8dccad;
            --level-2: #f5cc7f;
            --level-3: #7b9fe0;
            --level-4: #f27c8d;
            --black: black;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        ol {
            list-style: none;
        }

     


        .rectangle {
            position: relative;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }


        /* LEVEL-1 STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .level-1 {
            width: 50%;
            margin: 0 auto 40px;
            background: var(--level-1);
        }

        .level-1::before {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 20px;
            background: var(--black);
        }


        /* LEVEL-2 STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .level-2-wrapper {
            position: relative;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .level-2-wrapper::before {
            content: "";
            position: absolute;
            top: -20px;
            left: 27%;
            width: 49%;
            height: 2px;
            background: var(--black);
        }

        .level-2-wrapper::after {
            display: none;
            content: "";
            position: absolute;
            bottom: -20px;
            width: calc(100% + 20px);
            height: 2px;
            background: var(--black);
        }

        .level-2-wrapper li {
            position: relative;
        }

        .level-2-wrapper>li::before {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 20px;
            background: var(--black);
        }

        .level-2 {
            width: 70%;
            margin: 0 auto 40px;
            background: var(--level-2);
        }

        .level-2::before {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 20px;
            background: var(--black);
        }

        .level-2::after {
            display: none;
            content: "";
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translate(-100%, -50%);
            width: 20px;
            height: 2px;
            background: var(--black);
        }


        /* LEVEL-3 STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .level-3-wrapper {
            position: relative;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 20px;
            width: 90%;
            margin: 0 auto;
        }

        .level-3-wrapper::before {
            content: "";
            position: absolute;
            top: -20px;
            left: calc(25% - 5px);
            width: calc(50% + 10px);
            height: 2px;
            background: var(--black);
        }

        .level-3-wrapper>li::before {
            content: "";
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -100%);
            width: 2px;
            height: 20px;
            background: var(--black);
        }

        .level-3 {
            margin-bottom: 20px;
            background: var(--level-3);
        }

        /* LEVEL-4 STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .level-4-wrapper {
            position: relative;
            width: 80%;
            margin-left: auto;
        }

        .level-4-wrapper::before {
            content: "";
            position: absolute;
            top: -20px;
            left: -20px;
            width: 2px;
            height: calc(100% + 20px);
            background: var(--black);
        }

        .level-4-wrapper li+li {
            margin-top: 20px;
        }

        .level-4 {
            font-weight: normal;
            background: var(--level-4);
        }

        .level-4::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0%;
            transform: translate(-100%, -50%);
            width: 20px;
            height: 2px;
            background: var(--black);
        }


        /* MQ STYLES
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
        @media screen and (max-width: 700px) {
            .rectangle {
                padding: 20px 10px;
            }

            .level-1,
            .level-2 {
                width: 100%;
            }

            .level-1 {
                margin-bottom: 20px;
            }

            .level-1::before,
            .level-2-wrapper>li::before {
                display: none;
            }

            .level-2-wrapper,
            .level-2-wrapper::after,
            .level-2::after {
                display: block;
            }

            .level-2-wrapper {
                width: 90%;
                margin-left: 2%;
            }

            .level-2-wrapper::before {
                left: 10px;
                width: 2px;
                height: calc(100% + 80px);
            }

          
        }


        /* FOOTER
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .page-footer {
            position: fixed;
            right: 0;
            bottom: 20px;
            display: flex;
            align-items: center;
            padding: 5px;
        }

        .page-footer a {
            margin-left: 4px;
        }
  </style>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Tambahkan link Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- =======================================================
  * Template Name: Bethany
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container p-4">
      <div class="header-container d-flex align-items-center justify-content-between">
        <div class="logo">
          <h1 class="text-light"><a href="index.html"><span>Combongan</span></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#struktur">Struktur Organisasi</a></li>
            <li><a class="nav-link scrollto" href="#monografi">Monografi</a></li>
            <li><a class="nav-link scrollto " href="#galery">Galeri</a></li>
            <li><a class="nav-link scrollto" href="#pengumuman">Pengumuman</a></li>
           
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li><a class="getstarted scrollto" href="admin/index.php">Login</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div><!-- End Header Container -->
    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1>SELAMAT DATANG DI SISTEM INFORMASI</h1>
      <h2>Padukuhan Combongan, Desa Jambidan, Kelurahan Banguntapan, kabupaten bantul</h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section><!-- End Hero -->

  <main id="main">

      <div class="container mb-5 mt-2">
 

<!-- ======= Team Section ======= -->
<section id="struktur" class="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-title" data-aos="fade-right">
                    <h2>Struktur Organisasi Padukuhan Combongan</h2>
                    <p>Berisi Struktur Organisasi yang ada di padukuhan combongan</p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <?php
                    include 'config/koneksi.php';

                    // Query to select team members from the database
                    $sqlTeam = "SELECT * FROM tb_struktur";
                    $resultTeam = $conn->query($sqlTeam);

                    // Check if there are results
                    if ($resultTeam->num_rows > 0) {
                        // Output data of each row
                        while ($rowTeam = $resultTeam->fetch_assoc()) {
                            echo '<div class="col-lg-6">';
                            echo '<div class="member" data-aos="zoom-in" data-aos-delay="100">';
                            echo '<div class="pic"><img src="admin/content/tb_struktur/gambar/' . $rowTeam["foto"] . '" class="img" width="200px" height="200px" alt=""></div>';
                            echo '<div class="member-info">';
                            echo '<h4>' . $rowTeam["nama"] . '</h4>';
                            echo '<span>' . $rowTeam["level"] . '</span>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo "0 results";
                    }

                    // Close the connection
                    $conn->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Team Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="monografi" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-left">
          <h2>Monografi Desa 2024</h2>
          <p>Berisi seluruh informasi mengenai penduduk padukuhan combongan</p>
        </div>

        <?php
    include 'function/function.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <?php displayDesaData(); ?>
        </div>
        <div class="col">
            <?php displayTopologiDesa(); ?>
            <?php displayBatasDesa(); ?>
        </div>
        </div>

        <div class="row">

        <div class="col">
            <?php displayJarakDesa(); ?>
      
            <?php displaySaranaDesa(); ?>
        </div>
        </div>
    </div>

<div class="container mt-5">
    <?php
    // Tampilkan chart Jenis Kelamin
    $genderChart = getDataForChart('jk');
    ?>

    <div class="row">
        <div class="col-md-6">
            <canvas id="genderChart" width="400" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <?php
            // Tampilkan data jumlah penduduk berdasarkan kategori
            displayData('jk', 'Jumlah Penduduk berdasarkan Jenis Kelamin');
            ?>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('genderChart').getContext('2d');
        var genderChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($genderChart['labels']); ?>,
                datasets: [{
                    label: 'Jumlah Penduduk berdasarkan Jenis Kelamin',
                    data: <?php echo json_encode($genderChart['data']); ?>,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <?php
    // Tampilkan chart Pendidikan
    $educationChart = getDataForChart('pendidikan');
    ?>

    <div class="row mt-5">
        <div class="col-md-6">
            <canvas id="educationChart" width="400" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <?php
            // Tampilkan data jumlah penduduk berdasarkan kategori
            displayData('pendidikan', 'Jumlah Penduduk berdasarkan Riwayat Pendidikan');
            ?>
        </div>
    </div>

    <script>
        var ctxEducation = document.getElementById('educationChart').getContext('2d');
        var educationChart = new Chart(ctxEducation, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($educationChart['labels']); ?>,
                datasets: [{
                    label: 'Jumlah Penduduk berdasarkan Pendidikan',
                    data: <?php echo json_encode($educationChart['data']); ?>,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <?php
    // Tampilkan chart Status Perkawinan
    $maritalStatusChart = getDataForChart('status');
    ?>

    <div class="row mt-5">
        <div class="col-md-6">
            <canvas id="maritalStatusChart" width="400" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <?php
            // Tampilkan data jumlah penduduk berdasarkan kategori
            displayData('status', 'Jumlah Penduduk berdasarkan Status Perkawinan');
            ?>
        </div>
    </div>

    <script>
        var ctxMaritalStatus = document.getElementById('maritalStatusChart').getContext('2d');
        var maritalStatusChart = new Chart(ctxMaritalStatus, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($maritalStatusChart['labels']); ?>,
                datasets: [{
                    label: 'Jumlah Penduduk berdasarkan Status Perkawinan',
                    data: <?php echo json_encode($maritalStatusChart['data']); ?>,
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <?php
    // Tampilkan chart Rentang Usia
    $ageRangeChart = getDataForChart('usia');
    ?>

    <div class="row mt-5">
        <div class="col-md-6">
            <canvas id="ageRangeChart" width="400" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <?php
            // Tampilkan data jumlah penduduk berdasarkan kategori
            displayData('usia', 'Jumlah Penduduk berdasarkan Rentang Usia');
            ?>
        </div>
    </div>

    <script>
        var ctxAgeRange = document.getElementById('ageRangeChart').getContext('2d');
        var ageRangeChart = new Chart(ctxAgeRange, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($ageRangeChart['labels']); ?>,
                datasets: [{
                    label: 'Jumlah Penduduk berdasarkan Rentang Usia',
                    data: <?php echo json_encode($ageRangeChart['data']); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

    <div class="row mt-5">
        <div class="col-md-6">
            <canvas id="rt" width="400" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <?php
            // Tampilkan data jumlah penduduk berdasarkan kategori
            displayData('RT', 'Jumlah Penduduk berdasarkan Penduduk Per RT');

            // Tampilkan chart Penduduk Per RT
            $rtPeople = getDataForChart('RT');
            ?>
        </div>
    </div>

    <script>
        var rtCanvas = document.getElementById('rt').getContext('2d');
        var rtPeopleChart = new Chart(rtCanvas, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($rtPeople['labels']); ?>,
                datasets: [{
                    label: 'Jumlah Penduduk berdasarkan Penduduk Per RT',
                    data: <?php echo json_encode($rtPeople['data']); ?>,
                    backgroundColor: 'rgba(54, 12, 233, 0.2)',
                    borderColor: 'rgba(54, 12, 234, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

<div class="row mt-5">
        <div class="col-md-6">
            <canvas id="pekerjaan" width="400" height="200"></canvas>
        </div>
        <div class="col-md-6">
            <?php
            // Tampilkan data jumlah penduduk berdasarkan kategori
            displayData('pekerjaan', 'Jumlah Penduduk berdasarkan Pekerjaan');

            // Tampilkan chart Penduduk Per RT
            $rtPeople = getDataForChart('pekerjaan');
            calculateAverageOccupation(); 
            ?>
        </div>
    </div>

    <script>
        var pekerjaanCanvas = document.getElementById('pekerjaan').getContext('2d');
        var pekerjaanPeopleChart = new Chart(pekerjaanCanvas, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($rtPeople['labels']); ?>,
                datasets: [{
                    label: 'Jumlah Penduduk berdasarkan Penduduk Pekerjaan',
                    data: <?php echo json_encode($rtPeople['data']); ?>,
                    backgroundColor: 'rgba(54, 12, 233, 0.2)',
                    borderColor: 'rgba(54, 12, 234, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <?php
    // Tampilkan rerata mayoritas pekerjaan

    ?>

    
</div>



          </div>
        </div>


      </div>
    </section><!-- End monografi Section -->


    <!-- ======= Portfolio Section ======= -->
<section id="galery" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-left">
            <h2>Galeri Combongan</h2>
            <p>Berisi Gambar atau Dokumentasi kegiatan yang dilakukan di Padukuhan Combongan </p>
        </div>

      

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <?php
            // Include your database connection file
            include 'config/koneksi.php';

            $sql = "SELECT id_galeri, ket_foto, foto FROM tb_galeri";
            $result = $conn->query($sql);

            // Tampilkan galeri
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='col-lg-4 col-md-6 portfolio-item filter-app'>";
                    echo "<div class='portfolio-wrap'>";
                    echo "<img src='admin/content/tb_galeri/gambar/" . $row['foto'] . "' class='img-fluid' alt='" . $row['ket_foto'] . "'>";
                    echo "<div class='portfolio-info'>";
                    echo "<h4>" . $row['ket_foto'] . "</h4>";
                    echo "<p>App</p>";
                    echo "<div class='portfolio-links'>";
                    echo "<a href='admin/content/tb_galeri/gambar/" . $row['foto'] . "' data-gallery='portfolioGallery' class='portfolio-lightbox' title='" . $row['ket_foto'] . "'><i class='bx bx-plus'></i></a>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='text-muted'>Tidak ada data galeri.</p>";
            }
            ?>

        </div>

    </div>
</section><!-- End Portfolio Section -->






<!-- ======= Pengumuman Section ======= -->
<section id="pengumuman" class="pengumuman">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="section-title" data-aos="fade-right">
                    <h2>Pengumuman</h2>
                    <p>Berisi pengumuman yang ada di padukuhan combongan</p>
                </div>
            </div>
        </div>

        <?php
        // Include your database connection file
        include 'config/koneksi.php';

        $sql = "SELECT id_pengumuman, judul, isi, tgl_post FROM tb_pengumuman ORDER BY tgl_post DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();

        // Tampilkan pengumuman
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='col-lg-12'>";
                echo "<div class='pengumuman-item' data-aos='zoom-in' data-aos-delay='100'>";
                echo "<b><h3>" . $row['judul'] . "</h3></b>";
                echo "<p class='tgl-post'>Tanggal: " . $row['tgl_post'] . "</p>";
                echo "<p class='isi-pengumuman'>" . $row['isi'] . "</p>";
                echo "</div>";
                echo "</div>";
                // Tambahkan elemen pembatas antar pengumuman
                echo "<div class='col-lg-12'><hr class='pengumuman-divider'></div>";
            }
        } else {
            echo "<div class='col-lg-12'>";
            echo "<p class='text-muted'>Tidak ada pengumuman.</p>";
            echo "</div>";
        }

        $stmt->close();
        $conn->close();
        ?>

    </div>
</section><!-- End Pengumuman Section -->








    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
              <p>Disini Warga Padukuhan Combongan Desa Jambidan dapat mengakses Lokasi Padukuhan, Email, Kontak serta mengirimkan Pesan berupa Kritik, Saran atau masukan kepada Pengurus Padukuhan. TERIMAKSIH :)</p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
           
              <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15809.446649608122!2d110.4212481!3d-7.8571661!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a570047285455%3A0x14615c55e752a35!2sPadukuhan%20Combongan!5e0!3m2!1sid!2sid!4v1707631149954!5m2!1sid!2sid" frameborder="0" allowfullscreen></iframe>

            <div class="info mt-4">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Combongan,Jambidan,Banguntapan,Bantul</p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>
              </div>
            </div>

            <form class="mt-4" action="function/insert.php" method="post">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="NAMA" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan" required></textarea>
              </div>
              <div class="text-left"><button class="btn btn-success" type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Combongan</span></strong>. All Rights Reserved
        </div>
        
        <div class="credits">
          <!-- All the links in the footer should remain intact.
          <!-- You can delete the links only if you purchased the pro version.
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          Designed by <strong><span>Alfred Batilmurik</span>
        </div>
     <!--  </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div> -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File --><!--  --> -
  <script src="assets/js/main.js"></script>

</body>

</html>