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
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>User
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo site_url('admin/allUsers'); ?>" class="nav-link active">
                            <i class="far fa-circle nav-icon"></i>
                        <p>All users</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <i class="nav-icon fas fa-layer-group"></i>
                    <p>Application
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="<?php echo site_url('admin/allApplications'); ?>" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                        <p>All Application</p>
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
    <div class="content-wrapper">
        <section class="content">
                <div class="row">
                    <div class="col-md-6 offset-3 mt-3">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Proccess Candidate</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <?php if($this->session->flashdata('class')): ?>
                                <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                                    <?php echo $this->session->flashdata('message'); ?>
                                </div>
                                <?php endif ; ?>
                                <h3>Profile <?php echo $action->name ?></h3>
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $action->name ?>" id="" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $action->email ?>" id="" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $action->address ?>" id="" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $action->education ?>" id="" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $action->skills ?>" id="" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $action->cv ?>" id="" readonly class="form-control">
                                </div>
                                <!-- <?php 
                                    $cv = base_url('assets/images/cv/'.$action->cv);
                                    $file = file_get_contents($cv); 
                                ?>
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $file ?>" id="" readonly class="form-control">
                                </div> -->
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $action->pName ?>" id="" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="" value="<?php echo $action->mName ?>" id="" readonly class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name="" id="" cols="3" rows="3" class="form-control"><?php echo $action->mDescription ?></textarea>
                                </div>
                                <?php if($action->status == 3) { ?>
                                    <div class="form-group">
                                        <button class="btn btn-success offset-5" style="cursor:default">ACCEPTED</button>
                                    </div>   
                                <?php } elseif ($action->status == 2) { ?> 
                                    <div class="form-group">
                                        <button class="btn btn-danger offset-5" style="cursor:default">REJECTED</button>
                                    </div>   
                                <?php } else { ?> 
                                    <form action="<?php echo base_url('admin/actionProccess/') ?>" method="post">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <input type="hidden" name="id" value="<?php echo $action->id ?>">
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" name="accept" value="ACCEPT" class="btn btn-success btn-block">ACCEPT</button>
                                            </div>
                                            <div class="col-md-4">
                                                <button type="submit" name="reject" value="REJECT" class="btn btn-danger btn-block">REJECT</button>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </form>    
                                <?php } ?>
                            </div>
                        </div>                    
                    </div>
                </div>
        </section>
    </div>
    <!-- /.content-wrapper -->