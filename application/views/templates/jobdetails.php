<style>
    #success_tic .page-body{
    max-width:300px;
    background-color:#FFFFFF;
    margin:10% auto;
    }
    #success_tic .page-body .head{
    text-align:center;
    }
    /* #success_tic .tic{
    font-size:186px;
    } */
    #success_tic .close{
        opacity: 1;
        position: absolute;
        right: 0px;
        font-size: 30px;
        padding: 3px 15px;
    margin-bottom: 10px;
    }
    #success_tic .checkmark-circle {
    width: 150px;
    height: 150px;
    position: relative;
    display: inline-block;
    vertical-align: top;
    }
    .checkmark-circle .background {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background: #1ab394;
    position: absolute;
    }
    #success_tic .checkmark-circle .checkmark {
    border-radius: 5px;
    }
    #success_tic .checkmark-circle .checkmark.draw:after {
    -webkit-animation-delay: 300ms;
    -moz-animation-delay: 300ms;
    animation-delay: 300ms;
    -webkit-animation-duration: 1s;
    -moz-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-timing-function: ease;
    -moz-animation-timing-function: ease;
    animation-timing-function: ease;
    -webkit-animation-name: checkmark;
    -moz-animation-name: checkmark;
    animation-name: checkmark;
    -webkit-transform: scaleX(-1) rotate(135deg);
    -moz-transform: scaleX(-1) rotate(135deg);
    -ms-transform: scaleX(-1) rotate(135deg);
    -o-transform: scaleX(-1) rotate(135deg);
    transform: scaleX(-1) rotate(135deg);
    -webkit-animation-fill-mode: forwards;
    -moz-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
    }
    #success_tic .checkmark-circle .checkmark:after {
    opacity: 1;
    height: 75px;
    width: 37.5px;
    -webkit-transform-origin: left top;
    -moz-transform-origin: left top;
    -ms-transform-origin: left top;
    -o-transform-origin: left top;
    transform-origin: left top;
    border-right: 15px solid #fff;
    border-top: 15px solid #fff;
    border-radius: 2.5px !important;
    content: '';
    left: 35px;
    top: 80px;
    position: absolute;
    }

    @-webkit-keyframes checkmark {
    0% {
        height: 0;
        width: 0;
        opacity: 1;
    }
    20% {
        height: 0;
        width: 37.5px;
        opacity: 1;
    }
    40% {
        height: 75px;
        width: 37.5px;
        opacity: 1;
    }
    100% {
        height: 75px;
        width: 37.5px;
        opacity: 1;
    }
    }
    @-moz-keyframes checkmark {
    0% {
        height: 0;
        width: 0;
        opacity: 1;
    }
    20% {
        height: 0;
        width: 37.5px;
        opacity: 1;
    }
    40% {
        height: 75px;
        width: 37.5px;
        opacity: 1;
    }
    100% {
        height: 75px;
        width: 37.5px;
        opacity: 1;
    }
    }
    @keyframes checkmark {
    0% {
        height: 0;
        width: 0;
        opacity: 1;
    }
    20% {
        height: 0;
        width: 37.5px;
        opacity: 1;
    }
    40% {
        height: 75px;
        width: 37.5px;
        opacity: 1;
    }
    100% {
        height: 75px;
        width: 37.5px;
        opacity: 1;
    }
    }

</style>
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
                                <!-- <a href="<?php echo base_url('Joblist/add_to_cart/').$jobs[0]['mId'] ?>" class="genric-btn info-border circle arrow">Apply Job</a> -->
                                <form action="<?php echo base_url('joblist/apply/').$jobs[0]['mId'] ?>" method="post">
                                    <input type="hidden" name="mId" value="<?php echo $jobs[0]['mId'] ?>">
                                    <input type="hidden" name="productId" value="<?php echo $jobs[0]['productId'] ?>">
                                    <input type="hidden" name="status" value="1">
                                    <?php if(!empty($data)) { ?>
                                        <?php if($this->session->userdata('uId') == $data[0]['userId'] && $jobs[0]['mId'] == $data[0]['modelId'] && $data[0]['status'] == "") { ?> 
                                            <button type="submit" class="genric-btn info-border circle arrow" data-toggle="modsal" data-target="#succes2s_tic">Apply Job</button>
                                        <?php } elseif($this->session->userdata('uId') == $data[0]['userId'] && $jobs[0]['mId'] == $data[0]['modelId'] && $data[0]['status'] == "1") { ?>
                                            <button type="submit" class="genric-btn info-border circle arrow disable" style="cursor: not-allowed;pointer-events: none;">WAITING FOR RESPONE</button>
                                        <?php } elseif($this->session->userdata('uId') == $data[0]['userId'] && $jobs[0]['mId'] == $data[0]['modelId'] && $data[0]['status'] == "2") { ?>
                                            <button type="submit" class="genric-btn danger-border circle arrow disable" style="cursor: not-allowed;pointer-events: none;">REJECTED</button>
                                        <?php } elseif($this->session->userdata('uId') == $data[0]['userId'] && $jobs[0]['mId'] == $data[0]['modelId'] && $data[0]['status'] == "3") { ?>
                                            <button type="submit" class="genric-btn success-border circle arrow disable" style="cursor: not-allowed;pointer-events: none;">ACCEPTED</button> 
                                        <?php } else { ?>
                                            <button type="submit" class="genric-btn info-border circle arrow" data-toggle="modsal" data-target="#succes2s_tic">Apply Job</button>
                                        <?php } } else { ?> 
                                        <button type="submit" class="genric-btn info-border circle arrow" data-toggle="modsal" data-target="#succes2s_tic">Apply Job</button>
                                    <?php } ?>
                                        <!-- <a href="<?php echo base_url('joblist/apply/').$jobs[0]['mId'] ?>" class="genric-btn info-border circle arrow">Apply Job</a> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

    </main>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <a class="close" href="#" data-dismiss="modal">&times;</a>
            <div class="page-body">
                <div class="head">  
                    <h3 style="margin-top:5px;">SUCCESS</h3>
                </div>
                <h1 style="text-align:center;">
                    <div class="checkmark-circle">
                        <div class="background"></div>
                        <div class="checkmark draw"></div>
                    </div>
                <h1>
            </div>
        </div>
    </div>
</div>