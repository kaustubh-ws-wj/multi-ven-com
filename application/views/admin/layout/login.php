<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo ADMINASSETS; ?>vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?php echo ADMINASSETS; ?>vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo ADMINASSETS; ?>vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo ADMINASSETS; ?>css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo ADMINASSETS; ?>images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
          <div class="row flex-grow">
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
              <div class="auth-form-transparent text-left p-3">
                <div class="brand-logo">
                  <img src="http://www.bootstrapdash.com/demo/stellar-admin/jquery/template/assets/images/logo.svg" alt="logo">
                </div>
                <h4>Welcome back!</h4>
                <h6 class="font-weight-light">Happy to see you again!</h6>
                <!-- <form class="pt-3"> -->
                <?php echo form_open(site_url() . "auth/login"); ?>
                  <div class="form-group">
                    <label for="exampleInputEmail">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="icon-user text-primary"></i>
                        </span>
                      </div>
                      <?php echo form_input($identity); ?>
                      <!-- <input type="text" class="form-control form-control-lg border-left-0" id="" placeholder="Username"> -->
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword">Password</label>
                    <div class="input-group">
                      <div class="input-group-prepend bg-transparent">
                        <span class="input-group-text bg-transparent border-right-0">
                          <i class="icon-lock text-primary"></i>
                        </span>
                      </div>
                      <?php echo form_input($password); ?>
                      <!-- <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password"> -->
                    </div>
                  </div>
                  <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?> Keep me signed in 
                    </div>
                    <a href="<?= site_url() ?>auth/forgot_password" class="auth-link text-black"><?php echo lang('login_forgot_password'); ?></a>
                  </div>
                  <div class="my-3">
                    <?php echo form_submit('submit','LOGIN',array('class' => 'btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn')); ?>
                    <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">LOGIN</a> -->
                  </div>
                  
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
                  </div>
                  <?php echo form_close(); ?>
              </div>
            </div>
            <div class="col-lg-6 login-half-bg d-flex flex-row">
              <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018 All rights reserved.</p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo ADMINASSETS; ?>vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo ADMINASSETS; ?>js/off-canvas.js"></script>
    <script src="<?php echo ADMINASSETS; ?>js/hoverable-collapse.js"></script>
    <script src="<?php echo ADMINASSETS; ?>js/misc.js"></script>
    <script src="<?php echo ADMINASSETS; ?>js/settings.js"></script>
    <script src="<?php echo ADMINASSETS; ?>js/todolist.js"></script>
    <!-- endinject -->
  </body>


</html>