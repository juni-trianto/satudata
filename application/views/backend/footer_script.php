<!-- Vendor js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/js/vendor.min.js"></script>

        <!-- Daterangepicker js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
        
        <!-- Apex Charts js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/apexcharts/apexcharts.min.js"></script>

        <!-- Vector Map js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard App js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/js/pages/demo.dashboard.js"></script>

        <!-- App js -->
        <script src="<?= base_url('assets/template/creative/'); ?>assets/js/app.min.js"></script>




        <!-- Datatables js -->
<script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>

<script src="<?= base_url('assets/template/creative/'); ?>assets/js/pages/demo.datatable-init.js"></script>
<!-- Datatable Init js -->


  <!-- Toastr Demo js -->
  <script src="<?= base_url('assets/template/creative/'); ?>assets/vendor/jquery-toast-plugin/jquery.toast.min.js"></script>
  <script src="<?= base_url('assets/template/creative/'); ?>assets/js/pages/demo.toastr.js"></script>

  <?php if ($this->session->flashdata('error')) : ?>
    <script>
        $.NotificationApp.send("Error", "<?= $this->session->flashdata('error') ?>", "top-left ", "danger", "error")
    </script>
<?php endif; ?>
<?php if ($this->session->flashdata('success')) : ?>
    <script>
        $.NotificationApp.send("Success", "<?= $this->session->flashdata('success') ?>", "top-left ", "success", "success")
    </script>
<?php endif; ?>