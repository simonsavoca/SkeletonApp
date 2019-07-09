<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('manage'); ?>" class="brand-link">
      <? echo img('assets/AdminLTE-3.0.0-beta.1/dist/img/AdminLTELogo.png', FALSE, array ('alt' => 'AdminLTE Logo', 'class' => 'brand-image img-circle elevation-3', 'style' => 'opacity: .8')); ?>
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <? echo img('assets/AdminLTE-3.0.0-beta.1/dist/img/user2-160x160.jpg', FALSE, array ('alt' => 'User Image', 'class' => 'mg-circle elevation-2')); ?>
        </div>
        <div class="info">

          <? echo anchor('#', $email, array ('class' => 'd-block')); ?>
        </div>
      </div>
        <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
