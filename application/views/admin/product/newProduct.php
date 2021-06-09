
    
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?php echo site_url('admin'); ?>" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>Categories
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/newCategory'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                            <p>New category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/allCategories'); ?>" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/newProduct'); ?>" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                            <p>New Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/allProducts'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Products</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>Model
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/newModel'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                            <p>New Model</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/allModels'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Models</p>
                            </a>
                        </li>
                    </ul>
                </li><li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>Spec
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/newSpec'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                            <p>New Spec</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/allSpecs'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Specs</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/allUsers'); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                            <p>All users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/allSpecs'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Specs</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content align-items-center">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-md-6 offset-3">
                    <?php if($this->session->flashdata('class')): ?>
                        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                            <?php echo $this->session->flashdata('message'); ?>
                        </div>
                    <?php endif ; ?>
                        <h3>Add New Product</h3>
                        <?php echo form_open_multipart('admin/addProduct', '', '') ?>
                            <div class="form-group">
                                <?php echo form_input('productName', '', array('placeholder' => 'Enter Job Name', 'class' => 'form-control')); ?>
                            </div>
                            <!-- <div class="form-group">
                                <?php echo form_input('company', '', array('placeholder' => 'Enter Company Model', 'class' => 'form-control')); ?>
                            </div> -->
                            <div class="form-group">
                                <?php
                                    $categoriesOptions = array();
                                    foreach ($categories->result() as $category) {
                                        $categoriesOptions[$category->cId] = $category->cName;
                                    }
                                    echo form_dropdown('categoryId', $categoriesOptions, '', 'class="form-control"');
                                ?>            
                            </div>
                            <div class="form-group">
                                <?php echo form_upload('prodDp', '',''); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_submit('Add Product', 'Add Product', 'class="btn btn-primary"') ?>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    <