<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);

$sql = "SELECT tbl_users.id,tbl_users.firstname,tbl_users.lastname,tbl_users.email,tbl_users.username,tbl_users.password FROM tbl_users WHERE tbl_users.id = '$id'";
$result = mysqli_query($con, $sql); // select query
$data = mysqli_fetch_array($result);
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit User Profile</h1>

        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Edit User Profile</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form" action="../db_page/_user_profile_update.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group" id="unique_id_div" hidden="">
                                    <label >Unique ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="u_id" id="u_id" value="<?php echo $id; ?>" readonly="">
                                    <span id="u_id_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="first_name_div">
                                    <label >First Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="first_name" id="first_name" value="<?php echo $data[1]; ?>" required="">
                                    <span id="first_name_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="last_name_div">
                                    <label >Last Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="last_name" id="last_name" value="<?php echo $data[2]; ?>" required="">
                                    <span id="last_name_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="email_div">
                                    <label >Email Address<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="email" id="email" value="<?php echo $data[3]; ?>" required="" onclick="input_remove_error_notification('email');">
                                    <span id="email_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group" id="username_div">
                                    <label >Username<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="username" id="username" value="<?php echo $data[4]; ?>" required="" onclick="input_remove_error_notification('username');">
                                    <span id="username_check" class="help-block"></span>
                                </div>
                                <div class="form-check" id="password_reset_div">
                                  <input class="form-check-input" type="radio" name="password_reset" id="password_reset">
                                  <label class="form-check-label" for="flexRadioDefault2">
                                    Do you want change password?
                                </label>
                                </div>
                                <div class="form-group" id="password_div" hidden="">
                                    <label >Password<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="password" id="password" value="<?php echo decrypt($data[5]); ?>" required="">
                                    <span id="password_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Update" id="btn_update">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/home/index';">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_profile_update.js" type="text/javascript"></script>
