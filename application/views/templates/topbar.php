<!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo" ">
                            <a href="<?= site_url('home'); ?>"><img src="<?= base_url('assets/'); ?>assets/img/logo/logo.png" alt="" style="width: auto;"></a>
                        </div>  
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="<?php echo site_url().'home'; ?>">Home</a></li>
                                        <li><a href="<?php echo site_url().'joblist'; ?>">Find a Jobs </a></li>
                                        <li><a href="<?php echo site_url().'about'; ?>">About</a></li>
                                        <li><a href="#">Page</a>
                                            <ul class="submenu">
                                                <li><a href="#">Blog</a></li>
                                                <li><a href="#">Blog Details</a></li>
                                                <li><a href="#">Elements</a></li>
                                                <li><a href="#">job Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo site_url().'contact'; ?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>          
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                <a href="<?php echo site_url().'home/login'; ?>" type="submit" class="btn head-btn1">Login</a>
                                <a href="<?php echo site_url().'home/register'; ?>" type="submit" class="btn head-btn2">Register</a>
                                <!-- <a href="#" class="btn head-btn1">Register</a>
                                <a href="#" class="btn head-btn2">Login</a> -->
                                <div class="input-group pb-modalreglog-input-group">
                <!-- <button class="btn head-btn1 pb-modalreglog-submit" data-toggle="modal" data-target="#myModal">Login</button>
                <button class="btn head-btn2 pb-modalreglog-submit" data-toggle="modal" data-target="#myModal2">Register</button> -->
            </div>
            <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body"><div class="form-title text-center">
                            <h4>Login</h4>
                        </div>
                        <?php if($this->session->flashdata('error')): ?>
                            <?php echo $this->session->flashdata('error'); ?>
                        <?php endif ; ?>
                        <div class="d-flex flex-column text-center">
                        <form action="<?php echo site_url().'home/checkUser'; ?>" method="post">
                                <div class="form-group">
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Your Email Address...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="password" name="password" class="form-control" id="pws" placeholder="Your Password...">
                                    </div>
                                </div>
                                <button type="button" class="btn btn-info btn-block btn-round">Login</button>
                            </form>
                        </div>
                    <div class="text-center text-muted delimiter">or use a social network</div>
                        <div class="d-flex justify-content-center social-buttons">
                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fab fa-facebook"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="fab fa-linkedin"></i>
                            </button>
                        </div>
                    </div>
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="form-title text-center">
                            <h4>Register</h4>
                        </div>
                        <?= validation_errors() ?>
                        <?= form_open(base_url('home/register')) ?>
                            <form class="pb-modalreglog-form-reg">
                                <div class="form-group">
                                    <div id="pb-modalreglog-progressbar"></div>
                                </div>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control" id="inputPws" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="confirmpassword">Confirm password</label>
                                    <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                        <input type="password" class="form-control" id="inputConfirmPws" placeholder="Confirm Password" required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info btn-block btn-round" value="register">Register</button>
                        </div>
                        <?= form_close() ?> -->

                        <!-- <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Already have an account? <a href="<?= base_url(); ?>" data-toggle="modal" data-target="#myModal" class="text-info"> Login</a>.</div>
      </div> -->
                    </div>
                </div>
            </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
