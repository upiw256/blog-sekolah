<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>
  <base href="<?= base_url('assets') ?>/">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>

<body class="hold-transition layout-top-nav ">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar-orange">
      <div class="container">
        <a href="index3.html" class="navbar-brand">
          <img src="image/logo.png" alt="Margaasih Logo" class="brand-image" style="opacity: .8">
          <span class="brand-text font-weight-light">SMAN 1 Margaasih</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">News</a>
            </li>
          </ul>

          <!-- SEARCH FORM -->
          <form class="form-inline ml-0 ml-md-3">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container ">
          <div class="row mb-2 ">
            <div class="col-sm-12 ">
              <!-- corousel -->
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner col-12">
                  <div class="carousel-item active">
                    <img src="https://picsum.photos/id/<?= rand(1, 20) ?>/1800/900" class="d-block w-100 img-thumbnail" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light bg-dark ">
                      <h5>Image 1</h5>
                      <p>Caption for image 1</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/id/<?= rand(1, 20) ?>/1800/900" class="d-block w-100 img-thumbnail" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light bg-dark">
                      <h5>Image 2</h5>
                      <p>Caption for image 2</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/id/<?= rand(1, 20) ?>/1800/900" class="d-block w-100 img-thumbnail" alt="...">
                    <div class="carousel-caption d-none d-md-block text-light bg-dark">
                      <h5>Image 3</h5>
                      <p>Caption for image 3</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
              <!-- end corousel -->
            </div><!-- /.col -->
            <!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">

              <div class="card card-primary card-outline">
                <div class="card-body">
                  <h5 class="card-title"><b>News 1</b></h5>
                  <div class="col-12">
                    <img src="https://picsum.photos/1800/900" class="img-fluid img-thumbnail" alt="...">
                  </div>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's
                    content.
                  </p>
                  <a href="#" class="card-link">Read More</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-4">
              <div class="card mb-2 bg-gray-dark">
                <img class="card-img-top" src="image/kepsek.png" alt="kepsek">
                <div class="card-img-overlay d-flex flex-column justify-content-end">
                  <h5 class="card-title text-primary text-white">Kepala Sekolah SMAN 1 Margaasih</h5>
                  <p class="card-text text-white pb-2 pt-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
                  <a href="#" class="text-white">Last update 2 mins ago</a>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- Default to the left -->
      <strong>Copyright &copy; 2022 <a href="<?= base_url() ?>">SMAN 1 Margaasih</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>