<style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th, .table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }

        .table thead th {
            background-color: #f8f9fa;
        }

        .section-wrapper {
            padding: 20px;
        }

        .btn {
            margin-bottom: 5px;
        }
    </style>
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-primary" href="<?php echo base_url();?>add_venue" style="margin-left: 90%;">Add Venue</a><br>
                        <div class="card border-top-0">
                            <div class="tab-content">
                                 <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">All Venues Listing:</span>
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
                                <th scope="col">venue Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Details</th>
                                <th scope="col">Venue Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Map</th>
                                <th scope="col">Location</th>
                                <th scope="col">Amenity</th>
                                <th scope="col">Sport</th>
                                <th scope="col">Court</th>
                                <th scope="col">Status</th>    
                                <th scope="col">Action</th>  
                            </tr>
                        </thead>
                        <tbody>
                           <?php $i = 1;
                          foreach ($all_venues_name as $venu_name) { ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $venu_name['add_venue_name']; ?></td>
                                <td><?php echo $venu_name['address']; ?></td>
                                <td><?php echo $venu_name['details']; ?></td>
                                <td><?php echo $venu_name['add_venue_name']; ?></td>
                                <td>
                                    <img width="80" height="80" src="<?php echo base_url();?>/assets/uploads/<?php echo $venu_name['venue_photo']; ?>">
                                </td>
                                <td><?php echo $venu_name['map']; ?></td>
                                <td><?php echo $venu_name['location']; ?></td>
                                <td><?php echo $venu_name['select_amenity_name']; ?></td>
                                <td><?php echo $venu_name['select_sports_name']; ?></td>
                                <td><?php echo $venu_name['select_court_name']; ?></td>

                              <td>
                                <a href="#" class="btn btn-primary py-2 px-3 d-inline-flex align-items-center">
                                  Published
                                </a>
                              </td>

                              
                              <td>
                                <a class="btn btn-primary btn-lg py-2 px-5 d-inline-flex align-items-center justify-content-center"
                                   href="<?php echo ("all_venue/all_edit/?user_id=".$venu_name['user_id']) ?>">
                                  <i class="fa fa-edit me-1"></i> Edit
                                </a><br><br>

                                <a href="javascript:void(0)" class="btn btn-danger py-2 px-5 d-inline-flex align-items-center justify-content-center delete-court-data"
                                   data-id="<?php echo $venu_name['user_id']; ?>">
                                  <i class="fa fa-trash me-1"></i> Delete
                                </a><br><br>
                                <a href="javascript:void(0)" class="btn btn-danger py-2 px-5 d-inline-flex align-items-center justify-content-center delete-court-data"
                                   data-id="<?php echo $venu_name['user_id']; ?>">
                                  <i class="fa fa-close me-1"></i> Unpublished
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


