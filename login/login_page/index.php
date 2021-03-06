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
    <p class="login-box-msg">Sign in to start your session</p>

    <form name="_login_form" action="">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="login_username" id="login_username" required="">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="login_password" id="login_password" required="">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          Don't have an account? &nbsp
                                <span class=""><a href="../register/index" class="">Sign Up</a></span>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
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
<script src="../../template_files/sweetalert2/sweetalert2.min.js"></script>
<script src="../../template_files/toastr/toastr.min.js"></script>
<script src="../../template_files/toast_js/toast_function.js"></script>
<script src="../../include/global_js.js" type="text/javascript"></script>
<script src="../jquery/login_jquery.js" type="text/javascript"></script>

</body>
</html>
