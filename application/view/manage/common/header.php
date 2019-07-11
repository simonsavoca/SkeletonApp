<? echo doctype('html5'); // affiche : <!DOCTYPE html> ?>
<html>
<head>
  <? echo meta('Content-type', 'text/html; charset=utf-8', 'equiv'); ?>
  <? echo meta("X-UA-Compatible", "IE=edge", 'http-equiv'); ?>
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <? echo meta("viewport", "width=device-width, initial-scale=1"); ?>
  <!-- Font Awesome -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/plugins/fontawesome-free/css/all.min.css')); ?>
  <!-- Ionicons -->
  <? echo link_tag("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css") ?>
  <!-- Tempusdominus Bbootstrap 4 -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>
  <!-- iCheck -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>
  <!-- JQVMap -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/plugins/jqvmap/jqvmap.min.css')); ?>
  <!-- Theme style -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/dist/css/adminlte.min.css')); ?>
  <!-- overlayScrollbars -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>
  <!-- Daterange picker -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/plugins/daterangepicker/daterangepicker.css')); ?>
  <!-- summernote -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/plugins/summernote/summernote-bs4.css')); ?>
  <!-- Google Font: Source Sans Pro -->
  <? echo link_tag("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700") ?>
  <!-- DataTables -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/plugins/datatables/dataTables.bootstrap4.css')); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
