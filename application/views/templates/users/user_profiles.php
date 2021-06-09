<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="float-sm-center">
            <?php if($this->session->flashdata('class')): ?>
                            <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                    <?php endif ; ?>
            </div>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url().'home'; ?>">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6 center" style="display : block; margin-left : auto; margin-right : auto; width : 50%">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle rounded-circle"
                       src="<?= base_url('assets/images/profile_pictures/'. $profiles[0]['images']); ?>"
                       alt="User profile picture" style="width:50%;height:50%;">
                </div>
                
                <h3 class="profile-username text-center"><?php echo $profiles[0]['name']; ?></h3>

                <p class="text-muted text-center"><?php echo $profiles[0]['email']; ?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <strong><i class="fas fa-book mr-1"></i> Education</strong>
                    <p class="text-muted">
                      <?php echo $profiles[0]['education']; ?>
                    </p>
                  </li>
                  <li class="list-group-item">
                    <strong><i class="fas fa-map-marker-alt mr-1"></i> Address</strong>

                    <p class="text-muted"><?php echo $profiles[0]['address']; ?></p>
                  </li>
                  <li class="list-group-item">
                    <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                    <p class="text-muted">
                      <?php echo $profiles[0]['skills']; ?>
                    </p>
                  </li>
                </ul>
                <?php foreach ($profiles as $profile ): ?>
                <a href="<?php echo site_url('home/editProfile/'.$profile['uId']); ?>" class="genric-btn primary-border btn-block">Edit</a>
                <?php endforeach; ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->