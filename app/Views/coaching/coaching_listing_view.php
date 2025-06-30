
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-top-0">
                            <div class="tab-content">
                                 <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <a class="btn btn-primary" href="<?php echo base_url();?>add_coach_data" style="margin-left: 90%;">Add Coaching</a>
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Coaching Listing:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                            </h5>
                                        </div>
    <form id="bannar_delete" class="bannar_delete" method="post">              
        <div class="section-wrapper">
                <div class="table-responsive">
                   <table class="table mg-b-0">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Coaching Name</th>
                                <th scope="col">Status</th>    
                                <th scope="col">Action</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                                foreach ($coaching_list as $coaching_list) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $coaching_list['coaching_name']; ?></td>
                                        
                                        <td>
                                            <button class="btn btn-success btn-lg" id="delete-bannar"><i class="fa fa-check me-1"></i>Valid</button>

                                        </td>
                                        <td>
                                            <div style="display: flex; gap: 30px;">
                                                <a class="" href="<?php echo ("coach/coach_edit/?user_id=".$coaching_list['user_id']) ?>"><i class="fa fa-edit me-1" style="color:blue;"></i></a>
                                                <button class="btn btn-danger btn-lg" id="expaire"><i class="fa fa-close me-1"></i>Expire</button>
                                            </div>
                                        </td>
                                    </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                </div>
            </div>
</form>

                                    </div>
                                    
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </main>

