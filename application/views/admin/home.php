

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
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
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-cuttlefish"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url('admin/allCategories') ?>" class="users-list-name"><span class="info-box-text">Categories</span></a>
                <span class="info-box-number">
                  <?= $total_categories; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-city"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url('admin/allModels') ?>" class="users-list-name"><span class="info-box-text">Vacancies</span></a>
                <span class="info-box-number"><?= $total_vacancies; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url('admin/allProducts') ?>" class="users-list-name"><span class="info-box-text">Job</span></a>
                <span class="info-box-number"><?php echo $total_products;  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <a href="<?php echo base_url('admin/allUsers'); ?>" class="users-list-name">
                <span class="info-box-text">Users</span>
                </a>
                <span class="info-box-number"><?php echo $total_customers; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            
            <!-- /.card -->
            <div class="row">
              <div class="col-md-6">
                <!-- PRODUCT LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Recently Added Jobs</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-0 pr-0 clearfix">
                    <?php foreach ($jobRecent as $recent): ?>
                      <li class="item">
                        <div class="product-img">
                          <img src="<?= site_url('assets/images/models/'. $recent->mDp); ?>" alt="Product Image" class="img-size-50 img-thumbnail">
                        </div>
                        <div class="product-info">
                          <a href="<?php echo site_url('admin/editModel/'. $recent->mId) ?>" class="product-title"> <?= $recent->pName ?>
                            <span class="badge badge-warning float-right">Rp <?= number_format($recent->price, 0,',','.') ?></span></a>
                          <span class="product-description">
                            <?= $recent->mName ?>
                          </span>
                        </div>
                      </li>
                      <!-- /.item -->
                    <?php endforeach; ?>  
                    </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="<?php echo base_url('admin/allModels') ?>" class="uppercase">View All Jobs</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <!-- PRODUCT LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">New Members</h3>

                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-0 pr-0 clearfix">
                    <?php foreach ($allUsers as $user): ?>
                      <li class="item">
                        <div class="product-img">
                          <img src="<?php echo base_url('assets/images/profile_pictures/'. $user->images); ?>" alt="Product Image" class="img-size-50 img-thumbnail">
                        </div>
                        <div class="product-info">
                          <a href="<?php echo base_url('admin/userDetail/'.$user->uId); ?>" class="product-title"> <?php echo $user->name ?>
                            <span class="badge badge-warning float-right"><?php echo $user->date ?></span></a>
                          <span class="product-description">
                            <?= $recent->mName ?>
                          </span>
                        </div>
                      </li>
                      <!-- /.item -->
                    <?php endforeach; ?>  
                    </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="<?php echo base_url('admin/allUsers') ?>" class="uppercase">View All Members</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </div>
            <!-- /.row -->
            </div>
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Applied</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Company</th>
                      <th>Location</th>
                      <th>Salary</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($dataApply as $items) { ?>
                        <tr>
                          <td><a href="#"><?= $items['id'] ?></a></td>
                          <td><?= $items['pName'] ?></td>
                          <td><?= $items['mName'] ?></td>
                          <td><?= $items['location'] ?></td>
                          <td><span class="badge badge-success">Rp. <?= number_format($items['price'], 0,',','.'); ?></span></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="<?php echo base_url('Admin/allApplications') ?> " class="btn btn-sm btn-primary float-right">View All</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->