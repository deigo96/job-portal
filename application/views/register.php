<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Sign Up</title>

    <style>
        .container{ 
            max-width: 960px;
        }
        .navbar-brand{
            border: 1px solid #fff;
            padding: .25rem .5rem;
            border-radius: 5px;
            background-color: black;
        }
        .card-body{
            font-size: 15px;
        }
        .needs-validation p{
            margin-bottom: 0.5rem;
        }
        @media(max-width: 768px){
            .card{
                width: 100% !important;
            }
        }

    </style>
</head>
<body>
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
    
    
    <div class="container p-5 p-md-5">
        <div class="row">
            <div class="col-md-12 order-md-1 p-5 p-md-5">
                <h4 class="mb-3 text-primary text-center">Register</h4>
                <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <!--<div class="row">
                        <div class="col-md-6 mb-2">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="First Name" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="lastName">Last Name</label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required
                            </div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="username">Username</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="username" name="username">
                        </div>
                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <?php echo form_open('Auth/register'); ?>
                    </div>
                    <div class="mb-2">
                        <label for="email">E-mail</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="your email">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@gmail.com</span>
                            </div>
                        </div>
                        <div class="alert alert-danger">
                            <?php echo form_error('username');?>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="password">Paswword</label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" placeholder="password" class="form-control">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="confirmPassword">Confirm Paswword</label>
                        <div class="input-group">
                            <input type="password" name="password2" id="password2" placeholder="Confirm Password" class="form-control">
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="gender">Gender</label>
                        <div class="form-group">
                            <select name="gender" id="gender" class="form-control">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label for="phone">Phone</label>
                        <div class="input-group">
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                    <hr class="mb-3 mt-2">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="register">Continue</button>
                    <p class="mt-3 mb-3">Already have an account? <a href="<?php echo base_url().'home/login' ?>"><span class="badge badge-info">Login</span></a></p>
                </form>
            </div>
            
        </div>
    </div>
    <div class="footer text-center bg-secondary pb-0">
        <p class="text-center font-weight-bold m-0 ">&copy; 2020-Nobody</p>
        <i class="mt-sm-0"> Image by <a href="https://pixabay.com/users/Pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1281581">Pexels</a> from <a href="https://pixabay.com/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1281581">Pixabay</a></i>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
    <script>
        $(".custom-file-input").on("change", function(){
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
</body>
</html>!-->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registration Page</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>/assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?php echo base_url().'home'; ?>" class="h1"><b>UBSI</b>Mobile</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Register a new membership</p>

                <form action="../../index.html" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password">
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
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>

                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div>
                <div class="text-center">
                    <a href="<?php echo base_url().'home/login';?>" class="text-center">I already have a membership</a>
                </div>
            </div>
        </div>
    </div>
<script src="<?php echo base_url()?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>/assets/dist/js/adminlte.min.js"></script>
</body>
</html>
