 <style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th, .table td {
            border: 1px solid #dee2e6;
            padding: 10px;
            text-align: center;
        }

        .table thead th {
            background-color: #f8f9fa;
        }

        .section-wrapper {
            padding: 20px;
        }

        .btn {
            margin-bottom: 5px;
        }
    </style>
</head>
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-primary" href="<?php echo base_url();?>add_batch" style="margin-left: 90%;">Add Batch</a><br>
                        <div class="card border-top-0">
                            <div class="tab-content">
                                 <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">All Batches:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                            </h5>
                                        </div>
    <form id="bannar_delete" class="bannar_delete" method="post">              
        
<body>

<div class="section-wrapper">
    <div class="table-responsive">
        <table class="table mg-b-0">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Batch Name</th>
                    <th scope="col">Age Group</th>
                    <th scope="col">Difficulty Level</th>
                    <th scope="col">Batch Type</th>
                    <th scope="col">Venues</th>
                    <th scope="col">Fees</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">End Time</th>
                    <th scope="col">Status</th>    
                    <th scope="col">Action</th>
                    <th scope="col">Action</th>  
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                foreach ($batch_list as $batch) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $batch['batch_name']; ?></td>
                        <td><?php echo $batch['coaching']; ?></td>
                        <td><?php echo $batch['age_group']; ?></td>
                        <td><?php echo $batch['difficulty_level']; ?></td>
                        <td><?php echo $batch['batch_type']; ?></td>
                        <td><?php echo $batch['select_venues']; ?></td>
                        <td><?php echo $batch['fees']; ?></td>
                        <td><?php echo $batch['start_date']; ?></td>
                        <td><?php echo $batch['end_date']; ?></td>
                        <td><?php echo $batch['start_time']; ?></td>
                        <td><?php echo $batch['end_time']; ?></td>
                        <td>
                            <button class="btn btn-warning btn-lg" id="delete-bannar">Expired</button>
                        </td>
                        <td>
                            <div style="display: flex; gap: 30px;">
                            <a class="" href="<?php echo ("coach/batch_edit/?user_id=".$batch['user_id']) ?>"><i class="fa fa-edit me-1" style="color:blue;"></i></a>
                            <button class="btn btn-success btn-lg" id="valid"><i class="fa fa-check me-1"></i> Valid</button>
                        </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
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

