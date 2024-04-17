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
                                        New Quotation</button>
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
                            <h6 class="modal-title" id="exampleModalLabel">Quotation</h6>
                            <button type="button" class="btn btn-outline-primary" id="newformBtn">+ New form</button>
                        </div>
                        <div class="modal-body"><br>
                            <form id="uploadForm" enctype="multipart/form-data">
                                <div class="row gy-4">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="document_type" class="form-label">Select Insurance
                                                Company</label>
                                            <select class="form-select" name="Insurance Type" id="Insurance_Type">
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
                                </div>
                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                    <div class="float-end">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-primary"
                                                id="saveQuotesBtn">Save
                                                Quotes</button>
                                            <button type="submit" class="btn btn-outline-primary"
                                                id="saveAndEmailBtn">Save
                                                and
                                                Email</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <!-- Table to display selected values -->
                            <div class="mt-4">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Insurance Company</th>
                                                <th scope="col">Sum Insured</th>
                                                <th scope="col">Premium</th>
                                                <th scope="col">Comments</th>
                                                <th scope="col">Document</th>
                                                <th scope="col">Lead ID</th>

                                            </tr>
                                        </thead>
                                        <tbody id="selectedValuesTableBody">
                                            <!-- Selected values will be dynamically added here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script>
                $(document).ready(function () {
                    // Event handler for the "+ New Quotes" button
                    $('#newformBtn').click(function () {
                        // Reset form fields
                        $('#uploadForm')[0].reset();
                        // Clear the table
                        $('#selectedValuesTableBody').empty();
                        // Show the form
                        $('#uploadForm').show();
                        // Hide the "Save and Email" button
                        $('#saveAndEmailBtn').hide();
                    });

                    // Event handler for the "Save Quotes" button
                    $('#saveQuotesBtn').click(function () {
                        // Display selected values in the table
                        displaySelectedValues();
                        // Reset form fields
                        $('#uploadForm')[0].reset();
                    });

                    // Event handler for the "Save and Email" button
                    $('#saveAndEmailBtn').click(function () {
                        // Gather table data
                        var tableData = [];
                        $('#selectedValuesTableBody tr').each(function (index, row) {
                            var rowData = {};
                            $(row).find('td').each(function (index, column) {
                                rowData[index] = $(column).text();
                            });
                            tableData.push(rowData);
                        });

                        // Convert table data to JSON
                        var tableDataJSON = JSON.stringify(tableData);

                        // Append table data to form data
                        var formData = new FormData($('#uploadForm')[0]);
                        formData.append('tableData', tableDataJSON);

                        // Submit the form using AJAX
                        sendDataToController(formData);
                    });

                    // Function to display selected values in table
                    function displaySelectedValues() {
                        var insuranceType = $('#Insurance_Type option:selected').text();
                        var sumInsured = $('#sum_insured').val();
                        var premium = $('#premium').val();
                        var comments = $('#comments').val();
                        var documentName = $('#formFile').val().split('\\').pop(); // Extracting the file name
                        var leadId = $('[name="lead_id"]').val(); // Fetching lead ID

                        var selectedValuesHTML = `
            <tr>
                <td>${insuranceType}</td>
                <td>${sumInsured}</td>
                <td>${premium}</td>
                <td>${comments}</td>
                <td>${documentName}</td>
                <td>${leadId}</td>
            </tr>`;

                        $('#selectedValuesTableBody').append(selectedValuesHTML);
                        // Show the "Save and Email" button
                        $('#saveAndEmailBtn').show();
                    }

                    // Function to send data to the controller
                    function sendDataToController(formData) {
                        $.ajax({
                            type: 'POST',
                            url: '<?= base_url('leads/upload_document') ?>',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function (response) {
                                // Handle success response
                                console.log(response);
                                // Optionally, perform any actions after sending data to the controller
                            },
                            error: function (xhr, status, error) {
                                // Handle error response
                                console.error(error);
                            }
                        });
                    }
                });
            </script>