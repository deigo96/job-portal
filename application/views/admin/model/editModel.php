
    
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
                            <a href="<?php echo site_url('admin/allCategories'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All categories</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>Product
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/newProduct'); ?>" class="nav-link">
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
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
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
                            <a href="<?php echo site_url('admin/allModels'); ?>" class="nav-link active">
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
                    <div class="col-md-6 offset-1">
                        <?php if($this->session->flashdata('class')): ?>
                            <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                        <?php endif ; ?>
                        <h3>Update Model</h3>
                        <?php echo form_open_multipart('admin/updateModel', '', '') ?>
                            <div class="form-group">
                                <?php echo form_input('modelName', $models[0]['mName'], array('placeholder' => 'Enter Model Name', 'class' => 'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_input('location', $models[0]['location'], array('placeholder' => 'Enter Location', 'class' => 'form-control')); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_textarea('md', $models[0]['mDescription'], array('placeholder' => 'Enter Model Descriptions', 'class' => 'form-control')) ?>
                            </div>
                            <input type="hidden" name="mDi" value="<?php echo $models[0]['mId']; ?>">
                            <input type="hidden" name="oldImg" value="<?php echo $models[0]['mDp']; ?>">
                            <div class="form-group">
                                <?php
                                    $productOptions = array();
                                    foreach ($products->result() as $product) {
                                        $categoriesOptions[$product->pId] = $product->pName;
                                    }
                                    echo form_dropdown('productId', $categoriesOptions, $models[0]['productId'], 'class="form-control"');
                                ?>            
                            </div>
                            <div class="form-group">
                                <input type="number" name="price" min="0" step="1000" id="price" placeholder="0.00" class="form-control" value="<?= $models[0]['price'] ?>">   
                            </div>
                            <div class="form-group">
                                <?php echo form_upload('modelDp', '',''); ?>
                            </div>
                            <div class="form-group">
                                <?php echo form_submit('Update Job', 'Update Job', 'class="btn btn-primary"') ?>
                            </div>
                        <?php echo form_close(); ?>
                    
                    </div>
                    <div class="col-md-4">
                        <img src="<?php echo base_url('assets/images/models/'. $models[0] ['mDp']); ?>" alt="" class="img embed-responsive">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    