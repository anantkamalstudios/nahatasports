<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 edit_bannar_form" id="edit_bannar_form" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">Sports Details :</span>
                                            <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                        </h5>
                                    </div>
                                   <!-- Sports Image Upload -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="sports_bannar_image" class="fw-semibold">Sports Bannar:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input id="sports_bannar_image" name="sports_bannar_image" type="file" accept="image/*" class="form-control" value="<?php echo $user_bannar->sports_bannar_image; ?>">
                                        </div>
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">&nbsp;</label>
                                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <img src="<?php echo base_url();?>assets/uploads/<?php echo $user_bannar->sports_bannar_image; ?>" style="border-radius:50%" alt="Sports Image missing" width="100" height="100" id="sports_bannar_image" name="sports_bannar_image">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sports Title Input -->
                                   <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="sport_name" class="fw-semibold">Select Sports:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <!-- <select class="form-control" id="sport_name" name="sport_name">
                                                <option value="">-- Select Venue --</option>
                                                <option value="Skating Coaching - Starting from Age 3">Skating Coaching - Starting from Age 3</option>
                                                <option value="Karate and Martial Arts - Professional Training">Karate and Martial Arts - Professional Training</option>
                                                <option value="Professional Dance Academy & Dance Studio">Professional Dance Academy & Dance Studio</option>
                                                <option value="Professional Basketball Coaching - Best in Pune">Professional Basketball Coaching - Best in Pune</option>
                                                <option value="Professional Badminton Coaching">Professional Badminton Coaching</option>
                                                <option value="Cricket">Cricket</option>
                                            </select> -->
                                            <input class="form-control" id="sport_name" name="sport_name" placeholder="Sport Name" value="<?php echo $user_bannar->sport_name; ?>">
                                        </div>
                                    </div>
                                    <input type="hidden" name="sport_bannar_data_edit" id="sport_bannar_data_edit" value="<?php echo $user_bannar->user_id; ?>">
                                    <div class="mt-5 text-muted">
                                        <a class="btn btn-lg btn-primary w-100" name="edit_bannar_button" id="edit_bannar_button">Submit</a>
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/coach_edit_sports.js"></script>

