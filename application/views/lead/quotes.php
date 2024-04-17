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
                                            <span class="text-xl fw-semibold">
                                                <?= $row['policy_type_name'] ?>
                                            </span>
                                            <p class="mb-0 text-muted">
                                                <?= $row['insurer_type_name'] ?>
                                            </p>
                                            <p class="mb-0 text-muted">
                                                <?= $row['prospect_name'] ?>
                                            </p>
                                            <div class="fs-12 op-7 mb-0 d-flex">
                                                <p class="me-3 mb-0 text-dark"><span
                                                        class="avatar avatar-sm avatar-rounded me-2 bg-success-transparent">
                                                        <i class="ri-mail-line align-middle fs-14"></i>
                                                    </span>
                                                    <?= $row['prospect_email_id'] ?>
                                                </p>
                                                <p class="mb-0 text-dark"><span
                                                        class="avatar avatar-sm avatar-rounded me-2 bg-warning-transparent">
                                                        <i class="ri-phone-line align-middle fs-14"></i>
                                                    </span>
                                                    <?= $row['prospect_mobile_number'] ?>
                                                </p>

                                            </div>
                                            <p class="mb-0 text-muted">Status :
                                                <?= $row['lead_status_name'] ?>
                                            </p>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="d-flex mb-0 ms-auto">
                                                    <div class="me-4">
                                                        <button type="button" aria-label="button"
                                                            class="btn btn-sm btn-icon btn-success-light ">
                                                            <i id="icon1" class="lar la-thumbs-up"></i>
                                                        </button>

                                                        <p class="mb-0 fs-12 text-muted text-center">Won</p>
                                                    </div>
                                                    <div class="me-4">
                                                        <button type="button" aria-label="button"
                                                            class="btn btn-sm btn-icon btn-secondary-light btn-wave waves-effect waves-light">
                                                            <i id="icon1" class="las la-thumbs-down"></i>
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
                                    <a href="<?= base_url() ?>leads/view/<?= $row['lead_id'] ?>"><span
                                            class="text-xl fw-semibold">History</span></a><br>
                                    <a href="<?= base_url() ?>leads/document/<?= $row['lead_id'] ?>"><span
                                            class="text-xl fw-semibold">Documents</span></a>
                                    <br>
                                    <a href="<?= base_url() ?>leads/quotes/<?= $row['lead_id'] ?>"><span id="active"
                                            class="text-xl fw-semibold">Quotes</span></a><br>
                                    <span class="text-xl fw-semibold">Tasks</span>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <style>
            .d-flex.flex-1.p-4.tx-white.pos-relative {}

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
            }
        </style>
        <style>
            .form-control {
                border-color: #d1d5de;
                color: var(--default-text-color);
                background-color: var(--form-control-bg);
                font-size: 0.875rem;
                font-weight: var(--default-font-weight);
                line-height: 1.6;
                border-radius: 0.35rem;
                padding: 0.3rem 0.75rem;
            }
        </style>
        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="col-xxl-12">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                Quotes Summary
                            </div>

                            <div class="d-flex flex-wrap">
                                <div class="me-3 my-1">
                                    <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                                        aria-label=" example">
                                </div>
                                <div class="card-buttons">
                                    <button class="modal-effect btn btn-outline-primary d-grid mb-3"
                                        data-bs-effect="effect-scale" data-bs-toggle="modal" href="#add_modal">
                                        New Quotation </button>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover text-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Insurance Company</th>
                                            <th scope="col">Quotes Document</th>
                                            <th scope="col">Sum Insured</th>
                                            <th scope="col">Premium</th>
                                            <!--<th scope="col">Comments</th>-->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($quotes)): ?>
                                            <?php foreach ($quotes as $index => $quote): ?>
                                                <tr>
                                                    <th scope="row">
                                                        <?= $index + 1 ?>
                                                    </th>
                                                    <td>
                                                        <?= $quote['insurance_type'] ?>
                                                    </td>
                                                    <td>
                                                        <a href="<?= base_url('assets/quoates_upload/' . $quote['quotes_document']) ?>"
                                                            target="_blank">
                                                            <?= $quote['quotes_document'] ?>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <?= $quote['sum_insured'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $quote['premium'] ?>
                                                    </td>
                                                    <!--<td><?= $quote['comments'] ?></td>-->
                                                    <td>
                                                        <!-- Check if 'id' key exists in the $quote array before creating delete button -->
                                                        <?php if (isset($quote['id'])): ?>
                                                            <a href="<?= base_url("leads/delete_quote/{$quote['id']}") ?>"
                                                                class="btn btn-danger btn-sm">
                                                                <i class="ri-delete-bin-line"></i> Delete
                                                            </a>
                                                            <!-- Mail Button -->
                                                            <a href="#" class="btn btn-primary btn-sm">
                                                                <i class="ri-mail-send-line"></i> Mail
                                                            </a>
                                                        <?php endif; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="6">No quote summary available</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>


                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="modal fade" id="add_modal" aria-hidden="true" class="modal fade" id="formmodal" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title" id="exampleModalLabel">Add New Quotation</h6>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body"><br>
                            <form id="quoteForm" action="<?= base_url('leads/upload_document') ?>" method="post"
                                enctype="multipart/form-data">

                                <div class="row gy-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="document_type" class="form-label">Select Insurance
                                                Company</label>
                                            <select class="form-select" name="Insurance_Type" id="Insurance_Type">
                                                <option value="" selected>Select Insurance Company</option>
                                                <?php foreach ($insurers as $insurer): ?>
                                                    <option value="<?php echo $insurer['insurer_name']; ?>">
                                                        <?php echo $insurer['insurer_name']; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="sum_insured" class="form-label">Sum Insured</label>
                                            <input class="form-control" type="text" name="sum_insured" id="sum_insured"
                                                placeholder="Enter sum insured amount">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="premium" class="form-label">Premium</label>
                                            <input class="form-control" type="text" name="premium" id="premium"
                                                placeholder="Enter premium amount">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="comments" class="form-label">Comments</label>
                                            <textarea class="form-control" name="comments" rows="4" id="comments"
                                                placeholder="Enter any comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="document2" class="form-label">Upload Document</label>
                                            <input class="form-control" type="file" name="document2" id="formFile">
                                        </div>
                                    </div>

                                    <!-- Hidden input for lead_id -->
                                    <input type="hidden" name="lead_id" value="<?= $row['lead_id'] ?>">
                                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                        <div class="float-end">
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-outline-primary">Save
                                                    Quotes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div id="tableContainer" style="display: none;"> <!-- Hide initially -->
                                <table class="table" id="formDataTable">
                                    <thead>
                                        <tr>
                                            <th>Insurance Company</th>
                                            <th>Sum Insured</th>
                                            <th>Premium</th>
                                            <th>Comments</th>
                                            <th>Upload Document</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Table rows will be appended here -->
                                    </tbody>
                                </table>
                                <br>
                                <div class="text-center">
                                    <button type="button" id="addFormBtn" class="btn btn-primary text-center"><i
                                            class="las la-plus"></i> Add More
                                        Quotes</button>
                                </div>

                            </div>
                        </div>
                        <div id="saveAllContainer" style="display: none;">
                            <div class="modal-header">
                                <h6 class="modal-title" id="exampleModalLabel">Select Recipient's</h6>

                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="Client" class="form-label">Client</label>
                                            <input type="text" class="form-control" id="to_email" name="to_email"
                                                value="<?= $row['prospect_email_id'] ?>" placeholder="TO Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="cc_team" class="form-label">CC Team</label>
                                            <input type="text" class="form-control" id="cc_email" name="cc_email"
                                                placeholder="CC Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="bcc_Team" class="form-label">BCC Team</label>
                                            <input type="text" class="form-control" id="bcc_email" name="bcc_email"
                                                placeholder="BCC Email">
                                        </div>
                                    </div>
                                </div>

                                <!-- BCC input -->

                            </div>
                            <div class="modal-footer">



                                <!-- CC input -->

                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal"
                                    aria-label="Close">Skip
                                    Email</button> <button type="submit" id="saveAllBtn" class="btn btn-primary">Save
                                    And Email</button>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
<div class="modal fade" id="mailSendingModal" tabindex="-1" aria-labelledby="exampleModalScrollable2"
    data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content  bg-success text-light">

            <div class="modal-body  text-center">
                <p>Please wait while the email is being sent...</p>
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="mailSuccessModal" tabindex="-1" aria-labelledby="exampleModalScrollable2"
    data-bs-keyboard="false" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content  bg-success text-light">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="color: white;"></button>

            </div>
            <div class="modal-body  text-center">
                <p>Email sent successfully.</p>
                <i class="las la-check" style="color: white;"></i>

            </div>

        </div>
    </div>
</div>
</div>