<?php
require 'koneksi.php';
$conn = mysqli_connect('localhost', 'root', '', 'sarana_prasarana');

$id = mysqli_real_escape_string($conn, $_GET['id']);
$query = mysqli_prepare($conn, "UPDATE pengaduan SET status = 'dibaca' WHERE id_pengaduan = ?");
mysqli_stmt_bind_param($query, "s", $id);
mysqli_stmt_execute($query);
if ($query) {
    header('location:masyarakat.php?url=lihat_pengaduan');
}
?>