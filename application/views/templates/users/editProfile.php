<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url().'home'; ?>">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">

            <!-- Profile Image -->
            

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-8">
            <div class="card">
              <div class="card-body">
                <div class="tab-content">
                  
                    <?php if($this->session->flashdata('class')): ?>
                            <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dimissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
                                <?php echo $this->session->flashdata('message'); ?>
                            </div>
                    <?php endif ; ?>
                  <div class="card-title">
                  <!-- <?php echo form_open_multipart('home/updateProfile', '', '') ?> -->
                    <div class="form-horizontal">
                      <!-- <input type="hidden" name="xid" value="<?php echo $profiles[0]['uId']; ?>"> -->
                      <div class="form-group">
                      
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <div class="form-control font-weight-bold disable"><?php echo $profiles[0]['name']; ?></div>
                          <!-- <input type="email" class="form-control" id="inputName" placeholder="Name"> -->
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <div class="form-control font-weight-bold disable"><?php echo $profiles[0]['email']; ?></div>
                          <!-- <input type="email" class="form-control" id="inputEmail" placeholder="Email"> -->
                        </div>
                      </div>
                      <?php echo form_open_multipart('home/updateProfile', '', '') ?>
                      <input type="hidden" name="xid" value="<?php echo $profiles[0]['uId']; ?>">

                      <div class="form-group row">
                        <label for="inputAddress" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <?php echo form_input('address', $profiles[0]['address'], 'class= "form-control"'); ?>
                          <!-- <input type="text" class="form-control" id="inputAddress" placeholder="Address"> -->
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEducation" class="col-sm-2 col-form-label">Education</label>
                        <div class="col-sm-10">
                          <?php echo form_input('education', $profiles[0]['education'], 'class= "form-control"'); ?>
                          <!-- <input type="text" class="form-control" id="inputEducation" placeholder="Education"> -->
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                        <div class="col-sm-10">
                          <?php echo form_input('skills', $profiles[0]['skills'], 'class= "form-control"'); ?>
                          <!-- <input type="text" class="form-control" id="inputSkills" placeholder="Skills"> -->
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputImages" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <?php echo form_upload('image', '', 'class= "form-control-file"'); ?>
                          <!-- <input type="text" class="form-control" id="inputSkills" placeholder="Skills"> -->
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputCv" class="col-sm-2 col-form-label">CV</label>
                        <div class="col-sm-10">
                          <?php echo form_upload('cv', '', 'class= "form-control-file"'); ?>
                          <!-- <input type="text" class="form-control" id="inputSkills" placeholder="Skills"> -->
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#" class="text-primary">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class=" col-sm-12">
                                <?php echo form_submit('Edit Profile', 'Edit Profile', 'class="genric-btn primary-border large btn-block"') ?>
                          <!-- <button type="submit" class="btn btn-danger">Submit</button> -->
                        </div>
                        <?php echo form_close(); ?>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->