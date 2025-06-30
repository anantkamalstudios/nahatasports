
    <main class="nxl-container">
        <div class="nxl-content">
            <div class="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card border-top-0">
                            <div class="tab-content">
                                 <div class="tab-pane fade show active" id="profileTab" role="tabpanel">
                                    <div class="card-body personal-info">
                                        <a class="btn btn-primary" href="<?php echo base_url();?>add_post" style="margin-left: 90%;">Add Post</a>
                                        <div class="mb-4 d-flex align-items-center justify-content-between">
                                            <h5 class="fw-bold mb-0 me-4">
                                                <span class="d-block mb-2">Post Category Listing:</span>
                                                <span class="fs-12 fw-normal text-muted text-truncate-1-line"></span>
                                            </h5>
                                        </div>
    <form id="bannar_delete" class="bannar_delete" method="post">              
        <div class="section-wrapper">
                <div class="table-responsive">
                   <table class="table mg-b-0">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Post Image</th>
                                <th scope="col">Date</th>    
                                <th scope="col">Published Name</th>
                                <th scope="col">Content</th>
                                <th scope="col">Action</th>  
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                $i = 1;

                foreach ($post_list as $post_list) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td>
                            <img width="80" height="80" src="<?php echo base_url();?>/assets/uploads/<?php echo $post_list['post_image']; ?>">
                        </td>
                        <td><?php echo $post_list['date']; ?></td>
                        <td><?php echo $post_list['published_by']; ?></td>
                        <td><?php echo $post_list['content']; ?></td>
                        <td>
                            <div style="display: flex; gap: 30px;">
                            <a class="" href="<?php echo ("venue/post_edit/?user_id=".$post_list['user_id']) ?>"><i class="fa fa-edit me-1" style="color:blue;"></i></a>

                            <a class="post-delete" id="post-delete" href="javascript:void(0)" data-id="<?php echo $post_list['user_id']; ?>"><i class="fa fa-trash me-1" style="color:red;"></i></a> 
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
<script type="text/javascript" src="<?php echo base_url()?>assets/script/post_delete.js"></script>

