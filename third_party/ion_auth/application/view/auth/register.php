<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../assets/AdminLTE-3.0.0-beta.1/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/AdminLTE-3.0.0-beta.1/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>
<div id="infoMessage"><?php print_r($message);?></div>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

        <?php echo form_open("auth/register");?>
        <div class="input-group mb-3">
          <?php echo form_input($first_name, '', 'class="form-control" placeholder="First Name"'); ?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php echo form_input($last_name, '', 'class="form-control" placeholder="Last Name"'); ?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-user"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php echo form_input($company, '', 'class="form-control" placeholder="Company"'); ?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-building"></span>
          </div>
        </div>
        <div class="input-group mb-3" <?= empty( form_error('phone')) ?'':'has-error' ?>>
          <?php echo form_input($phone, '', 'class="form-control" placeholder="Phone"'); ?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-phone"></span>
              <span class="help-block"><?= form_error('phone'); ?></span>
          </div>
        </div>
        <div class="input-group mb-3"<?= empty( form_error('email')) ?'':'has-error' ?>>
          <?php echo form_input($email, '', 'class="form-control" placeholder="Email"'); ?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-envelope"></span>
              <span class="help-block"><?= form_error('email'); ?></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php echo form_input($password, '', 'class="form-control" placeholder="Password"'); ?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        <div class="input-group mb-3">
          <?php echo form_input($password_confirm, '', 'class="form-control" placeholder="Retype password"');?>
          <div class="input-group-append input-group-text">
              <span class="fas fa-lock"></span>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div>
          <!-- /.col -->
        </div>
        <?php echo form_close();?>

      <a href="/auth/login" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../../assets/AdminLTE-3.0.0-beta.1/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/AdminLTE-3.0.0-beta.1/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
