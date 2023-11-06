
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
  <meta name="keywords" content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
  <meta name="author" content="elemis">
  <title>Sandbox - Modern & Multipurpose Bootstrap 5 Template</title>
  <link rel="shortcut icon" href="https://sandbox.elemisthemes.com/assets/img/favicon.png">
  <link rel="stylesheet" href="<?= base_url('assets/frontend'); ?>/plugins.css">
  <link rel="stylesheet" href="<?= base_url('assets/frontend'); ?>/style.css">
  <link rel="stylesheet" href="<?= base_url('assets/frontend'); ?>/aqua.css">
  <link rel="preload" href="<?= base_url('assets/frontend'); ?>/thicccboi.css" as="style" onload="this.rel='stylesheet'">
  <script src="https://cdn.jsdelivr.net/npm/apexcharts" type="text/javascript"></script>
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <!-- <diva class="alert bg-primary text-white alert-dismissible fade show rounded-0 mb-1 text-lg-center" role="alert">
        <div class="container">
          <div class="alert-inner d-flex justify-content-center align-items-center p-0">
            <span class="badge badge-lg bg-white text-primary text-uppercase rounded me-2">Update</span> New version of our product is finally <a href="#" class="alert-link link-white hover ms-1">here</a>!
          </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </diva> -->
      <!-- /.alert -->
      <nav class="navbar navbar-expand-lg classic transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="<?= site_url('home'); ?>">
              <img src="<?= $this->setting->get_name('site_logo_2'); ?>" width="180px"  alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
              <img src="<?= $this->setting->get_name('site_logo'); ?>" width="100px" alt="">
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
              <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link " href="<?= site_url('home'); ?>" >Beranda</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="<?= site_url('dataset'); ?>" >Dataset</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="#" >Organisasi</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="#" >Kategori</a>
                </li>
              </ul>
            </div>
            <!-- /.offcanvas-body -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other ms-lg-4">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
              <li class="nav-item d-none d-md-block">
                <a href="<?= site_url('auth'); ?>" class="btn btn-sm btn-primary rounded">Login</a>
              </li>
              <li class="nav-item d-lg-none">
                <button class="hamburger offcanvas-nav-btn"><span></span></button>
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-other -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
    </header>
    <!-- /header -->

    <?php include 'pages/'.$page_folder.'/'.$page_name.'.php'; ?>
    <!-- sinis -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-light">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-4">
          <div class="widget">
          <h4 class="widget-title  mb-3"><?= $this->setting->get_name('site_title'); ?></h4>
          <img src="https://satudata.banyuwangikab.go.id/assets/frontend/img/illustration/2.png" width="130px" alt="">
          <p>Menggunakan data secara bersama-sama dengan visualisasi data yang menarik.</p>
           
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <!-- /column -->
        <div class="col-md-4 col-lg-4">
          <div class="widget">
            <h4 class="widget-title  mb-3">Forum Satudata</h4>
            <ul class="list-unstyled text-reset mb-0">
              <li><a href="#">Diskominfo</a></li>
              <li><a href="#">Bappeda</a></li>
              <li><a href="#">BPS</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-4">
          <div class="widget">
            <h4 class="widget-title  mb-3">Kontak</h4>
            <p>
              Jl. Suro Hadikusumo, Kebondalem, Kec. Pemalang, Kabupaten Pemalang, Jawa Tengah 52312 <br>
              <b>Email : </b> <br>
              <b>Kontak : </b>  (0284) 321364
            </p>
            <p class="mb-5"><?= $this->setting->get_name('site_copyright'); ?>.</p>
            <nav class="nav social ">
              <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
              </svg>
              </a>
              <a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
              <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
              </a>
            </nav>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
      </div>
      <!--/.row -->
    </div>
    <!-- /.container -->
  </footer>
  <div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>
  <script src="<?= base_url('assets/frontend'); ?>/plugins.js"></script>
  <script src="<?= base_url('assets/frontend'); ?>/theme.js"></script>
</body>

</html>