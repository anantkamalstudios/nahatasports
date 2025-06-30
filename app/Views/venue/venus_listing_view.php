<main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-top-0">
                            <div class="tab-content">
                                 <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">venues Booking Listing:</span>
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
                                <th scope="col">Booking Date</th>
                                <th scope="col">Court Name</th>    
                                <th scope="col">Time Slot</th>
                                <th scope="col">Price</th> 
                            </tr>
                        </thead>
                        <tbody>
                             <?php $i = 1;
                                foreach ($venus_book_list as $venus_book_list) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $venus_book_list['booking_date']; ?></td>
                                        <td><?php echo $venus_book_list['court_name']; ?></td>
                                        <td><?php echo $venus_book_list['time_slot']; ?></td>
                                        <td><?php echo $venus_book_list['price']; ?></td>
                                        
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/bannar_delete.js"></script>


