<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 add_post_form" id="add_post_form" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">Add Category :</span>
                                            <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                        </h5>
                                    </div>
                                   <!-- Sports Image Upload -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="post_image" class="fw-semibold">Add Post Image:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input id="post_image" name="post_image" type="file" accept="image/*" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Sports Title Input -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="date" class="fw-semibold">Select Date:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="date" class="form-control" id="date" name="date">
                                                
                                            </div>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="published_by" class="fw-semibold">Published By:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="published_by" name="published_by" placeholder="name">
                                                
                                            </div>
                                    </div>
                                     <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                    <label for="content" class="fw-semibold">Content:</label>
                                </div>
                                <div class="col-lg-8">
                                    <textarea class="form-control" id="content" name="content" rows="4" cols="50" placeholder="Enter Content"></textarea>
                                </div>
                            </div>
                             <div id="user_error" class="text-danger" role="alert" style="display:none;"></div>
                                    <div class="mt-5 text-muted">
                                        <a class="btn btn-lg btn-primary w-100" name="add_post_save" id="add_post_save">Submit</a>
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
    </div> 
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>var baseUrl = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/script/add_post.js"></script>

