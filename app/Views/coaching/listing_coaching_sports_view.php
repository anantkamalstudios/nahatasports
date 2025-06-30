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
                        <div class="card border-top-0">
                            <div class="tab-content">
                                 <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <a class="btn btn-primary" href="<?php echo base_url();?>add_coach_sport" style="margin-left: 90%;">Add More Sports</a>
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Sports:</span>
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
                    <th scope="col">Sport Title</th>
                    <th scope="col">Sport Banner</th>
                    <th scope="col">About Sports</th>
                    <th scope="col">Benefits of Sports</th>
                    <th scope="col">Future Prospects</th>
                    <th scope="col">Action</th> 
                </tr>
            </thead>
            <tbody>
                 <?php
                $i = 1;

                foreach ($coach_sport_list as $coach_sport) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $coach_sport['sport_title']; ?></td>
                        <td>
                            <img width="80" height="80" src="<?php echo base_url();?>/assets/uploads/<?php echo $coach_sport['sport_bannar_image']; ?>">
                        </td>
                        <td><?php echo $coach_sport['about_sport']; ?></td>
                        <td><?php echo $coach_sport['benefits_sports']; ?></td>
                        <td><?php echo $coach_sport['future_prospects']; ?></td>
                        <td>
                            <div style="display: flex; gap: 30px;">
                            <a class="" href="<?php echo ("coach/sport_edit/?user_id=".$coach_sport['user_id']) ?>"><i class="fa fa-edit me-1" style="color:blue;"></i></a>

                            <a class="coach-delete-bannar" id="coach-delete-bannar" href="javascript:void(0)" data-id="<?php echo $coach_sport['user_id']; ?>"><i class="fa fa-trash me-1" style="color:red;"></i></a> 
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>var baseUrl = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/script/coach_sports_delete.js"></script>




