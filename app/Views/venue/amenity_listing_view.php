<main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-top-0">
                            <div class="tab-content">
                                 <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <a class="btn btn-primary" href="<?php echo base_url();?>add_amenity" style="margin-left: 90%;">Add Amenity</a>
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Amenity Listing:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                            </h5>
                                        </div>
    <form id="amenity_delete" class="amenity_delete" method="post">              
        <div class="section-wrapper">
                <div class="table-responsive">
                   <table class="table mg-b-0">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Amenity Name</th>    
                                <th scope="col">Action</th>  
                            </tr>
                        </thead>
                         <tbody>
                            <?php $i = 1;
                                foreach ($amenity_list as $amenity_list) { ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $amenity_list['amenity_name']; ?></td>
                                        <td>
                                            <div style="display: flex; gap: 30px;">
                                                <a href="<?php echo ("venue/edit_amenity/?user_id=".$amenity_list['user_id']) ?>"><i class="fa fa-edit" style="color: blue;"></i></a>

                                                <a class="delete-amenity-data" id="delete-amenity-data" href="javascript:void(0)" data-id="<?php echo $amenity_list['user_id']; ?>">
                                                <i class="fa fa-trash" style="color: red;"></i> 
                                                </a>

                                                <i class="fa fa-print" style="font-size:25px;color:red; cursor:pointer;" onclick="printDiv()"></i>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>var baseUrl = '<?php echo base_url();?>';</script>
<script type="text/javascript" src="<?php echo base_url()?>assets/script/amenity_delete.js"></script>
<script>
function printDiv() {
    var element = document.getElementById('printSection');
    var opt = {
        margin:       0.5,
        filename:     'registration.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
    };
    html2pdf().set(opt).from(element).save();
}
</script>



