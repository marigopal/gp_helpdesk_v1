<?php include '../include/header.php'; ?>
<div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('../images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <div class="form-block">
                        <form action="check_user" method="POST">
                            <div class="text-center mb-5">
                                <h3>Login</h3>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" name="login_username" id="login_username" placeholder="Username">
                                <span id="check_login_username" class="help-block"></span>
                                <span class="glyphicon fa  fa-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Password">
                                <span id="check_login_password" class="help-block"></span>
                                <span class="glyphicon fa  fa-user form-control-feedback"></span>
                            </div>
                            <div class="d-sm-flex mb-5 align-items-center">
<!--                                      <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                                    <input type="checkbox" checked="checked"/>
                                    <div class="control__indicator"></div>
                                </label>-->
                                Don't have an account? &nbsp
                                <span class=""><a href="../create_page/signup" class="">Create Account</a></span> 
                            </div>
                            <input type="submit" value="Log In" class="btn btn-block btn-primary" id="login_submit" name="login_submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../include/footer.php'; ?>
<script src="../jquery/login_jquery.js" type="text/javascript"></script>
        