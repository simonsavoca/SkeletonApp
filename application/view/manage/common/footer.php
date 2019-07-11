<footer class="main-footer">
    <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.0-beta.1
    </div>
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/chart.js/Chart.min.js'); ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/jqvmap/jquery.vmap.min.js'); ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/jqvmap/maps/jquery.vmap.world.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/moment/moment.min.js'); ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/summernote/summernote-bs4.min.js'); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?>"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/fastclick/fastclick.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/dist/js/pages/dashboard.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/dist/js/demo.js'); ?>"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/datatables/jquery.dataTables.js'); ?>"></script>
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/datatables/dataTables.bootstrap4.js'); ?>"></script>
<script>
  $(function () {
    $('#list').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
