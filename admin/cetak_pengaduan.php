<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CETAK</title>

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3"> <h6 class="m-0 font-weight-bold text-primary">Data Pengaduan</h6></div>
        <div class="card-body">
      <h3 class="m-0 font-weight-bold text-primary" align="center"> PEMERINTAH KECAMATAN MEDAN MARELAN</h3>
      <h4 class="m-0 font-weight-bold text-primary" align="center">DESA KELURAHAN RENGAS PULAU</h4>
      <h6 class="m-0 font-weight-bold text-primary" align="center">JALAN MARELAN 3 TIMUR KODE POS 40255</h6>
      <br>
      <br>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          
            <tr class="text-center">
            <th>ID Pengaduan</th>
             <th>Tanggal Pengaduan</th>
             <th>NIK</th>
             <th>Isi Laporan</th>
             <th>Gambar</th>
             <th>Status</th>
            </tr>
          <tbody class="text-center">
            <?php
            // Create a mysqli connection
            require '../koneksi.php';
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'sarana_prasarana';
            $link = mysqli_connect($host, $username, $password, $database);

            // Check if the connection was successful
            if (!$link) {
              die('Connection error: ' . mysqli_connect_error());
            }

            // Select the database
            mysqli_select_db($link, $database);

            // Retrieve data from the database
            $sql = "SELECT * FROM pengaduan";
            $result = mysqli_query($link, $sql);

            // Output the data in a table
            while ($data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $data['id_pengaduan'] . "</td>";
                echo "<td>" . $data['tgl_pengaduan'] . "</td>";
                echo "<td>" . $data['nik'] . "</td>";
                echo "<td>" . $data['isi_laporan'] . "</td>";
                echo "<td><img src='../foto/" . $data['foto'] . "' width='100' height='100'></td>";
                echo "<td>" . $data['status'] . "</td>";
                echo "</tr>";  
            }
            ?>

          </tbody>
        </table>
        <br>
        <br>
      </div>
      <h6 class="m-0 font-weight-bold text-primary" align="right">Rengas Pulau, <?php echo date('Y-m-d');?></h6><br>
      <h6 class="m-0 font-weight-bold text-primary" align="right">Petugas</h6>
      <br><br><br><br>
      <h6 class="m-0 font-weight-bold text-primary" align="right"><?php echo $_SESSION['nama'];?></h6>
    </div>
  </div>
  

  <script type="text/javascript">
    window.print();
  </script>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>