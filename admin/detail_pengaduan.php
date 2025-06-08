<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Tulis Pengaduan Anda</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">

    <div class="card shadow">
        <div class="card-header">
            Verifikasi Pengaduan
        </div>
        <?php
                require '../koneksi.php';
                $conn = mysqli_connect('localhost','root','','sarana_prasarana');

                $id = mysqli_real_escape_string($conn, $_GET['id']);
                $query = mysqli_prepare($conn, "SELECT * FROM pengaduan where id_pengaduan = ?");
                mysqli_stmt_bind_param($query, "s", $id);
                mysqli_stmt_execute($query);
                $result = mysqli_stmt_get_result($query);
                $data = mysqli_fetch_array($result);
                if ($result) {
                    // Your code to display or process the retrieved data goes here
            ?>
        <div class="card-body">
            <div class="from-group cols-sm-6">
                <a href="?url=verifikasi_pengaduan.php" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-arrow-left"></i>
                    </span>
                    <span class="text">Kembali</span>
                </a>

                <a href="proses.php?id=<?php echo $data['id_pengaduan'];?>" class="btn btn-danger btn-icon-split" onclick="return confirm('Yakin Akan Di Proses ?')">
                    <span class="icon text-white-50">
                        <i class="fas fa-check"></i>
                    </span>
                    <span class="text">Proses Verifikasi</span>
                </a>
            </div>
            <div class="card-body">
                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">

                   
                        <div class="form-group cols-sm-4">
                            <label>Tanggal Pengaduan</label>
                            <input type="text" name="tgl_pengaduan" value="<?php echo isset($data['tgl_pengaduan']) ? $data['tgl_pengaduan'] : ''; ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group cols-sm-6">
                            <label>Isi Laporan</label>
                            <textarea class="form-control" rows="7" name="isi_laporan" readonly=""><?php echo isset($data['isi_laporan']) ? $data['isi_laporan'] : ''; ?></textarea>
                        </div>
                        <div class="form-group cols-sm-6">
                            <label>Bukti Foto</label>
                            <div>
                            <img src="../foto/<?php echo $data['foto'];?>" alt="" width="600">
                        </div>
                        </div>
                    <?php 
                    }
                    ?>

            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="../js/sb-admin-2.min.js"></script>
</body>

</html>