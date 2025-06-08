<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Petugas</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet" />
</head>

<body id="page-top">

  <div class="card shadow">
    <div class="card-header ">
      <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
    </div>
    <div class="card-body">
    <?php
    require '../koneksi.php';

    $conn = mysqli_connect('localhost', 'root', '', 'sarana_prasarana');

    $sql = mysqli_query($conn, "SELECT * FROM tanggapan WHERE id_tanggapan='$_GET[id]'");
    if($data = mysqli_fetch_array($sql))
     {
        // rest of your code
?>

      <form action="update_tanggapan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
      <div class="form-group cols-sm-6">
          <label>ID Tanggapan</label>
          <input type="text" name="id_tanggapan" value="<?php echo $data['id_tanggapan'];?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
          <label>ID Pengaduan</label>
          <input type="text" name="id_pengaduan" value="<?php echo $data['id_pengaduan'];?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
          <label>Tanggal Tanggapan</label>
          <input type="text" name="tgl_tanggapan" value="<?php echo $data['tgl_tanggapan'];?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
            <label>Isi Tanggapan</label>
            <textarea name="tanggapan" class="form-control"><?php echo $data['tanggapan'];?></textarea>
            </div>
        <div class="form-group cols-sm-6">
          <label>ID Petugas</label>
          <input type="text" name="id_petugas" value="<?php echo $data['id_petugas'];?>" class="form-control" readonly>
        </div>
        <div class="form-group col-sm-6">
          <input type="submit" onclick="return confirm('Yakin Mau Di Ubah ?')" value="Edit Data" class="btn btn-primary">
          <input type="reset" value="Kosongkan" class="btn btn-warning">
        </div>
      </form>
      <?php } 
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