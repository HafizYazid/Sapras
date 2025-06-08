<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'tulis_pengaduan';
            include 'tulis_pengaduan.php';
            break;

        case 'lihat_pengaduan';
            include 'lihat_pengaduan.php';
            break;

        case 'lihat_tanggapan';
            include 'lihat_tanggapan.php';
            break;
    }
} else {
?>
    Selamat Datang Di Website Pengaduan Sarana Prasarana <br><br>
    Anda Login Sebagai : <h2 class="text-primary"><b>
            <?php

            if (isset($_SESSION['nama']) && !empty($_SESSION['nama'])) {
                $user = $_SESSION['nama'];
            } else {
                // handle the case where the session variable is not set or empty
                $user = 'Unknown user';
            }
            echo 'Welcome, ' . $user . '!';
            require 'koneksi.php';
            $conn = mysqli_connect("localhost", "root", "", "sarana_prasarana");

            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $result = mysqli_query($conn, "SELECT * FROM pengaduan WHERE status='selesai'");
            if ($cek = mysqli_num_rows($result)) {

                mysqli_close($conn);
            ?>
                <br>
                <br>
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan Di Terima :</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Tanggapan dari Admin</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas  fa-envelope fa-2x text-gray-800"></i>
                                    <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php
            }
        }

        ?>