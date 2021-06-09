<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
</body>
</html>