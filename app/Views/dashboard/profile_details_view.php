
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body lead-status">
                                <div class="mb-5 d-flex align-items-center justify-content-between">
                                    <h5 class="fw-bold mb-0 me-4">
                                        <span class="d-block mb-2">Profile Details :</span>
                                        
                                    </h5>
                                </div>
                            </div>
                            <form class="w-100 mt-4 pt-2 profile_details_form" id="profile_details_form" action="javascript:void(0)" method="post">
                            <hr class="mt-0">
                            <div class="card-body general-info">
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="full_name" class="fw-semibold">Full Name: </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="feather-user"></i></div>
                                            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Name" value="<?php echo $user_data->full_name; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="email" class="fw-semibold">Email: </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="feather-mail"></i></div>
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user_data->email; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="username" class="fw-semibold">Username: </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="feather-link-2"></i></div>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $user_data->username; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4 align-items-center">
                                    <div class="col-lg-4">
                                        <label for="phone" class="fw-semibold">Phone: </label>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="feather-phone"></i></div>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $user_data->phone; ?>">
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="profile_details_edit" id="profile_details_edit" value="<?php echo $user_data->user_id; ?>">
                                <div id="user_error" class="text-danger" role="alert" style="display:none;"></div>
                                <div class="mt-5 text-muted">
                                    <a class="btn btn-lg btn-primary w-100" name="update_details_save" id="update_details_save" href="<?php echo base_url('dashboard');?>">Update Details</a>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>var baseUrl = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/script/update_details.js"></script>
    