<?php 
    require '../koneksi.php';

    $conn = mysqli_connect('localhost', 'root', '', 'sarana_prasarana');

    $id_pengaduan = mysqli_real_escape_string($conn, $_POST['id_pengaduan']);
    $tgl = $_POST['tgl_tanggapan'];
    $tanggapan = $_POST['tanggapan'];
    $id_petugas = $_POST['id_petugas'];
    $st = 'selesai';

    $sql = mysqli_query($conn, "INSERT INTO tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) values('$id_pengaduan','$tgl','$tanggapan','$id_petugas')");
    $update_st = mysqli_query($conn, "UPDATE pengaduan SET status='$st' where id_pengaduan='$id_pengaduan'");
    if ($sql) 
    {
        ?>
        <script type="text/javascript">
            alert ('Data Sudah Berhasil Di Tanggapi');
            window.location="admin.php?url=verifikasi_pengaduan.php";
        </script>
    <?php 
    }
?>
