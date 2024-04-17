<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title">
                            Edit Lead Details
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('leads/update') ?>" method="post" enctype="multipart/form-data">
                            <div class="row gy-4 ">
                            <div class="col-6">
    <div class="form-check form-check-md">
        <input class="form-check-input" type="radio" name="customer_type" id="new_customer" value="new" <?= ($row['customer_type'] == 'new') ? 'checked' : '' ?>>
        <label class="form-check-label" for="new_customer">
            New Customer
        </label>
    </div>
</div>
<div class="col-6">
    <div class="form-check form-check-md">
        <input class="form-check-input" type="radio" name="customer_type" id="existing_customer" value="existing" <?= ($row['customer_type'] == 'existing') ? 'checked' : '' ?>>
        <label class="form-check-label" for="existing_customer">
            Existing Customer
        </label>
    </div>
</div>

                            <div class="col-6">
    <div class="form-check form-check-md">
    <input class="form-check-input" name="business_type" type="radio" <?= ($row['business_type'] == "Individual") ? "checked" : "" ?> id="business_type_1"
                                                value='Individual'>
                                            <label class="form-check-label" for="business_type_1">
                                                Individual </label>
    </div>
</div>
<div class="col-6">
    <div class="form-check form-check-md">
    <input class="form-check-input" name="business_type" type="radio" <?= ($row['business_type'] == "Organization") ? "checked" : "" ?> id="business_type_2"
                                                value='Organization'>
                                            <label class="form-check-label" for="business_type_2">
                                                Organization </label>
    </div>
</div>

                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="form-label">Customer Name</label>
                                    <input type="hidden" name="action" value="edit-now">
                                    <input type="hidden" name="lead_id" value="<?= $row['lead_id'] ?>">
                                    <input type="hidden" name="cluster_id" value="<?= $row['cluster_id'] ?>">
                                    <input type="text" name="prospect_name" class="form-control" value="<?= $row['prospect_name'] ?>" placeholder="Type Name">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" name="prospect_mobile_number" class="form-control" value="<?= $row['prospect_mobile_number'] ?>" placeholder="Mobile No">
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <label class="form-label">Email Id</label>
                                    <input type="text" name="prospect_email_id" class="form-control" value="<?= $row['prospect_email_id'] ?>" placeholder="Email address">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="form-label">Insurance Type</label>
                                    <select name="insurer_type_id" class="form-control select2-single">
                                        <option disabled selected>Select one</option>
                                        <?php foreach ($insurer_type_row as $insurer_type) { ?>
                                            <option value="<?= $insurer_type['insurer_type_id']; ?>" <?= ($row['insurer_type_id'] == $insurer_type['insurer_type_id']) ? "selected" : "" ?>>
                                                <?= $insurer_type['insurer_type_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="form-label">Policy Type</label>
                                    <select name="policy_type_id" class="form-control select2-single">
                                        <option disabled selected>Select one</option>
                                        <?php foreach ($policy_type_row as $policy_type) { ?>
                                            <option value="<?= $policy_type['policy_type_id']; ?>" <?= ($row['policy_type_id'] == $policy_type['policy_type_id']) ? "selected" : "" ?>>
                                                <?= $policy_type['policy_type_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="form-label">Lead Source</label>
                                    <select name="lead_source_id" class="form-control select2-single">
                                        <option disabled selected>Select one</option>
                                        <?php foreach ($lead_source_row as $lead_source) { ?>
                                            <option value="<?= $lead_source['lead_source_id']; ?>" <?= ($row['lead_source_id'] == $lead_source['lead_source_id']) ? "selected" : "" ?>>
                                                <?= $lead_source['lead_source_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="form-label">Lead Status</label>
                                    <select name="lead_status_id" class="form-control select2-single">
                                        <?php foreach ($lead_status_row as $lead_status) { ?>
                                            <option value="<?= $lead_status['lead_status_id']; ?>" <?= ($row['lead_status_id'] == $lead_status['lead_status_id']) ? "selected" : "" ?>>
                                                <?= $lead_status['lead_status_name']; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                               
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="" class="form-label">Next Followup Date</label>
                                    <input type="date" class="form-control" value="<?= $row['followup_date'] ?>" name="followup_date" placeholder="Placeholder">
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-placeholder" class="form-label">Remarks</label>
                                    <textarea class="form-control" name="lead_remarks" rows="1"><?= $row['lead_remarks'] ?></textarea>
                                </div>
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="border-top"></div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <h6>Cluster Details</h6>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-placeholder" class="form-label">Cluster Name</label>
                                    <input type="text" class="form-control" value="<?= $row['cluster_name'] ?>" name="cluster_name" placeholder="Type Name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-placeholder" class="form-label">Contact Person Name</label>
                                    <input type="text" class="form-control" value="<?= $row['contact_name'] ?>" name="contact_name" placeholder="Type Name">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-placeholder" class="form-label">Contact Mobile</label>
                                    <input type="text" class="form-control" value="<?= $row['contact_number'] ?>" name="contact_number" placeholder="Mobile No">
                                </div>
                                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                                    <label for="input-placeholder" class="form-label">Contact Email Id</label>
                                    <input type="mail" class="form-control" value="<?= $row['contact_email'] ?>" name="contact_email" placeholder="Email address">
                                </div>
                                <div class="col-md-12">
        <div class="mb-3">
            <label for="formFile" class="form-label">Add Document</label>
            <input class="form-control" type="file" name="document" id="formFile">
        </div>
    </div>
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
        </div>
    </div>
</div>