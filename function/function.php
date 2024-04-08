<?php include 'config/koneksi.php' ?>

<?php
function displayDesaData()

{

    global $conn;
    
    $sql = "SELECT * FROM desa";
    $result = $conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<h3>Data Desa</h3>";
                echo "<table class='table table-bordered'>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                echo "<th>Informasi Desa</th>";
                echo "<th>Keterangan</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th>Nama Desa</th>";
                    echo "<td>{$row['nama_desa']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Kelurahan</th>";
                    echo "<td>{$row['kelurahan']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Tahun Pembentukan</th>";
                    echo "<td>{$row['tahun_pembentukan']}</td>";
                    echo "</tr>";
                    
                    echo "<tr>";
                    echo "<th>Dasar Hukum Pembentukan</th>";
                    echo "<td>{$row['dasar_hukum_pembentukan']}</td>";
                    echo "</tr>";
                 
                    echo "<tr>";
                    echo "<th>Nomor Kota Wilayah</th>";
                    echo "<td>{$row['nomor_kota_wilayah']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Kode Pos</th>";
                    echo "<td>{$row['kode_pos']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>kecamatan</th>";
                    echo "<td>{$row['kecamatan']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Kabupaten Kota</th>";
                    echo "<td>{$row['kabupaten_kota']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Provinsi</th>";
                    echo "<td>{$row['provinsi']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Tingkat Perkembangan Desa</th>";
                    echo "<td>{$row['tingkat_perkembangan_desa']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>Luas Wilayah</th>";
                    echo "<td>{$row['luas_wilayah']}</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<th>UMR Kabupaten</th>";
                    echo "<td>{$row['umr_kabupaten']}</td>";
                    echo "</tr>";
                    // Add more rows as needed
                }

                echo "</tbody>";
                echo "</table>";
             
            } else {
                echo "<div class='container mt-5'>";
                echo "Tidak ada data desa.";
                echo "</div>";
            }
        } else {
            echo "<div class='container mt-5'>";
            echo "Error: " . $conn->error;
            echo "</div>";
        }
        
        // Add the rest of your code for the second column her
    
    }



    function displayTopologiDesa()
    {
        global $conn;

        $topologi = "SELECT * FROM topologi_desa";
        $result = $conn->query($topologi);

        if ($result) {
            if ($result->num_rows > 0) {
                echo "<h3>Data Topologi Desa</h3>";
                echo "<table class='table table-bordered'>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                echo "<th colspan='2'>Topologi Desa</th>";
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

               // Tampilkan judul kolom pertama di luar loop
echo "<tr>";
echo "<td>Topologi Desa</td>";
echo "<td>"; // Buka kolom data
$label = ord('a');

while ($row = $result->fetch_assoc()) {
    echo chr($label) . ". {$row['jenis_topologi']}<br>";
    
    // Tambahkan kolom-kolom lain sesuai kebutuhan

    // Increment huruf
    $label++;
}
echo "</td>"; // Tutup kolom data
echo "</tr>";


                echo "</tbody>";
                echo "</table>";
              
            } else {
                echo "<div class='container mt-5'>";
                echo "Tidak ada data topologi desa.";
                echo "</div>";
            }
        } else {
            echo "<div class='container mt-5'>";
            echo "Error: " . $conn->error;
            echo "</div>";
        }
    }





    function displayJarakDesa()
    {
        global $conn;

        $jarak = "SELECT * FROM jarak_pemerintahan";
        $result = $conn->query($jarak);
    
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<h3>Data Jarak Desa</h3>";
                echo "<table class='table table-bordered'>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                echo "<th>Jarak Desa</th>";
                echo "<th>Keterangan</th>";
                echo "</tr>";
                echo "<tbody>";
    
                while ($row = $result->fetch_assoc()) {

                    echo "<tr>";

                echo "<th>Kecamatan</th>";
                echo "<td>{$row['kecamatan']} Km</td>";
                echo "</tr>";
             
                echo "<tr>";

                echo "<th>Kabupaten</th>";
                echo "<td>{$row['kabupaten']} Km</td>";
                echo "</tr>";
                echo "<tr>";

                echo "<th>Provinsi</th>";
                echo "<td>{$row['provinsi']} Km</td>";
                echo "</tr>";
                
                echo "</thead>";
                    echo "</tr>";
                }
    
                echo "</tbody>";
                echo "</table>";
                
            } else {
                echo "<div class='container mt-5'>";
                echo "Tidak ada data jarak desa.";
                echo "</div>";
            }
        } else {
            echo "<div class='container mt-5'>";
            echo "Error: " . $conn->error;
            echo "</div>";
        }
      
    }
    
    


    function displayBatasDesa()
    {
        global $conn;

        $batas = "SELECT * FROM batas_wilayah";
        $result = $conn->query($batas);
    
        if ($result) {
            if ($result->num_rows > 0) {
                echo "<h3>Data Batas Wilayah</h3>";
                echo "<table class='table table-bordered'>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                echo "<th>Batas Wilayah Desa</th>";
                echo "<th>Keterangan</th>";
                echo "</tr>";
                echo "<tbody>";
    
                while ($row = $result->fetch_assoc()) {

                    echo "<tr>";

                echo "<th>Utara</th>";
                echo "<td>{$row['utara']}</td>";
                echo "</tr>";
             
                echo "<tr>";

                echo "<th>Selatan</th>";
                echo "<td>{$row['selatan']} </td>";
                echo "</tr>";
                echo "<tr>";

                echo "<th>Timur</th>";
                echo "<td>{$row['timur']} </td>";
                echo "</tr>";
                
                
                echo "<th>Barat</th>";
                echo "<td>{$row['barat']} Km</td>";
                echo "</tr>";
                echo "</thead>";
                    echo "</tr>";
                }
    
                echo "</tbody>";
                echo "</table>";
               
            } else {
                echo "<div class='container mt-5'>";
                echo "Tidak ada data jarak desa.";
                echo "</div>";
            }
        } else {
            echo "<div class='container mt-5'>";
            echo "Error: " . $conn->error;
            echo "</div>";
        }
      
    }
    




    function displaySaranaDesa()
    {
        global $conn;

        $Sarana = "SELECT * FROM sarana_prasarana";
        $result = $conn->query($Sarana);
    
        if ($result) {
            if ($result->num_rows > 0) {
               
                echo "<h3>Data Sarana Wilayah</h3>";
               
                echo "<table class='table table-bordered'>";
                echo "<thead class='thead-dark'>";
                echo "<tr>";
                echo "<th>Sarana Desa</th>";
               
                echo "<th>Jumlah</th>";   echo "</td>";
                  echo "<tbody>";
    
                while ($row = $result->fetch_assoc()) {

                    echo "<tr>";
                    echo "<td>{$row['sarana_desa']}</td>";
                   
                echo "<td>{$row['jumlah']}</td>";
             echo "</td>";
               
                }
    
                echo "</tbody>";
                echo "</table>";
              
            } else {
                echo "<div class='container mt-5'>";
                echo "Tidak ada data jarak desa.";
                echo "</div>";
            }
        } else {
            echo "<div class='container mt-5'>";
            echo "Error: " . $conn->error;
            echo "</div>";
        }
      
    }
    



   
    

    // Fungsi untuk menampilkan data jumlah penduduk berdasarkan kategori (untuk chart)
    function getDataForChart($category)
    {
        global $conn;

        $data = array();

        $sql = "SELECT $category, COUNT(*) as jumlah FROM tb_penduduk GROUP BY $category";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data['labels'][] = $row[$category];
                $data['data'][] = $row['jumlah'];
            }
        }

        return $data;
        
    }

    // Fungsi untuk menampilkan data jumlah penduduk berdasarkan kategori
    function displayData($category, $label)
    {
        global $conn;

        $sql = "SELECT $category, COUNT(*) as jumlah FROM tb_penduduk GROUP BY $category";
        $result = $conn->query($sql);
        $dat = "SELECT COUNT(*) as total FROM tb_penduduk";
        $dat1 = $conn->query($dat);
        if ($dat1->num_rows > 0) {
            $dat2 = $dat1->fetch_assoc();
            $total = $dat2['total'];
            if ($result->num_rows > 0) {
       
                echo "<h3>$label</h3>";
       
                echo "<table class='table'>";
       
                echo "<thead><tr><th>$category</th><th>Jumlah</th></tr></thead><tbody>";
       
                while ($row = $result->fetch_assoc()) {
       
                    echo "<tr><td>{$row[$category]}</td><td>{$row['jumlah']} Jiwa</td></tr>";
       
                }
       
                echo "<th>Total Data Penduduk</th><td>{$total} Jiwa</td></tbody></table>";
       
            } else {
       
                echo "Tidak ada data.";
        }
        }
    }
  

    // Fungsi untuk menampilkan rerata mayoritas pekerjaan
    function calculateAverageOccupation()
    {
        global $conn;

        $sql = "SELECT pekerjaan, COUNT(pekerjaan) as jumlah FROM tb_penduduk GROUP BY pekerjaan ORDER BY jumlah DESC LIMIT 1";

        $result = $conn->query($sql);
      

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $kategoriTerbanyak = $row['pekerjaan'];
                $jumlah = $row['jumlah'];

                echo "<h3>Kategori Pekerjaan Terbanyak</h3>";
                echo "<p>Mayoritas Pekerjaan {$kategoriTerbanyak} dengan jumlah sebanyak {$jumlah} orang.</p>";
            } else {
                echo "Tidak ada data.";
            }
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Fungsi untuk menampilkan total data penduduk
    function displayTotalPenduduk()
    {
        global $conn;

        $sql = "SELECT COUNT(*) as total FROM tb_penduduk";
        $result = $conn->query($sql);

        if ($result) {
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $total = $row['total'];

                echo "<h3>Total Data Penduduk</h3>";
                echo "<p>Total data penduduk adalah {$total} orang.</p>";
            } else {
                echo "Tidak ada data.";
            }
        } else {
            echo "Error: " . $conn->error;
        }
    }