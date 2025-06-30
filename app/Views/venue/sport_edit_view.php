<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 edit_sports_form" id="edit_sports_form" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">Add Sports :</span>
                                            <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                        </h5>
                                    </div>
                                   <!-- Sports Image Upload -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="sports_image" class="fw-semibold">Sports Image:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input id="sports_image" name="sports_image" type="file" accept="image/*" class="form-control" value="<?php echo $user_sport->sports_image; ?>">
                                        </div>
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">&nbsp;</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <img src="<?php echo base_url();?>assets/uploads/<?php echo $user_sport->sports_image; ?>" style="border-radius:50%" alt="Sports Image missing" width="100" height="100" id="sports_image" name="sports_image">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sports Title Input -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="sports_title" class="fw-semibold">Sports Title:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="sports_title" name="sports_title" placeholder="Sports Title" value="<?php echo $user_sport->sports_title; ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="sport_data_edit" id="sport_data_edit" value="<?php echo $user_sport->user_id; ?>">
                                    <div class="mt-5 text-muted">
                                        <a class="btn btn-lg btn-primary w-100" name="edit_sports_save" id="edit_sports_save">Submit</a>
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/edit_sports.js"></script>

