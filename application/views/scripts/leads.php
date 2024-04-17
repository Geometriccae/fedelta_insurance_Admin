<script>
    $(document).ready(function () {
        $(".select2-single").select2();
        $(document).on('click','.delete_modal', function () {
            let id = $(this).attr('data-id');
            $('#delete_modal').find('.delete-link').attr('href', '<?= base_url() ?>leads/delete/' + id);
        });
    });
</script>