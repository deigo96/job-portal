
    
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
                    </ul>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>Application
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo site_url('admin/allApplications'); ?>" class="nav-link active">
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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h2 class="card-title">All Users</h2>
                            </div>
                            <?php if($this->session->flashdata('class')): ?>
                            <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                            <?php endif ; ?>
                            <div class="card-body">
                                <!-- <div>
                                    <div class=" w-100 mb-2"> -->
                                        <?php if($allApplications): ?>
                                            <table id="example" class="table table-bordered table-dark" style="width:100%;">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Name</th>
                                                        <th>Address</th>
                                                        <th>CV</th>
                                                        <th>Image</th>
                                                        <th>Status</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <?php 
                                                    $i = 0;
                                                    foreach ($allApplications as $application): 
                                                    $i++;
                                                ?>
                                                    <tr class="">
                                                        <td>
                                                            <?php echo $application->uId ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $application->name ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $application->pName ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $application->mName ?>
                                                        </td>
                                                        <td>
                                                            <img src="<?php echo base_url('assets/images/profile_pictures/'). $application->images ?>" alt="" class="img-thumbnail img-size-50 mx-auto d-block">
                                                        </td>
                                                        <td class="text-right py-0 align-middle">
                                                        <?php 
                                                            $status = $application->status;
                                                            if($status == '1') {
                                                                echo '<span class="badge bg-warning">Waiting</span>';
                                                            }elseif($status == '2') {
                                                                echo '<span class="badge bg-danger">Rejected</span>';
                                                            }elseif($status == '3') {
                                                                echo '<span class="badge bg-success">Accepted</span>';
                                                            }
                                                        ?>
                                                        </td>
                                                        <td class="text-right py-0 align-middle">
                                                            <div class="btn-group btn-group-sm">
                                                                <!-- <a href="<?php echo base_url('admin/userDetail/'. $user->uId); ?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> View</a>
                                                                <a href="<?php echo base_url('admin/userDetail/'. $user->uId); ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a> -->
                                                                <a href="" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> View</a>
                                                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                                            </div> 
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </table>         
                                            <?php else: ?>
                                                Application not available
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <!-- <p><?php echo $links;?></p>    -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- /.content-wrapper -->
    