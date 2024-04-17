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
                                        <span id="active" class="text-xl fw-semibold">History</span><br>
                                            <a href="<?= base_url() ?>leads/document/<?= $row['lead_id'] ?>"><span class="text-xl fw-semibold">Documents</span></a>
                                        <br>
                                        <a href="<?= base_url() ?>leads/quotes/<?= $row['lead_id'] ?>"><span class="text-xl fw-semibold">Quotes</span></a><br>
                                        <span class="text-xl fw-semibold">Tasks</span>
                                      
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
                    
    
                        
                   
                 
                    <div class="col-xl-12">
                            <div class="card custom-card">
                               
                                <div class="card-body">
                                <form class="was-validated" method="POST" action="<?= base_url('leads/remarks') ?>">
    <div class="mb-3" style="position: relative;">
        <textarea class="form-control" name="remark_message" id="validationTextarea" placeholder="Remarks" required="" rows="5" style="color: black; "></textarea>
    </div>
    <input type="hidden" name="lead_id" value="<?= $row['lead_id'] ?>">
    <div class="mb-3" style="text-align: right;">
        <button class="btn btn-primary" type="submit"><i class="bi bi-check-lg"></i></button>
    </div>
</form>


                                </div>
                            </div>
                        </div>
    

                        <div class="col-xl-12">
    <?php foreach ($remarks as $index => $remark) : ?>
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title text-primary">Admin Added Remark</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                    <p class="card-text mb-0 text-secondary">
                    <small><?= date('M d, Y h:i a', strtotime($remark->created_at)) ?></small>
                </p><br>
                        <?= $remark->remark_message ?>
                    </div>
                </div>
            </div>
           
        </div>
    <?php endforeach; ?>
</div>

<?php if (!empty($row['lead_remarks'])): ?>
    <div class="col-xl-12">
        <div class="card custom-card">
            <div class="card-header">
                <div class="card-title text-primary">Admin Added Remark</div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= $row['lead_remarks'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

