<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 add_batch_form" id="add_batch_form" method="post">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Batch Details :</span>
                                            </h5>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="batch_name" class="fw-semibold">Batch Name:</label>
                                                <input type="text" class="form-control" id="batch_name" name="batch_name" placeholder="Batch Name">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="coaching" class="fw-semibold">Select Coaching:</label>
                                                <select class="form-control" id="coaching" name="coaching">
                                                <option value="">-- Select Coaching --</option>
                                                <option value=" Cricket Coaching "> Cricket Coaching </option>
                                                <option value="Karate Coaching ">Karate Coaching</option>
                                                <option value="Skating Coaching">Skating Coaching</option>
                                                <option value=" Kids Fitness - For Small Kids from 2.5 Years to 5 Years "> Kids Fitness - For Small Kids from 2.5 Years to 5 Years </option>
                                                <option value=" Basketball Coaching "> Basketball Coaching </option>
                                                <option value="Badminton Coaching">Badminton Coaching</option>
                                                <option value=" Trial Batch Cricket for Kids "> Trial Batch Cricket for Kids </option>
                                                <option value=" Regular Swimming Batches For Toddlers And Kids "> Regular Swimming Batches For Toddlers And Kids </option>
                                                <option value="Badminton Trials For Kids">Badminton Trials For Kids</option>
                                                <option value="Regular Badminton Batch For Kids"> Regular Badminton Batch For Kids </option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="age_group" class="fw-semibold">Age Group:</label>
                                                <input type="text" class="form-control" id="age_group" name="age_group" placeholder="Age Group">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="difficulty_level" class="fw-semibold">Difficulty Level:</label>
                                                <select class="form-control" id="difficulty_level" name="difficulty_level">
                                                <option value="">-- Select Difficulty Level --</option>
                                                <option value="Biginner">Biginner</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Expert">Expert</option>
                                                
                                            </select>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="batch_type" class="fw-semibold">Batch Type:</label>
                                                <select class="form-control" id="batch_type" name="batch_type">
                                                <option value="">-- Select Batch Type --</option>
                                                <option value="Single">Single</option>
                                                <option value="Group">Group</option>
                                            </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="venues" class="fw-semibold">Venues:</label>
                                                <select class="form-control" id="select_venues" name="select_venues">
                                                <option value="">-- Select Venues --</option>
                                                <option value=" Nahata Sports Complex- Sinhgad Rd "> Nahata Sports Complex- Sinhgad Rd </option>
                                                <option value=" Nahata Sports Complex- Gangadham Chowk  "> Nahata Sports Complex- Gangadham Chowk  </option>
                                            </select>
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="fees" class="fw-semibold">Fees:</label>
                                                <input type="text" class="form-control" id="fees" name="fees" placeholder="Fees">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="start_date" class="fw-semibold">Start Date:</label>
                                                <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Start Date">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="end_date" class="fw-semibold">End Date:</label>
                                                <input type="date" class="form-control" id="end_date" name="end_date" placeholder="End Date">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="start_time" class="fw-semibold">Start Time:</label>
                                                <input type="time" class="form-control" id="start_time" name="start_time" placeholder="Start Time">
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col-md-6">
                                                <label for="end_time" class="fw-semibold">End Time:</label>
                                                <input type="time" class="form-control" id="end_time" name="end_time" placeholder="End Time">
                                            </div>
                                        </div>

                                        <div id="user_error" class="text-danger mt-3" role="alert" style="display:none;"></div>
                                        <div class="mt-5 text-muted">
                                            <a class="btn btn-lg btn-primary w-100" name="batch_save" id="batch_save">Submit</a>
                                            
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/add_batch.js"></script>
