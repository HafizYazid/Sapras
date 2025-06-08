<?php 
    require '../koneksi.php';

    $conn = mysqli_connect('localhost', 'root', '', 'sarana_prasarana');

    $id=$_GET['id'];

    $sql = mysqli_query($conn, "DELETE FROM petugas WHERE id_petugas='$id' ");

    if ($sql) 
    {
        ?>
        <script type="text/javascript">
            alert ('Data Petugas Berhasil Di Hapus');
            window.location="super_admin.php?url=lihat_petugas";
        </script>
    <?php 
    }
?>
