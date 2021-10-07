<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);
$sql = "SELECT tbl_users.id,tbl_users.firstname,tbl_users.lastname,tbl_users.designation,tbl_users.email,tbl_users.address,tbl_users.username,tbl_users.password FROM tbl_users WHERE tbl_users.id = '$id'";
$result = mysqli_query($con, $sql); // select query
$data = mysqli_fetch_array($result);
?>
<div class="content-wrapper">
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
          <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>
    <section class="content">
        <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
            <div class="box-body box-profile">
                <h3 class="profile-username text-center"><?php echo $data[1];  ?></h3>
                <p class="text-muted text-center"><?php echo $data[3];  ?></p>
            </div>
            </div>
            <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
                <div class="box-body">
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                    <p class="text-muted"><?php echo $data[5];  ?></p>
                    <hr>
                </div>
            </div>
        </div>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Setting</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <div class="tab-pane" id="settings">
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Unique ID</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="u_id" id="u_id" placeholder="Unique ID" value="<?php echo $data[0];  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" value="<?php echo $data[1];  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" value="<?php echo $data[2];  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Designation</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="designation" id="designation" placeholder="Designation" value="<?php echo $data[3];  ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $data[4];  ?>" onkeyup="input_remove_error_notification('email'); remove_disabled('update_user');">
                                            <span id="email_check" class="help-block"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" rows="5" id="address" name="address" maxlength="150" required="" placeholder="Address"><?php echo $data[5];  ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">User Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="username" id="username" placeholder="User Name" value="<?php echo $data[6];  ?>" onkeyup="input_remove_error_notification('username'); remove_disabled('update_user');">
                                             <span id="username_check" class="help-block"></span>
                                        </div>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label"></label>
                                        <div class="col-sm-10">
                                            <input class="form-check-input" type="radio" name="password_reset" id="password_reset">
                                            Do you want change password?
                                        </div>
                                    </div>
                                    <div class="form-group" id="password_div" hidden="">
                                        <label for="inputSkills" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo decrypt($data[7]);?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger" id="update_user">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include '../../include/footer.php';?>
<script src="../jquery/_profile_update.js" type="text/javascript"></script>