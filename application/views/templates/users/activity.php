<div class="content">
    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-md-8 offset-2 pt-5">
                <div class="card">
                <div class="card-header bg-primary">
                    <h3 class="card-title text-center mb-0">Activities</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body pb-2">
                    <?php if($this->cart->total_items() > 0): ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Job Name</th>
                                    <th>Company</th>
                                    <th>location</th>
                                    <th style="width: 40px">Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i = 1;
                                    foreach($this->cart->contents() as $items): 
                                ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $items['pName'] ?></td>
                                    <td><?php echo $items['name'] ?></td>
                                    <td><?php echo $items['location'] ?></td>
                                    <td><span class="badge bg-info">Rp. <?= number_format($items['price'], 0,',','.'); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                                <!-- <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                <tr>
                                <td>4.</td>
                                <td>Fix and squish bugs</td>
                                <td>
                                    <div class="progress progress-xs progress-striped active">
                                    <div class="progress-bar bg-success" style="width: 90%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success">90%</span></td>
                                </tr> -->
                            </tbody>
                        </table>
                        <hr>
                        <div align="right">
                            <a href="<?php echo base_url('joblist/delete/').$items['rowid']; ?>" class="genric-btn danger-border circle">Delete</a></tr>
                        </div>
                        <?php else:?>
                            <h4 class="text-center">No Result</h4>
                    <?php endif;?>
                </div>
                <!-- /.card-body -->
                <!-- <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div> -->
            </div>
            <!-- /.card -->
            </div>
        </div>
    </div>
</div>