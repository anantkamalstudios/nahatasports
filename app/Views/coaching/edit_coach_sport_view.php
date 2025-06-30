<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 edit_coach_sport_form" id="edit_coach_sport_form" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">Sports Details :</span>
                                            <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                        </h5>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="sport_title" class="fw-semibold">Sport Title:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="sport_title" name="sport_title" placeholder="Sport Title" value="<?php echo $user_coach_sport->sport_title; ?>">
                                        </div>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="sport_bannar_image" class="fw-semibold">Sport Banner:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input id="sport_bannar_image" name="sport_bannar_image" type="file" accept="image/*" class="form-control" value="<?php echo $user_coach_sport->sport_bannar_image; ?>">
                                        </div>
                                        <div class="row mg-t-20">
                                            <label class="col-sm-4 form-control-label">&nbsp;</label>
                                             <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                                <img src="<?php echo base_url();?>assets/uploads/<?php echo $user_coach_sport->sport_bannar_image; ?>" style="border-radius:50%" alt="Sports Image missing" width="100" height="100" id="sport_bannar_image" name="sport_bannar_image">
                                            </div> 
                                        </div>
                                    </div>
                                    <div class="container my-5">
                                  <h5>About Sports</h5>

                                  <!-- Toolbar -->
                                  <div class="btn-toolbar mb-3" role="toolbar" aria-label="Editor toolbar">
                                    <!-- Text formatting -->
                                    <div class="btn-group me-2" role="group" aria-label="Text formatting">
                                      <button type="button" class="btn btn-outline-secondary" data-command="bold" title="Bold">
                                        <i class="bi bi-type-bold"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="italic" title="Italic">
                                        <i class="bi bi-type-italic"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="underline" title="Underline">
                                        <i class="bi bi-type-underline"></i>
                                      </button>
                                    </div>

                                    <!-- Lists -->
                                    <div class="btn-group me-2" role="group" aria-label="Lists">
                                      <button type="button" class="btn btn-outline-secondary" data-command="insertUnorderedList" title="Bullet list">
                                        <i class="bi bi-list-ul"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="insertOrderedList" title="Numbered list">
                                        <i class="bi bi-list-ol"></i>
                                      </button>
                                    </div>
                                    <!-- Undo/Redo -->
                                    <div class="btn-group" role="group" aria-label="Undo/Redo">
                                      <button type="button" class="btn btn-outline-secondary" data-command="undo" title="Undo">
                                        <i class="bi bi-arrow-counterclockwise"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="redo" title="Redo">
                                        <i class="bi bi-arrow-clockwise"></i>
                                      </button>
                                    </div>
                                  </div>

                                  <!-- Editable area -->
                                  <div class="container my-5">
                                    <textarea class="form-control" id="about_sport" name="about_sport" style="min-height: 200px;"><?php echo $user_coach_sport->about_sport; ?></textarea>
                                </div>
                                </div>
                                   

                                   <div class="container my-5">
                                  <h5>Benefits of Sports</h5>

                                  <!-- Toolbar -->
                                  <div class="btn-toolbar mb-3" role="toolbar" aria-label="Editor toolbar">
                                    <!-- Text formatting -->
                                    <div class="btn-group me-2" role="group" aria-label="Text formatting">
                                      <button type="button" class="btn btn-outline-secondary" data-command="bold" title="Bold">
                                        <i class="bi bi-type-bold"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="italic" title="Italic">
                                        <i class="bi bi-type-italic"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="underline" title="Underline">
                                        <i class="bi bi-type-underline"></i>
                                      </button>
                                    </div>

                                    <!-- Lists -->
                                    <div class="btn-group me-2" role="group" aria-label="Lists">
                                      <button type="button" class="btn btn-outline-secondary" data-command="insertUnorderedList" title="Bullet list">
                                        <i class="bi bi-list-ul"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="insertOrderedList" title="Numbered list">
                                        <i class="bi bi-list-ol"></i>
                                      </button>
                                    </div>
                                    <!-- Undo/Redo -->
                                    <div class="btn-group" role="group" aria-label="Undo/Redo">
                                      <button type="button" class="btn btn-outline-secondary" data-command="undo" title="Undo">
                                        <i class="bi bi-arrow-counterclockwise"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="redo" title="Redo">
                                        <i class="bi bi-arrow-clockwise"></i>
                                      </button>
                                    </div>
                                  </div>

                                  <!-- Editable area -->
                                  <div class="container my-5">
                                    <textarea class="form-control" id="benefits_sports" name="benefits_sports" style="min-height: 200px;"><?php echo $user_coach_sport->benefits_sports; ?></textarea>
                                </div>
                                </div>

                                <div class="container my-5">
                                  <h5>Future Prospects</h5>

                                  <!-- Toolbar -->
                                  <div class="btn-toolbar mb-3" role="toolbar" aria-label="Editor toolbar">
                                    <!-- Text formatting -->
                                    <div class="btn-group me-2" role="group" aria-label="Text formatting">
                                      <button type="button" class="btn btn-outline-secondary" data-command="bold" title="Bold">
                                        <i class="bi bi-type-bold"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="italic" title="Italic">
                                        <i class="bi bi-type-italic"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="underline" title="Underline">
                                        <i class="bi bi-type-underline"></i>
                                      </button>
                                    </div>

                                    <!-- Lists -->
                                    <div class="btn-group me-2" role="group" aria-label="Lists">
                                      <button type="button" class="btn btn-outline-secondary" data-command="insertUnorderedList" title="Bullet list">
                                        <i class="bi bi-list-ul"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="insertOrderedList" title="Numbered list">
                                        <i class="bi bi-list-ol"></i>
                                      </button>
                                    </div>
                                    <!-- Undo/Redo -->
                                    <div class="btn-group" role="group" aria-label="Undo/Redo">
                                      <button type="button" class="btn btn-outline-secondary" data-command="undo" title="Undo">
                                        <i class="bi bi-arrow-counterclockwise"></i>
                                      </button>
                                      <button type="button" class="btn btn-outline-secondary" data-command="redo" title="Redo">
                                        <i class="bi bi-arrow-clockwise"></i>
                                      </button>
                                    </div>
                                  </div>

                                  <!-- Editable area -->
                                  <div class="container my-5">
                                    <textarea class="form-control" id="future_prospects" name="future_prospects" style="min-height: 200px;"><?php echo $user_coach_sport->future_prospects; ?></textarea>
                                </div>
                                </div>
                                    <input type="hidden" name="data_edit" id="data_edit" value="<?php echo $user_coach_sport->user_id; ?>">
                                    <div class="mt-5 text-muted">
                                        <a class="btn btn-lg btn-primary w-100" name="edit_coach_sport_submit" id="edit_coach_sport_submit">Submit</a>
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/edit_coach_sport.js"></script>

