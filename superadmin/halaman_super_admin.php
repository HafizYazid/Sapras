<?php
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    switch ($url) {
        case 'lihat_petugas';
        include 'lihat_petugas.php';
        break;

        case 'tambah_petugas';
        include 'tambah_petugas.php';
        break;

        case 'simpan_petugas';
        include 'simpan_petugas.php';
        break;

        case 'edit_petugas';
        include 'edit_petugas.php';
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
            $user = 'Pengelola';
        }

        echo  $user . '!';
    }
        ?>