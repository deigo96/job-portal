
    
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
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h2>All Category</h2>
                            </div>
                            <?php if($this->session->flashdata('class')): ?>
                            <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                            <?php endif ; ?>
                            <div class="card-body">
                                <div>
                                    <div class="btn-group w-100 mb-2">
                                        <?php if($allCategories): ?>
                                            <table class="table table-bordered text-center">
                                                <!-- <tr>
                                                    <td>No.Id</td>
                                                    <td>Category Name</td>
                                                    <td></td>
                                                    <td></td>
                                                </tr> -->
                                                <?php foreach ($allCategories as $category): ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo $category->cId ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $category->cName ?>
                                                        </td>
                                                        <td>
                                                            <a href="<?php echo site_url('admin/editCategory/'. $category->cId) ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                        </td>
                                                        <td>
                                                            <!-- <a href="javascript:void(0)" class="btn btn-danger delcat" data-id="<?php echo $category->cId ?>" data-text="<?php echo $this->encryption->encrypt($category->cId) ?>">Delete</a> -->
                                                            <a href="<?php echo site_url('admin/deleteCategory/'.$category->cId) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </table>
                                            <?php echo $links;?>            
                                            <?php else: ?>
                                                Categories not available
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    
