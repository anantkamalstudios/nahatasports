<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 venue_form" id="venue_form" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">Venue Details :</span>
                                            <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                        </h5>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="add_venue_name" class="fw-semibold">Venue Name:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="add_venue_name" name="add_venue_name" placeholder="Venue Name">
                                        </div>
                                    </div>
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="address" class="fw-semibold">Address:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                                        </div>
                                    </div>
                                    <div class="container my-5">
                                  <h5>Details/Rules and instructions</h5>

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
                                    <textarea class="form-control" id="details" name="details" style="min-height: 200px;">Start typing here...</textarea>
                                </div>
                                </div>
                                   <!-- Sports Image Upload -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="venue_photo" class="fw-semibold">Upoload Image:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input id="venue_photo" name="venue_photo" type="file" accept="image/*" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="map" class="fw-semibold">Map:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="map" name="map" placeholder="Map">
                                        </div>
                                    </div>

                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="location" class="fw-semibold">Location:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                                        </div>
                                    </div>

                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="select_amenity_name" class="fw-semibold">Select Amenities:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control" id="select_amenity_name" name="select_amenity_name">
                                                <option value="">-- Select Amenities --</option>
                                                <?php foreach ($select_venue_name as $option) { ?>
                                                <option value="<?php echo $option['amenity_name']; ?>"><?php echo $option['amenity_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="select_sports_name" class="fw-semibold">Select Sports:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control" id="select_sports_name" name="select_sports_name">
                                                <option value="">-- Select Sports --</option>
                                                <?php foreach ($select_sport_name as $venue_sport) { ?>
                                                <option value="<?php echo $venue_sport['sports_title']; ?>"><?php echo $venue_sport['sports_title']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="select_court_name" class="fw-semibold">Select Court:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select class="form-control" id="select_court_name" name="select_court_name">
                                                <option value="">-- Select Court --</option>
                                                <?php foreach ($select_court_name as $venue_court) { ?>
                                                <option value="<?php echo $venue_court['court_name']; ?>"><?php echo $venue_court['court_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="mt-5 text-muted">
                                        <a class="btn btn-lg btn-primary w-100" name="add_venue_submit" id="add_venue_submit">Submit</a>
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/add_venue.js"></script>

