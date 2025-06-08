<?php 
    require '../koneksi.php';

    $conn = mysqli_connect('localhost', 'root', '', 'sarana_prasarana');

    $id=$_POST['id_tanggapan'];
    $tanggapan=$_POST['tanggapan'];

    $sql = mysqli_query($conn, "UPDATE tanggapan SET tanggapan='$tanggapan' WHERE id_tanggapan='$id' ");

    if ($sql) 
    {
        ?>
        <script type="text/javascript">
            alert ('Data Tanggapan Berhasil Di Ubah');
            window.location="admin.php?url=lihat_tanggapan";
        </script>
    <?php 
    }
?>
