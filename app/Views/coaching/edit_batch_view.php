<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 edit_batch_form" id="edit_batch_form" method="post">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Batch Details :</span>
                                            </h5>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="batch_name" class="fw-semibold">Batch Name:</label>
                                                <input type="text" class="form-control" id="batch_name" name="batch_name" placeholder="Batch Name" value="<?php echo $batch_user->batch_name; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="coaching" class="fw-semibold">Select Coaching:</label>
                                                
                                            <input class="form-control" id="coaching" name="coaching" value="<?php echo $batch_user->coaching; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="age_group" class="fw-semibold">Age Group:</label>
                                                <input type="text" class="form-control" id="age_group" name="age_group" placeholder="Age Group" value="<?php echo $batch_user->age_group; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="difficulty_level" class="fw-semibold">Difficulty Level:</label>
                                                
                                            <input class="form-control" id="difficulty_level" name="difficulty_level" value="<?php echo $batch_user->difficulty_level; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="batch_type" class="fw-semibold">Batch Type:</label>
                                                
                                            <input class="form-control" id="batch_type" name="batch_type" value="<?php echo $batch_user->batch_type; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="venues" class="fw-semibold">Venues:</label>
                                            <input class="form-control" id="select_venues" name="select_venues" value="<?php echo $batch_user->select_venues; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="fees" class="fw-semibold">Fees:</label>
                                                <input type="text" class="form-control" id="fees" name="fees" placeholder="Fees" value="<?php echo $batch_user->fees; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="start_date" class="fw-semibold">Start Date:</label>
                                                <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date" value="<?php echo $batch_user->start_date; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="end_date" class="fw-semibold">End Date:</label>
                                                <input type="date" class="form-control" id="end_date" name="end_date" placeholder="End Date" value="<?php echo $batch_user->end_date; ?>">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="start_time" class="fw-semibold">Start Time:</label>
                                                <input type="time" class="form-control" id="start_time" name="start_time" placeholder="Start Time" value="<?php echo $batch_user->start_time; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="end_time" class="fw-semibold">End Time:</label>
                                                <input type="time" class="form-control" id="end_time" name="end_time" placeholder="End Time" value="<?php echo $batch_user->end_time; ?>">
                                            </div>
                                        </div>
                                        <input type="hidden" name="batch_data_edit" id="batch_data_edit" value="<?php echo $batch_user->user_id; ?>">
                                        <div id="user_error" class="text-danger mt-3" role="alert" style="display:none;"></div>
                                        <div class="mt-5 text-muted">
                                            <a class="btn btn-lg btn-primary w-100" name="edit_batch_save" id="edit_batch_save">Submit</a>
                                            
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/edit_batch.js"></script>
