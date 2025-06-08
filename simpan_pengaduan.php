<?php

// Create a mysqli connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'sarana_prasarana';
$link = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (!$link) {
  die('Connection error: ' . mysqli_connect_error());
}

$tgl = date('Y/m/d');
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$ft = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$st = 0;

$sql = ("INSERT INTO pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$ft','$st')");
$result = mysqli_query($link, $sql);

if ($result) {
  move_uploaded_file($file, "foto/" . $ft);
?>
  <script type="text/javascript">
    alert('Data Berhasil Disimpan, Terima Kasih Atas Laporan Anda');
    window.location = "masyarakat.php"
  </script>
<?php
} else {
  echo "Error: Could not execute query: " . mysqli_error($link);
}
?>