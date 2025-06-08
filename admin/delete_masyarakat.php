<?php 
    require '../koneksi.php';

    $conn = mysqli_connect('localhost', 'root', '', 'sarana_prasarana');

    $nik=$_GET['nik'];

    $sql = mysqli_query($conn, "DELETE FROM masyarakat WHERE nik='$nik' ");

    if ($sql) 
    {
        ?>
        <script type="text/javascript">
            alert ('Data Masyarakat Berhasil Di Hapus');
            window.location="admin.php?url=lihat_masyarakat";
        </script>
    <?php 
    }
?>
