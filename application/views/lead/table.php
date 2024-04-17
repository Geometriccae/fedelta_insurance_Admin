<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title">
                            Leads Table
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="responsiveDataTable" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Prospect Details</th>
                                        <th scope="col">Source</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Line Of Business</th>
                                        <th scope="col">Policy</th>
                                        <th scope="col">Cluster Detail</th>
                                        <th scope="col">Follow Up Date</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Business</th>
                                        <th scope="col">Documents</th>
                                        <!-- <th scope="col">All Files</th> New column for All Files -->
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($table_rows as $row) { ?>
                                        <tr>
                                            <td>
                                                <?= $i ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url() ?>leads/view/<?= $row['lead_id'] ?>">
                                                    <?= $row['prospect_name'] ?><br>
                                                    <?= $row['prospect_mobile_number'] ?><br>
                                                    <?= $row['prospect_email_id'] ?>
                                                </a>
                                            </td>
                                            <td>
                                                <?= $row['lead_source_name'] ?>
                                            </td>
                                            <td>
                                                <?= $row['lead_status_name'] ?>
                                            </td>
                                            <td>
                                                <?= $row['insurer_type_name'] ?>
                                            </td>
                                            <td>
                                                <?= $row['policy_type_name'] ?>
                                            </td>
                                            <td>
                                                <?= $row['contact_name'] ?><br>
                                                <?= $row['contact_number'] ?><br>
                                                <?= $row['contact_email'] ?>
                                            </td>
                                            <td>
                                                <?= $row['follow_up_date'] ?>
                                            </td>
                                            <td>
                                                <?= $row['business_type'] ?>
                                            </td>
                                            <td>
                                                <?= ($row['customer_type'] == 'new') ?
                                                    '<span class="badge rounded-pill bg-secondary">New</span>' :
                                                    '<span class="badge rounded-pill bg-success">Existing</span>' ?>
                                            </td>
                                            <td>
                                                <?php if (!empty($row['document_name'])): ?>
                                                    <a href="<?= base_url('assets/upload/' . $row['document_name']) ?>"
                                                        target="_blank">
                                                        <?= $row['document_name'] ?>
                                                    </a>
                                                <?php else: ?>
                                                    No Files
                                                <?php endif; ?>
                                                <?php
                                                $files = $this->leads_model->get_files_by_lead_id($row['lead_id']);
                                                if (!empty($files)) {
                                                    foreach ($files as $file) {
                                                        echo '<a href="' . base_url('assets/upload/' . $file['files']) . '" target="_blank">' . $file['files'] . '</a><br>';
                                                    }
                                                } else {
                                                    echo 'No Files';
                                                }
                                                ?>
                                            </td>
                                            <!--  <td>
                                                    <?php
                                                    $files = $this->leads_model->get_files_by_lead_id($row['lead_id']);
                                                    if (!empty($files)) {
                                                        foreach ($files as $file) {
                                                            echo '<a href="' . base_url('path/to/files/' . $file['files']) . '" target="_blank">' . $file['files'] . '</a><br>';
                                                        }
                                                    } else {
                                                        echo 'No Files';
                                                    }
                                                    ?>
                                                </td>-->
                                            <td>
                                                <div class="btn-group btn-group-sm" role="group"
                                                    aria-label="Basic mixed styles example">
                                                    <a href="<?= base_url() ?>leads/edit/<?= $row['lead_id'] ?>"
                                                        class="btn btn-sm btn-info btn-wave waves-effect waves-light edit_modal">
                                                        <i class="ri-edit-line"></i> Edit
                                                    </a>
                                                    <button type="button" data-id="<?= $row['lead_id'] ?>"
                                                        data-bs-effect="effect-scale" data-bs-toggle="modal"
                                                        href="#delete_modal"
                                                        class="btn btn-sm btn-danger btn-wave waves-effect waves-light delete_modal">
                                                        <i class="ri-delete-bin-line"></i> Delete
                                                    </button>
                                                    <a href="<?= base_url() ?>leads/view/<?= $row['lead_id'] ?>"
                                                        class="btn btn-sm btn-primary btn-wave waves-effect waves-light">
                                                        <i class="ri-eye-line"></i> View
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Delete model -->
<div class="modal fade" id="delete_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Alert ! </h6><button aria-label="Close" class="btn-close"
                    data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-start">
                <h4>Are you sure to delete this ?</h4>
                <p>Once you delete can't be recover back..</p>
                <div class="d-flex align-content-center justify-content-between mt-3">
                    <a href='#' class="btn btn-outline-danger delete-link">Delete</a>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End::app-content -->