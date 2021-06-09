<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="login-logo">
                <a href="<?php echo base_url().'home'; ?>"><b>UBSI</b>Jobs</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="alert-danger text-center">
                        <?php if($this->session->flashdata('error')): ?>
                            <?php echo $this->session->flashdata('error'); ?>
                        <?php endif ; ?>
                    </p>
                    <?php echo form_open('home/register'); ?>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" placeholder="Name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="address" value="<?php echo set_value('address'); ?>" placeholder="Address">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>
                        <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <input type="email" name="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                            <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                        <div class="input-group mb-3">
                            <input type="password" name="password2" value="<?php echo set_value('password2'); ?>" class="form-control" placeholder="Retype Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                    <label for="agreeTerms">
                                    I agree to the <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>

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
                        <p class="mb-0">
                            <a href="<?php echo base_url().'home/login';?>" class="text-center">I already have an account</a>
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