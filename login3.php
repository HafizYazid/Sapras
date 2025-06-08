<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pengaduan Masyarkat</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <style>
    .background {
      background-image: url(https://images.pexels.com/photos/3760067/pexels-photo-3760067.jpeg?auto=compress&cs=tinysrgb&w=1600);
      background-size: cover;
    }
  </style>

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">

</head>

<body class="background">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="mt-5 col-xl-6 col-lg-6 col-md-9">

        <div class="card-transparent o-hidden border-0  my-5">
          <div class="card-body p-0 mt-10">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 d-none d-lg-block bg-login"></div>
              <div class="col-lg-12">
                <a href="index.php" class="btn mt-4 ml-4">
                  <span class="icon text-black-50">
                    <i class="fas fa-arrow-left"></i>
                  </span>
                </a>
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">SAPRAS</h1>
                    <h3>Silahkan Login !</h3>
                  </div>
                  <br>
                  <form class="user" method="post" action="cek_login3.php">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control">
                      </div>
                    </div>
                    <input type="submit" class="btn btn-light btn-user btn-block" value="Login">



                  </form>

                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>



    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>