
<!DOCTYPE html>
<html lang="en" data-theme="light" data-layout="topnav" data-topbar-color="dark" data-layout-mode="fluid" data-layout-position="fixed">

<head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url('assets/template/creative/'); ?>assets/images/favicon.ico">
        
        <!-- Theme Config Js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/js/hyper-config.js"></script>

        <!-- Icons css -->
        <link href="<?= base_url('assets/template/creative/'); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="<?= base_url('assets/template/creative/'); ?>assets/css/app-creative.min.css" rel="stylesheet" type="text/css" id="app-style" />
    </head>
    
    <body class="authentication-bg">
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <!-- Logo -->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="<?= $this->setting->get_name('site_logo'); ?>" alt="logo" height="90"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                    <p class="text-muted mb-4">Enter your  Username and password to access admin panel <b><?= $this->setting->get_name('site_name'); ?></b>.</p>
                                </div>

                              <?php if($this->session->flashdata('error')): ?>
                                <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                                    <?= $this->session->flashdata('error'); ?>
                                </div>
                                <?php endif; ?>
                                <?= form_open('auth/login'); ?>

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input class="form-control" type="username" autocomplete="off" name="username" id="username"  placeholder="Enter your email">
                                       <small class="text-danger"> <?php echo form_error('username'); ?></small>
                                   
                                    </div>

                                    <div class="mb-3">
                                        <a href="" class="text-muted float-end"><small>Forgot your password?</small></a>
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                       <small class="text-danger"> <?php echo form_error('password'); ?></small>
                                    </div>

                                    <div class="mb-3 mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 mb-0 text-center">
                                        <button class="btn btn-primary" name="submit" type="submit"> Log In </button>
                                    </div>
                            <?= form_close(); ?>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Don't have an account? <a href="" class="text-muted ms-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            <?= $this->setting->get_name('site_year') ?> -  © <?= $this->setting->get_name('site_copyright') ?>
        </footer>
        <!-- Vendor js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/js/vendor.min.js"></script>
        
        <!-- App js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/js/app.min.js"></script>

    </body>

<!-- Mirrored from coderthemes.com/hyper_2/creative/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 24 Sep 2022 08:38:31 GMT -->
</html>
