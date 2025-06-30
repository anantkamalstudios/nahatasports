
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-primary" href="<?php echo base_url();?>add_court" style="margin-left: 90%;">Add Court</a><br>
                        <div class="card border-top-0">
                            <div class="tab-content">
                                 <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">All Court Listing:</span>
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
                                <th scope="col">Court Name</th>
                                <th scope="col">View/Update TImeSlot</th>    
                                <th scope="col">Action</th>  
                            </tr>
                        </thead>
                        <tbody>
                          <?php $i = 1;
                          foreach ($court_list as $court) { ?>
                            <tr>
                              <td><?php echo $i++; ?></td>
                              <td><?php echo htmlspecialchars($court['court_name']); ?></td>

                              <!-- View TimeSlot Button -->
                              <td>
                                <a href="#" class="btn btn-primary py-2 px-3 d-inline-flex align-items-center">
                                  <i class="fa fa-edit me-1"></i> View Time Slot
                                </a>
                              </td>

                              <!-- Delete Button -->
                              <td>
                                <a href="javascript:void(0)" class="btn btn-danger py-2 px-5 d-inline-flex align-items-center justify-content-center delete-court-data"
                                   data-id="<?php echo $court['user_id']; ?>">
                                  <i class="fa fa-trash me-1"></i> Delete
                                </a>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>var baseUrl = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/script/court_delete.js"></script>


