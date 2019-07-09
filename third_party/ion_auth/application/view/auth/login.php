<? echo doctype('html5');
<html>
<head>
  <? echo meta('Content-type', 'text/html; charset=utf-8', 'equiv'); ?>
  <? echo meta("viewport", "width=device-width, initial-scale=1"); ?>
  <? echo meta("X-UA-Compatible", "IE=edge", 'http-equiv'); ?>
  <title>AdminLTE 3 | Log in</title>

  <!-- Font Awesome -->
  <? echo link_tag('https://use.fontawesome.com/releases/v5.8.2/css/all.css', array('integrity' => 'sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay', 'crossorigin' => 'anonymous')); ?>
  <!-- Ionicons -->
  <? echo link_tag('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')); ?>
  <!-- icheck bootstrap -->
  <? echo link_tag(base_url('/assets/AdminLTE-3.0.0-beta.1/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>
  <!-- Theme style -->
  <? echo link_tag(base_url('/assets/AdminLTE-3.0.0-beta.1/dist/css/adminlte.min.css'); ?>
  <!-- Google Font: Source Sans Pro -->
  <? echo link_tag('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700'); ?>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <? echo anchor(base_url(),'<b>Admin</b>LTE'); ?>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

        <?php echo form_open("auth/login");?>
        <div class="input-group mb-3">
            <?php #echo lang('login_identity_label', 'identity');?>
            <?php echo form_input($identity, '', 'class="form-control" placeholder="Email"'); ?>
            <?php #print_r($identity); ?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
          </div>
        </div>
        <div class="input-group mb-3">
            <?php #echo lang('login_password_label', 'password');?>
            <?php echo form_input($password, '', 'class="form-control" placeholder="Email"'); ?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                <label for="remember">
                <?php echo lang('login_remember_label', 'remember');?>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <?php echo form_submit('submit', 'Signin', 'class="btn btn-primary btn-block btn-fla"');?>
          </div>
          <!-- /.col -->
        </div>
<?php echo form_close();?>

      <p class="mb-1">
        <? echo anchor('#','I forgot my password'); ?>
      </p>
      <p class="mb-0">
        <? echo anchor(base_url('auth/register'),'Register a new membership', array('class' => 'text-center')); ?>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/AdminLTE-3.0.0-beta.1/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

</body>
</html>
