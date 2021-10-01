<?php include '../include/header.php'; ?>
<div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('../images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <div class="form-block">
                        <form action="create_user" method="POST">
                            <div class="text-center mb-5">
                                <h3>Create Account</h3>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname">
                                <span class="glyphicon fa  fa-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">
                                <span class="glyphicon fa  fa-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" name="email_id" id="email_id" placeholder="Email Address">
                                <span class="glyphicon fa  fa-user form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                                <span class="glyphicon fa  fa-user form-control-feedback"></span>
                            </div>     
                            <div class="form-group has-feedback">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                <span class="glyphicon fa  fa-user form-control-feedback"></span>
                            </div> 
                            <div class="d-sm-flex mb-5 align-items-center">
<!--                                      <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                                   <input type="checkbox" checked="checked"/>
                                   <div class="control__indicator"></div>
                               </label>-->
                                Already have an account? &nbsp
                                <span class=""><a href="../login_page/index" class="">Login</a></span> 
                            </div>
                            <input type="submit" value="Sign Up" class="btn btn-block btn-primary" id="create_submit" name="create_submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../include/footer.php'; ?>
<script src="../jquery/signup_jquery.js" type="text/javascript"></script>