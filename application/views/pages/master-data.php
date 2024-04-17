<!-- Start::app-content -->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Start::row-2 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div class="card-title">
                            <?= $table_title ?>
                        </div>
                        <div class="card-buttons">
                            <button class="modal-effect btn btn-outline-primary d-grid mb-3" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#add_modal">Add New</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table text-nowrap table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">
                                            <?= $table_field_2['title'] ?>
                                        </th>
                                        <th scope="col">
                                            <?= $table_field_3['title'] ?>
                                        </th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($table_rows as $table_row) { ?>

                                        <tr>
                                            <td>
                                                <?= $i ?>
                                            </td>
                                            <td>
                                                <?= $table_row[$table_field_2['name']] ?>
                                            </td>
                                            <td>
                                                <?= $table_row[$table_field_3['name']] ?>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                    <button data-id='<?= $table_row[$table_field_1['name']] ?>' type="button" data-bs-effect="effect-scale" data-bs-toggle="modal" href="#edit_modal"
                                                        class="btn btn-sm btn-info btn-wave waves-effect waves-light edit_modal">
                                                        <i class="ri-edit-line"></i> Edit</button>
                                                    <button type="button" data-id='<?= $table_row[$table_field_1['name']] ?>' data-bs-effect="effect-scale" data-bs-toggle="modal" href="#delete_modal"
                                                        class="btn btn-sm btn-danger btn-wave waves-effect waves-light delete_modal">
                                                        <i class="ri-delete-bin-line"></i> Delete</button>
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
<!-- Add Model -->
<div class="modal fade" id="add_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <form action="<?= base_url() ?>/Master_data/add_<?= $table_name ?>" method="post">
                <div class="modal-header">
                    <h6 class="modal-title">Add New</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-start">
                    <input type="hidden" name="add_<?= $table_name ?>">
                    <div class="form-group">
                        <label for="" class="form-label">
                            <?= $table_field_2['title'] ?>
                        </label>
                        <input id="" class="form-control" type="text" name="<?= $table_field_2['name'] ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm w-100">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit model -->
<div class="modal fade" id="edit_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <form action="<?= base_url() ?>/Master_data/edit_<?= $table_name ?>" method="post">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Data</h6>
                    <!-- <button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button> -->
                </div>
                <div class="modal-body text-start">
                    <input type="hidden" name="edit_<?= $table_name ?>">
                    <input type="hidden" id='<?= $table_field_1['name'] ?>' name="<?= $table_field_1['name'] ?>" required>
                    <div class="form-group">
                        <label for="" class="form-label">
                            <?= $table_field_2['title'] ?>
                        </label>
                        <input class="form-control" type="text" id="<?= $table_field_2['name'] ?>" name="<?= $table_field_2['name'] ?>" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-md">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Delete model -->
<div class="modal fade" id="delete_modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered text-center" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Alert ! </h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-start">
                <h4>Are you sure to delete this ?</h4>
                <p>Once you delete can't be recover back..</p>
                <div class="d-flex align-content-center justify-content-between mt-3">
                    <a href='#' class="btn btn-outline-danger">Delete</a>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End::app-content -->