<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$this->config->config["pageTitleLogin"]?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets'); ?>/favicon.ico">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="login-logo">
                <a href="<?php echo site_url().'home';?>"><img src="<?= base_url('assets/'); ?>assets/img/logo/ubsiportal.png" alt="" style="width:167px;"></a>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="alert-danger text-center">
                        <?php if($this->session->flashdata('error')): ?>
                            <?php echo $this->session->flashdata('error'); ?>
                        <?php endif ; ?>
                    </p>

                    <form action="<?php echo site_url('home/checkUser') ?>" method="post">
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        </div>
                    </form>

                    <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div>
                    <div class="text-center">
                        <p class="mb-1">
                            <a href="<?php echo base_url().'home/forgot'; ?>">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="<?php echo base_url().'home/register';?>" class="text-center">Register a new membership</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>/assets/dist/js/adminlte.min.js"></script>
</body>
</html>