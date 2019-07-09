<? echo doctype('html5'); // affiche : <!DOCTYPE html> ?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <? echo meta('Content-type', 'text/html; charset=utf-8', 'equiv'); ?>
  <? echo meta("viewport", "width=device-width, initial-scale=1"); ?>
  <? echo meta("X-UA-Compatible", "IE=edge", 'http-equiv'); ?>

  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Font Awesome Icons -->
  <? echo link_tag('https://use.fontawesome.com/releases/v5.8.2/css/all.css', array('integrity' => 'sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay', 'crossorigin' => 'anonymous'))); ?>
  <!-- Theme style -->
  <? echo link_tag(base_url('assets/AdminLTE-3.0.0-beta.1/dist/css/adminlte.min.css')); ?>
  <!-- Google Font: Source Sans Pro -->
  <? echo link_tag('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')); ?>
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
