<style>
    .time-slot-input {
      width: 100%;
      padding: 2px;
      border: 1px solid #ced4da;
      border-radius: 4px;
    }
    .table th, .table td {
      text-align: center;
      vertical-align: middle;
    }
  </style>
<main class="nxl-container">
    <div class="nxl-content">
        <div class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-top-0">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                <div class="card-body personal-info">
                                    <form class="w-100 mt-4 pt-2 add_court_form" id="add_court_form" action="javascript:void(0)" method="post" enctype="multipart/form-data">
                                    <div class="mb-4 d-flex align-items-center justify-content-between">
                                        <h5 class="fw-bold mb-0 me-4">
                                            <span class="d-block mb-2">Court Details</span>
                                            <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                        </h5>
                                    </div>
                                   <!-- Sports Image Upload -->
                                    <div class="row mb-4 align-items-center">
                                        <div class="col-lg-4">
                                            <label for="court_name" class="fw-semibold">Court Title:</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="court_name" name="court_name" placeholder="Court Title">
                                        </div>
                                    </div>

                                     <div class="container">
                                        <h5 class="mb-4">Court Time Slot</h5>
                                        <div class="table-responsive">
                                          <table class="table table-bordered time-slot-table">
                                            <thead class="table-light">
                                              <tr>
                                                <th>Time Slot</th>
                                                <th>Monday</th>
                                                <th>Tuesday</th>
                                                <th>Wednesday</th>
                                                <th>Thursday</th>
                                                <th>Friday</th>
                                                <th>Saturday</th>
                                                <th>Sunday</th>
                                              </tr>
                                            </thead>
                                            <tbody id="timeSlotTableBody">
                                                </tbody>
                                          </table>
                                        </div>

                                    <!-- Sports Title Input -->
                                    

                                    <div class="mt-5 text-muted">
                                        <a class="btn btn-lg btn-primary w-100" name="add_court_save" id="add_court_save">Submit</a>
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
<script>
  const tableBody = document.getElementById('timeSlotTableBody');

  for (let hour = 6; hour <= 23; hour++) {
    const row = document.createElement('tr');

    // Time slot cell
    const timeCell = document.createElement('td');
    timeCell.textContent = `${hour}:00`;
    row.appendChild(timeCell);

    // Create input cells for each day
    for (let i = 0; i < 7; i++) {
      const inputCell = document.createElement('td');
      const input = document.createElement('input');
      input.type = 'text';
      input.className = 'time-slot-input';
      inputCell.appendChild(input);
      row.appendChild(inputCell);
    }

    tableBody.appendChild(row);
  }
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>var baseUrl = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/script/add_court.js"></script>

