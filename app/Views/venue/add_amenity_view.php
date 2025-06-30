<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 add_amenity_form" id="add_amenity_form" action="javascript:void(0)" method="post">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">Add Amenity :</span>
                                            <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                        </h5>
                                    </div>
                                    <!-- Sports Title Input -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="amenity_name" class="fw-semibold">Amenity Title:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="amenity_name" name="amenity_name" placeholder="Amenity Title">
                                        </div>
                                    </div>
                                    <div class="mt-5 text-muted">
                                        <a class="btn btn-lg btn-primary w-100" name="amenity_save" id="amenity_save">Submit</a>
                                    </div>
                                    <div id="user_error" class="text-danger" role="alert" style="display:none;"></div>
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/add_amenity.js"></script>

