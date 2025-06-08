<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
  <!-- MY CSS -->
  <link rel="stylesheet" href="css/landingpage.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

  <title>APKUKK</title>
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-white fixed-top ">
    <div class="container-fluid" id="navbar">
      <a class="navbar-brand text-dark fs-4 fw-bold" href="#">
        <img src="img/global.png" alt="" width="60" height="60" class="d-inline-block align-text-center ">
        SAPRAS
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto" style="font-size: large; ">
          <li class="nav-item dropdown">
            <a class="nav-link active " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-list"></i>
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item active bg-transparent" href="login2.php">Petugas</a></li>
              <br>
              <li><a class="dropdown-item active bg-transparent" href="login3.php">Pengelola</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#projects">Prosedure</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- AKHIR NAVBAR -->

  <!-- JUMBOTRON -->
  <section class="jumbotron text-center text-white">
    <div id="home">
      <h1 class="display-6" style="font-weight: bold;">Suara Anda Adalah Perubahan !</h1>
      <p class="lead">Suarakan Aspirasi Anda, Untuk Membangun Negeri Ini</p>
      <a class="btn btn-xl text-uppercase  " style="margin-right: 1rem;" href="login.php">Masuk </a>
      <a class="btn btn-xl text-uppercase " href="register.php">Daftar </a>
    </div>
  </section>
  <!-- AKHIR JUMBROTON -->

  <!-- PRODUCTS -->
  <section id="projects">
    <div class="container">
      <div class="row  ">
        <div class="col">
          <h2 class="text-center">Prosedure</h2>
          <br>
          <br>
        </div>
      </div>
      <div class="row " style="margin-left: 50px;">
        <div class="col-md-3 mb-3 ">
          <div class="card shadow py-3" style="width: 15rem;">
            <img src="img/writing.png" class="card-img-top">
            <div class="card-body">
              <h5 class="text-black fw-bold">1. Menulis Laporan</h5>
              <br>
              <p class="text-black text-center">Tuliskan Pengaduan Anda Dengan Jelas</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3 ">
          <div class="card shadow py-3" style="width: 15rem">
            <img src="img/ethics.png" class="card-img-top">
            <div class="card-body">
              <h5 class="text-black fw-bold">2. Proses Verifikasi</h5>
              <br>
              <p class="text-black text-center">Tunggu Sampai Laporan Anda Di Verifikasi</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card shadow py-3" style="width: 15rem">
            <img src="img/repair-tools.png" class="align-center">
            <div class="card-body">
              <h5 class="text-black fw-bold">3. Tindak Lanjut</h5>
              <br>
              <p class="text-black text-center">Laporan Anda Sedang Dalam Tindak Lanjut</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card shadow py-3" style="width: 15rem">
            <img src="img/successful.png" class="card-img-top align-center">
            <div class="card-body">
              <h5 class="text-black fw-bold">4. Selesai</h5>
              <br>
              <p class="text-black text-center">Laporan Pengaduan Anda Telah Selesai Di Tindak</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- AKHIR PRODUCTS -->

  <!-- AKHIR -->

  <!-- FOOTER -->
  <footer class=" bg-primary text-white text-center">
    <p>Created By,<a href="https://www.instagram.com/hafizyazid.nst/" class="text-white fw-bold">haris</a></p>
  </footer>
  <!-- AKHIR FOOTER -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>