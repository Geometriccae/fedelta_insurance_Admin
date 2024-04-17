<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title">
                            Basic Customer Details
                        </div>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('leads/add_new') ?>"enctype="multipart/form-data" method="post" >
    <div class="container">
        <div class="row gy-4">
        <div class="col-md-6">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="radio" name="customer_type" id="new_customer" value="new" checked>
                    <label class="form-check-label" for="new_customer">
                        New Customer
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check form-check-md">
                    <input class="form-check-input" type="radio" name="customer_type" id="existing_customer" value="existing">
                    <label class="form-check-label" for="existing_customer">
                        Existing Customer
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check form-check-md">
                    <input class="form-check-input" name="business_type" type="radio" id="business_type_1" value="Individual">
                    <label class="form-check-label" for="business_type_1">
                        Individual
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-check form-check-md">
                    <input class="form-check-input" name="business_type" type="radio" id="business_type_2" value="Organisation">
                    <label class="form-check-label" for="business_type_2">
                        Organization
                    </label>
                </div>
            </div>
     

            <div class="col-md-4">
                <label for="" class="form-label">Customer Name</label>
                <input type="hidden" name="action" value="add-new">
                <input type="text" name="prospect_name" class="form-control" placeholder="Type Name">
            </div>
            <div class="col-md-4">
                <label class="form-label">Mobile Number</label>
                <input type="text" name="prospect_mobile_number" class="form-control" placeholder="Mobile No">
            </div>
            <div class="col-md-4">
                <label class="form-label">Email Id</label>
                <input type="text" name="prospect_email_id" class="form-control" placeholder="Email address">
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Line Of Business</label>
                <select name="insurer_type_id" class="form-control select2-single">
                    <option disabled selected>Select one</option>
                    <?php foreach ($insurer_type_row as $insurer_type) { ?>
                        <option value="<?= $insurer_type['insurer_type_id']; ?>">
                            <?= $insurer_type['insurer_type_name']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Policy Type</label>
                <select name="policy_type_id" class="form-control select2-single">
                    <option disabled selected>Select one</option>
                    <?php foreach ($policy_type_row as $policy_type) { ?>
                        <option value="<?= $policy_type['policy_type_id']; ?>">
                            <?= $policy_type['policy_type_name']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Lead Source</label>
                <select name="lead_source_id" class="form-control select2-single">
                    <option disabled selected>Select one</option>
                    <?php foreach ($lead_source_row as $lead_source) { ?>
                        <option value="<?= $lead_source['lead_source_id']; ?>">
                            <?= $lead_source['lead_source_name']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="" class="form-label">Lead Status</label>
                <select name="lead_status_id" class="form-control select2-single">
                    <option disabled selected>Select one</option>
                    <?php foreach ($lead_status_row as $lead_status) { ?>
                        <option value="<?= $lead_status['lead_status_id']; ?>">
                            <?= $lead_status['lead_status_name']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>

            <div class="col-md-3">
    <label for="" class="form-label"> Next Follow Up Date</label>
    <input type="date" class="form-control" name="follow_up_date" value="<?= date('Y-m-d') ?>" placeholder="Select a Date">
</div>

            <div class="col-md-9">
                <label for="input-placeholder" class="form-label">Remarks</label>
                <textarea class="form-control" name="lead_remarks" rows="1"></textarea>
            </div>

            <h6 class="col-md-12">Cluster Details</h6>

            <div class="col-md-12">
                <label>
                    <input type="radio" name="showCode" id="noRadio" checked> No
                </label>

                <label>
                    <input type="radio" name="showCode" id="yesRadio"> Yes
                </label>
            </div>

            <div id="codeSnippet" class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <label for="input-placeholder" class="form-label">Cluster Name</label>
                        <input type="text" class="form-control" name="cluster_name" placeholder="Type Name">
                    </div>
                    <div class="col-md-3">
                        <label for="input-placeholder" class="form-label">Contact Person Name</label>
                        <input type="text" class="form-control" name="contact_name" placeholder="Type Name">
                    </div>
                    <div class="col-md-3">
                        <label for="input-placeholder" class="form-label">Contact Mobile</label>
                        <input type="text" class="form-control" name="contact_number" placeholder="Mobile No">
                    </div>
                    <div class="col-md-3">
                        <label for="input-placeholder" class="form-label">Contact Email Id</label>
                        <input type="mail" class="form-control" name="contact_email" placeholder="Email address">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
    <div class="mb-3">
        <label for="formFile" class="form-label">Add Document (Optional)</label>
        <input class="form-control" type="file" name="document" id="formFile">
    </div>
</div>

            <script>
  const noRadio = document.getElementById("noRadio");
  const yesRadio = document.getElementById("yesRadio");
  const codeSnippet = document.getElementById("codeSnippet");

  noRadio.addEventListener("change", () => {
    codeSnippet.style.display = "none";
  });

  yesRadio.addEventListener("change", () => {
    codeSnippet.style.display = "block";
  });

  // Initialize the initial state
  codeSnippet.style.display = "none";
</script>
            <div class="col-md-12">
                <div class="float-end">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
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