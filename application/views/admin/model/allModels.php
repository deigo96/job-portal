
    
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
                        <!-- <li class="nav-item">
                            <a href="<?php echo site_url('admin/allSpecs'); ?>" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>All Specs</p>
                            </a>
                        </li> -->
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
                                <h3 class="card-title">All Jobs</h3>
                            </div>
                            <?php if($this->session->flashdata('class')): ?>
                            <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                            <?php endif ; ?>
                            <div class="card-body pb-0">
                                <div class= "table">
                                    <!-- <div class="btn-group w-100 mb-2"> -->
                                        <?php if($allModels): ?>
                                            <table class="table table-bordered table-dark" id="example" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Company</th>
                                                        <th>Model</th>
                                                        <th>Price</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $i = 0;
                                                        foreach ($allModels as $model): 
                                                        $i++;
                                                    ?>
                                                        <tr>
                                                            
                                                            <td>
                                                                <?php echo $model->mId ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $model->mName ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $model->pName ?>
                                                            </td>
                                                            <td align=right>
                                                                <?php echo number_format($model->price, 0,',','.') ?>
                                                            </td>
                                                            
                                                            <td class="text-right py-0 align-middle">
                                                                <div class="btn-group btn-group-sm">
                                                                    <a href="<?php echo site_url('admin/editModel/'. $model->mId) ?>" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Edit</a>
                                                                    <!-- <a href="javascript:void(0)" class="btn btn-danger delcat" data-id="<?php echo $category->mId ?>" data-text="<?php echo $this->encryption->encrypt($category->mId) ?>">Delete</a> -->
                                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                                                                        <i class="fas fa-trash"></i> Delete
                                                                    </button>
                                                                </div> 
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
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
    <!-- modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure want to delete this data?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- <div class="modal-body">
                    ..
                </div> -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <a href="<?php echo site_url('admin/deleteModel/'.$model->mId) ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
    