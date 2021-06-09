<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url()?>/assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <title>Login</title>
    <style>
        .alert:empty{
            display: none;
        }
        .form-contact p a{
            text-decoration: none;
        }
        .alert-danger{
            border-radius: 3px !important;
        }
    </style>
</head>
<body class="login-page sidebar-collapse">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <b class="navbar-brand display-5 text-primary ">UBSI</b>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="home.html" class="nav-link disabled">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="contact.html" class="nav-link disabled">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="aboutus.html"class="nav-link disabled">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="genre.html" class="nav-link dropdown-toggle disabled" id="dropdown4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Genre</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown4">
                        <a href="#" class="dropdown-item">Romance</a>
                        <a href="#" class="dropdown-item">Science</a>
                        <a href="#" class="dropdown-item">History</a>
                        <a href="#" class="dropdown-item">Kids</a>
                        <a href="#" class="dropdown-item">Biographies</a>
                        <a href="#" class="dropdown-item">Fantasy</a>
                    </div>
                </li>
            </ul>
            <form action="" class="form-inline mt-2 mt-md-0">
                <a href="<?php echo base_url().'/home' ?>" class="btn btn-outline-primary my-2 my-sm-0 px-3">Back</a>
            </form>
        </div>
    </nav>       
    <form action="<?php echo base_url('home/account'); ?>" class="form-contact" method="POST" enctype="multipart/form-data" autocomplete="off">
        <?php echo form_open('home/account'); ?>
        <h2 class="pb-0 text-center text-primary"><strong>LOGIN</strong></h2>
        <hr class="mb-3 mt-0">
        <div class="alert-danger alert-dismissible mb-3">    
            <button type="button" class="close" data-dismiss="alert">&times;</button>    
            <div class="pl-3"></div>
        </div>
        <div class="pl-3"><?php echo form_error('username'); ?></div>
        <div class="form-label-group">
            <input type="text" id="inputName" name="username" class="form-control" placeholder="Username or Email">
            <label for="inputName">Username or Email</label>
        </div>
        <div class="pl-3"><?php echo form_error('password'); ?></div>
        <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" autocomplete="cc-number" placeholder="Password">
            <label for="inputPassword">Password</label>
        </div>
        <div class="checkbox mb-3">
            <label class="float-right">
                <input type="checkbox" value="remember-me"> Remember me
            </label>            
            <a href="#myModal" data-toggle="modal">Forgot Password?</a>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login">Login</button>
        <p class="text-center mt-3 mb-3">Create an account! <a href="<?php echo base_url().'home/signup' ?>"><span class="badge badge-info">Sign up</span></a></p>
    </form>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Use These Accounts</h4>
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>USERNAME</th>
                                <th>PASSWORD</th>
                            </tr>
                        </thead>
                        <tbody style="font-family: serif;">
                            <tr>
                                <th>deigo</th>
                                <th>deigo</th>
                            </tr>
                            <tr>
                                <th>ell</th>
                                <th>ell</th>
                            </tr>
                            <tr>
                                <th>rizky</th>
                                <th>rizky</th>
                            </tr>
                            <tr>
                                <th>agus</th>
                                <th>agus</th>
                            </tr>
                            <tr>
                                <th>eti</th>
                                <th>eti</th>
                            </tr>
                        </tbody>
                    </table> 
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="page-header header-filter" style="background-image: url('<?= base_url()?>assets/images/bg7.jpg); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                    <div class="card card-login">
                        <form action="" method="post" class="form">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Login</h4>
                                <div class="social-line">
                                    <a href="#" class="btn btn-just-icon btn-link"><i class="fa fa-facebook-square"></i></a>
                                    <a href="#" class="btn btn-just-icon btn-link"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="btn btn-just-icon btn-link"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                            <p class="description text-center">Or Be Classical</p>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">face</i>
                                        </span>
                                    </div>
                                    <input type="text" name="" id="" placeholder="Email..." class="form-control">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input type="email" name="" id="" placeholder="First Name..." class="form-control">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" name="" id="" placeholder="Password..." class="form-control">
                                </div>
                                <button type="submit" class="btn btn-block btn-primary ml-2">LOGIN</button>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-link btn-wd btn-lg">Forgot Password</a>
                                    <a href="<?php echo base_url().'home/signup' ?>" class="btn btn-primary btn-link btn-wd btn-lg">Create an account!</a>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>!-->

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
                <a href="<?php echo site_url().'home'; ?>"><b>UBSI</b>Jobs</a>
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