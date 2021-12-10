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
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th>Job Name</th>
                                <th>Company</th>
                                <th>location</th>
                                <th style="width: 40px">Salary</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                                foreach($data as $items): 
                            ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $items['pName'] ?></td>
                                <td><?php echo $items['mName'] ?></td>
                                <td><?php echo $items['location'] ?></td>
                                <td><span class="badge bg-info">Rp. <?= number_format($items['price'], 0,',','.'); ?></span></td>
                                <td>
                                <?php 
                                    $status = $items['status'];
                                    if($status == '1') {
                                        echo '<span class="badge bg-warning">Waiting</span>';
                                    }elseif($status == '2') {
                                        echo '<span class="badge bg-danger">Rejected</span>';
                                    }elseif($status == '3') {
                                        echo '<span class="badge bg-success">Accepted</span>';
                                    }
                                ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->
            </div>
        </div>
    </div>
</div>