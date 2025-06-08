<?php 
    require '../koneksi.php';

    $conn = mysqli_connect('localhost', 'root', '', 'sarana_prasarana');

    $nama=$_POST['nama_petugas'];
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $telp=$_POST['telp'];
    $level=$_POST['level'];
    $id=$_POST['id_petugas'];

    $sql = mysqli_query($conn, "UPDATE petugas set nama_petugas='$nama',username='$user',password='$pass',telp='$telp',level='$level' WHERE id_petugas='$id' ");

    if ($sql) 
    {
        ?>
        <script type="text/javascript">
            alert ('Data Petugas Berhasil Di Ubah');
            window.location="super_admin.php?url=lihat_petugas";
        </script>
    <?php 
    }
?>
