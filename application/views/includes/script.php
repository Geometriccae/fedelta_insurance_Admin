<script src="<?= base_url() ?>/assets/js/jquery.min.js"></script>
<!-- Date & Time Picker JS -->
<script src="<?= base_url() ?>/assets/libs/flatpickr/flatpickr.min.js"></script>

<script src="<?= base_url() ?>/assets/js/date&time_pickers.js"></script>

<!-- Popper JS -->
<script src="<?= base_url() ?>/assets/libs/@popperjs/core/umd/popper.min.js"></script>

<!-- Bootstrap JS -->
<script src="<?= base_url() ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Defaultmenu JS -->
<script src="<?= base_url() ?>/assets/js/defaultmenu.min.js"></script>

<!-- Node Waves JS-->
<script src="<?= base_url() ?>/assets/libs/node-waves/waves.min.js"></script>

<!-- Sticky JS -->
<script src="<?= base_url() ?>/assets/js/sticky.js"></script>

<!-- Simplebar JS -->
<script src="<?= base_url() ?>/assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?= base_url() ?>/assets/js/simplebar.js"></script>

<!-- Color Picker JS -->
<script src="<?= base_url() ?>/assets/libs/@simonwep/pickr/pickr.es5.min.js"></script>

<!-- Apex Charts JS -->
<script src="<?= base_url() ?>/assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- JSVector Maps JS -->
<script src="<?= base_url() ?>/assets/libs/jsvectormap/js/jsvectormap.min.js"></script>

<!-- JSVector Maps MapsJS -->
<script src="<?= base_url() ?>/assets/libs/jsvectormap/maps/world-merc.js"></script>

<!-- Index JS -->
<!-- <script src="<?= base_url() ?>/assets/js/widgets.js"></script> -->


<!-- Custom-Switcher JS -->
<!-- <script src="<?= base_url() ?>/assets/js/custom-switcher.min.js"></script> -->



<!-- Show Password JS -->
<!-- <script src="<?= base_url() ?>/assets/js/show-password.js"></script> -->

<!-- Select2 Cdn -->
<script src="<?= base_url() ?>/assets/js/select2.min.js"></script>

<!-- Internal Select-2.js -->
<script src="<?= base_url() ?>/assets/js/select2.js"></script>

<!-- Toast JS -->
<script src="<?= base_url() ?>/assets/js/Toasts.js"></script>

<!-- Custom JS -->
<script src="<?= base_url() ?>/assets/js/custom.js"></script>

<!-- Datatables Cdn -->
<script src="<?= base_url() ?>/assets/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>/assets/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url() ?>/assets/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url() ?>/assets/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url() ?>/assets/js/buttons.print.min.js"></script>
<script src="<?= base_url() ?>/assets/js/pdfmake.min.js"></script>
<script src="<?= base_url() ?>/assets/js/vfs_fonts.js"></script>
<script src="<?= base_url() ?>/assets/js/buttons.html5.min.js"></script>
<script src="<?= base_url() ?>/assets/js/jszip.min.js"></script>

<!-- Internal Datatables JS -->
<script src="<?= base_url() ?>/assets/js/datatables.js"></script>

<script>
  $(document).ready(function () {

    <?php if ($this->session->flashdata('success')) { ?>
      const successToast = document.getElementById('success-Toast')
      if (successToast) {
        const toast = new bootstrap.Toast(successToast)
        toast.show()
      }
    <?php } ?>
    <?php if ($this->session->flashdata('error')) { ?>
      const errorToast = document.getElementById('error-Toast')
      if (errorToast) {
        const toast = new bootstrap.Toast(errorToast)
        toast.show()
      }
    <?php } ?>

  });
</script>