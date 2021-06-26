<main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="<?= base_url('assets/images/pexels-oleg-magni-2058130.jpg') ?>">
            <div class="container">
            <span style="position:absolute;bottom:0;right:0;color:black;">Photo by <a href="https://www.pexels.com/@oleg-magni?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels" target="_blank"><b style="color:#edeae8 !important">Oleg Magni</b></a> from <a href="https://www.pexels.com/photo/photo-of-two-people-shakehands-2058130/?utm_content=attributionCopyText&utm_medium=referral&utm_source=pexels" target="_blank"><b style="color:#edeae8 !important">Pexels</b></a></span>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Job Details </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-5 ml-lg-5">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="<?php echo base_url('assets/images/models/'. $jobs[0]['mDp']); ?>" alt="" style="width:25%;height:100%;"></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?= $jobs[0]['pName']; ?></h4>
                                    </a>
                                    <ul>
                                        <li><?= $jobs[0]['mName'] ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?= $jobs[0]['location'] ?></li>
                                        <li>Rp <?= number_format($jobs[0]['price'], 0,',','.'); ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p><?= $jobs[0]['mDescription']; ?></p>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span><?= $jobs[0]['mDate']; ?></span></li>
                              <li>Location : <span><?= $jobs[0]['location']; ?></span></li>
                              <!-- <li>Vacancy : <span><?= $jobs[0]['date']; ?></span></li>
                              <li>Job nature : <span><?= $jobs[0]['date']; ?></span></li> -->
                              <li>Salary :  <span>Rp <?= number_format($jobs[0]['price'], 0,',','.'); ?></span></li>
                              <li>Application date : <span><?= $jobs[0]['mDate']; ?></span></li>
                          </ul>
                         <div align=center class="apply-btn2">
                            <a href="<?php echo base_url('Joblist/add_to_cart/').$jobs[0]['mId'] ?>" class="genric-btn info-border circle arrow">Apply Job</a>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span>Colorlib</span>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <ul>
                                <li>Name: <span>Colorlib </span></li>
                                <li>Web : <span> colorlib.com</span></li>
                                <li>Email: <span>carrier.colorlib@gmail.com</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

    </main>