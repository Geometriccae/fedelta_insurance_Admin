<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
    <div class="row">
                    <div class="col-md-9">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="d-flex flex-1 p-4 tx-white pos-relative">
                                        <a aria-label="anchor" href="javascript:void(0);" class="masked-link"></a>
                                      
                                        <div class="flex-1">
                                           <div class="row">
                                            <div class="col-md-8">
                                            <span class="text-xl fw-semibold"><?= $row['policy_type_name'] ?></span>
                                            <p class="mb-0 text-muted"><?= $row['insurer_type_name'] ?></p>
                                            <p class="mb-0 text-muted"><?= $row['prospect_name'] ?></p>
                                            <div class="fs-12 op-7 mb-0 d-flex">
                                            <p class="me-3 mb-0 text-dark"><span class="avatar avatar-sm avatar-rounded me-2 bg-success-transparent">
                                            <i class="ri-mail-line align-middle fs-14"></i>
                                            </span><?= $row['prospect_email_id'] ?></p>
                                            <p class="mb-0 text-dark"><span class="avatar avatar-sm avatar-rounded me-2 bg-warning-transparent">
                                            <i class="ri-phone-line align-middle fs-14"></i>
                                        </span><?= $row['prospect_mobile_number'] ?></p>
                                        
                                        </div>
                                            <p class="mb-0 text-muted">Status : <?= $row['lead_status_name'] ?></p>
                                            
                                            </div>
                                            <div class="col-md-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                            <div class="d-flex mb-0 ms-auto">
                                                <div class="me-4">
                                                <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-success-light ">
                                                <i id="icon1" class="lar la-thumbs-up"></i>
                                                 </button>
                                                   
                                                    <p class="mb-0 fs-12 text-muted text-center">Won</p>
                                                </div>
                                                <div class="me-4">
                                                <button type="button" aria-label="button"  class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                <i id="icon1"  class="las la-thumbs-down"></i>
                                                </button>
                                                    
                                                    <p class="mb-0 fs-12 text-muted text-center">Lost</p>
                                                </div>
                                                <div class="">
                                                
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                           </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card custom-card">
                            <div class="card-body p-0">
                                <div class="d-flex flex-wrap justify-content-between align-items-center">
                                    <div class="d-flex flex-1 p-4 tx-white pos-relative">
                                        <a aria-label="anchor" href="javascript:void(0);" class="masked-link"></a>
                                       
                                        <div class="flex-1">
                                        <a href="<?= base_url() ?>leads/view/<?= $row['lead_id'] ?>"><span class="text-xl fw-semibold">History</span></a><br>
                                            <a href="<?= base_url() ?>leads/document/<?= $row['lead_id'] ?>"><span id="active"  class="text-xl fw-semibold">Documents</span></a>
                                        <br>
                                        <a href="<?= base_url() ?>leads/quotes/<?= $row['lead_id'] ?>"><span class="text-xl fw-semibold">Quotes</span></a><br>
                                        <span class="text-xl fw-semibold">Tasks</span>
                                      
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
                    <style>
    .d-flex.flex-1.p-4.tx-white.pos-relative {
    
}
span#active {
    color: #4776e6;
}
h5 {
    padding: 8px;
}
.btn-icon.btn-sm {
    width: 3.75rem;
    height: 3.75rem;
    font-size: 0.8rem;
}
.btn-icon i {
    padding: 0rem;
    margin: 0;
    font-size: 30px;
}
span.text-xl.fw-semibold {
    font-size: 18px;
}</style>
        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title">
                           Add Documents
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('leads/upload_document2') ?>" method="post" enctype="multipart/form-data">

                    
    <div class="row gy-4">
    <div class="col-md-12">
            <div class="mb-3">
                <label for="document_type" class="form-label">Document Type</label>
                <select class="form-select" name="document_type" id="document_type">
                    <option value="license">License</option>
                    <option value="voter_id">Voter ID</option>
                    <option value="aadhar_card">Aadhar Card</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="mb-3">
                <input class="form-control" type="file" name="document2" id="formFile">
            </div>
        </div>
        <!-- Hidden input for lead_id -->
        <input type="hidden" name="lead_id" value="<?= $row['lead_id'] ?>">
        <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
            <div class="float-end">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
    </div>
</form>

                    
                        
                    </div>
                </div>
            </div>
            <div class="col-md-">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="flex-1 border-bottom-dashed">
                                   
                                    
                                    <div class="flex-between">
                                    <span class="mb-0 flex-1 text-muted fw-semibold"> <?php if (!empty($row['document_name'])): ?>
                        <a href="<?= base_url('assets/upload/' . $row['document_name']) ?>" target="_blank">
                            <?= $row['document_name'] ?>
                        </a>
                    <?php else: ?>
                        
                    <?php endif; ?>
                    <?php
                    $files = $this->leads_model->get_files_by_lead_id($row['lead_id']);
                    if (!empty($files)) {
                        foreach ($files as $file) {
                            
                        }
                    } else {
                        echo '';
                    }
                    ?>
                 <?php if (!empty($files)): ?>
    <table class="table">
        <thead>
            <tr>
               
                <th>All Documents</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($files as $file): ?>
                <tr>
                    
                    <td>
                        <a href="<?= base_url('assets/upload/' . $file['files']) ?>" target="_blank">
                            <?= $file['files'] ?>
                        </a>
                    </td>
                    <td>
                        <a href="<?= base_url('leads/delete_document_by_id/' . $file['id']) ?>" onclick="return confirm('Are you sure you want to delete this document?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No documents available.</p>
<?php endif; ?>

                    </span>
                    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
      
    </div>
</div>
<!-- Mail Sending Modal -->
<!-- Mail Sending Modal -->
<!-- Modal for Mail Sending Status -->

