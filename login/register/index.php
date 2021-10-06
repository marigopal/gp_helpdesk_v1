<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../template_files/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../template_files/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../template_files/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../template_files/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../template_files/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="../../template_files/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="../../template_files/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
 <div class="login-box-body">
    <p class="login-box-msg">Create Account</p>

    <form name="_register_form" action="">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="email_id" id="email_id" placeholder="Email Address" onkeyup="input_remove_error_notification('email_id');" required="">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <span id="email_id_check" class="help-block"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" onkeyup="input_remove_error_notification('username'); remove_disabled('create_submit');" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <span id="username_check" class="help-block"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          Already have an account? &nbsp
                                <span class=""><a href="../login_page/index" class="">Login</a></span>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id="create_submit" name="create_submit" disabled="">Sign Up</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../../template_files/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../template_files/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../template_files/plugins/iCheck/icheck.min.js"></script>
<script src="../jquery/signup_jquery.js" type="text/javascript"></script>
<script src="../../template_files/sweetalert2/sweetalert2.min.js"></script>
<script src="../../template_files/toastr/toastr.min.js"></script>
<script src="../../template_files/toast_js/toast_function.js"></script>
<script src="../../include/global_js.js" type="text/javascript"></script>
</body>
</html>
