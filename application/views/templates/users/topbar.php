<!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo" ">
                            <a href="<?php echo site_url().'home';?>"><img src="<?= base_url('assets/'); ?>assets/img/logo/logo.png" alt="" style="width: auto;"></a>
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
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                                <li><a href="<?php echo site_url().'jobdetails'; ?>">job Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo site_url().'contact'; ?>">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>          
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                <div class="btn-group">
                                    <a href="<?php echo 'home/userProfiles/'.$profiles['uId']; ?>" class="genric-btn primary-border"><?php echo $profiles['name']; ?></a>
                                    <button type="button" class="genric-btn primary-border dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo 'home/userProfiles/'. $profiles['uId']; ?>"><i class="far fa-user"></i> Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?php echo site_url().'home/logOut'; ?>" type="submit"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                    </div>
                                </div>
                                <!-- <li class="nav-item dropdown">
                                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Dropdown</a>
                                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                        <li><a href="#" class="dropdown-item">Some action </a></li>
                                        <li><a href="#" class="dropdown-item">Some other action</a></li>
                                        <li class="dropdown-divider"></li>
                                    </ul>
                                </li> -->
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
