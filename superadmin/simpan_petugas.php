<?php 
    require '../koneksi.php';

    $conn = mysqli_connect('localhost', 'root', '', 'sarana_prasarana');

    $nama=$_POST['nama_petugas'];
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $telp=$_POST['telp'];
    $level=$_POST['level'];

    $sql = mysqli_query($conn, "INSERT INTO petugas(nama_petugas,username,password,telp,level) values('$nama','$user','$pass','$telp','$level')");

    if ($sql) 
    {
        ?>
        <script type="text/javascript">
            alert ('Petugas Berhasil Di Tambah');
            window.location="super_admin.php?url=lihat_petugas";
        </script>
    <?php 
    }
?>
