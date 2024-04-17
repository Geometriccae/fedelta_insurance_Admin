<script>
    const idElement = "<?= $table_field_1['name'] ?>";
    const nameElement = "<?= $table_field_2['name'] ?>";
    $(document).ready(function () {
        $(document).on('click', '.edit_modal', function () {
            let id = $(this).attr('data-id');
            $.ajax({
                type: "GET",
                url: "master_data/get_data/<?= $table_name ?>/" + id,
                dataType: "json",
                success: function (response) {
                    if (response['status'] == 200) {
                        $('#edit_modal #' + idElement).val(response['id']);
                        $('#edit_modal #' + nameElement).val(response['name']);
                    }
                }
            });
        });
    });
</script>