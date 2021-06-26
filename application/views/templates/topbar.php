<!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo" ">
                            <a href="<?= site_url('home'); ?>"><img src="<?= base_url('assets/'); ?>assets/img/logo/ubsiportal.png" alt="" style="width: 167px;"></a>
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
