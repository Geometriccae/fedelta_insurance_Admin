<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#to_email').val('<?= $row['prospect_email_id'] ?>');

        function showForm() {
            $('#quoteForm').show();
            $('#addFormBtn').hide();
            $('#saveAllContainer').show();
        }

        function hideForm() {
            $('#quoteForm').hide();
            $('#addFormBtn').show();
        }

        $('#quoteForm').submit(function (e) {
            e.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: '<?= base_url('leads/upload_document') ?>',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function () {
                    // Show loader before sending AJAX request
                    $('#load-image').show();
                },
                success: function (response) {
                    console.log(response);

                    var tableRow = '<tr>' +
                        '<td>' + $('#Insurance_Type option:selected').text() + '</td>' +
                        '<td>' + $('#sum_insured').val() + '</td>' +
                        '<td>' + $('#premium').val() + '</td>' +
                        '<td>' + $('#comments').val() + '</td>';

                    var uploadedFile = $("#formFile").prop("files")[0];
                    if (uploadedFile) {
                        var fileName = uploadedFile.name;
                        var fileURL = '<a href="<?php echo base_url('assets/quoates_upload/') ?>' + fileName + '" target="_blank">' + fileName + '</a>';


                        tableRow += '<td>' + fileURL + '</td>';
                    } else {
                        tableRow += '<td>No document uploaded</td>';
                    }

                    tableRow += '<td><button class="btn btn-danger btn-sm deleteBtn"><i class="ri-delete-bin-line"></i></button></td>' +
                        '</tr>';

                    $('#formDataTable tbody').append(tableRow);
                    $('#quoteForm')[0].reset();
                    $('#tableContainer').show();
                    $('#saveAllContainer').show();
                    hideForm();
                },
                error: function (xhr, status, error) {
                    console.log(error);
                    alert('Error occurred while uploading document.');
                },
                complete: function () {
                    // Hide loader after AJAX request is completed
                    $('#load-image').hide();
                }
            });
        });

        $(document).on('click', '.deleteBtn', function () {
            $(this).closest('tr').remove();
        });

        $('#addFormBtn').click(function () {
            showForm();
        });

        function showMailSendingModal() {
            $('#mailSendingModal').modal('show');
        }

        // Function to hide the mail sending modal
        function hideMailSendingModal() {
            $('#mailSendingModal').modal('hide');
        }

        $('#saveAllBtn').click(function () {
            $('#cc_email').show();
            $('#bcc_email').show();

            $('#load-image').show(); // Show loader before sending AJAX request

            var tableData = $('#formDataTable').html();
            var email = $('#to_email').val();
            var cc_email = $('#cc_email').val();
            var bcc_email = $('#bcc_email').val();
            var prospectName = '<?= $row['prospect_name'] ?>';
            var insurerTypeName = '<?= $row['insurer_type_name'] ?>';


            // Show the mail sending modal
            showMailSendingModal();

            $.ajax({
                url: '<?= base_url('mail/send_email_function') ?>',
                type: 'POST',
                data: {
                    tableData: tableData,
                    email: email,
                    cc_email: cc_email,
                    bcc_email: bcc_email,
                    prospectName: prospectName,
                    insurerTypeName: insurerTypeName
                },
                success: function (response) {
                   
                    showMailSendingModal();
                    
                    $('#load-image').hide();
        
                    setTimeout(function () {
                        hideMailSendingModal();
                        $('#mailSuccessModal').modal('show');
                    }, 500);
                },

                error: function (xhr, status, error) {
                    console.log(error);
                    alert('Error occurred while sending email.');
                },
                complete: function () {
                    // Hide loader after AJAX request is completed
                    $('#load-image').hide();
                    // Hide mail sending modal
                    hideMailSendingModal();
                }
            });
        });
    });


</script>