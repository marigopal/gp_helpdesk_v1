<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Create Vendor List</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Create Vendor</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form" action="../db_page/_insert_vendor" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group " id="vendor_div">
                                    <label>Vendor<span class="required text-red">*</span></label>
                                    <select class="form-control" id="vendor" name="vendor" required="">
                                        <option value="">--Please Select --</option>
                                        <?php
                                        $query2 = "SELECT id,name FROM `tbl_vendor` ORDER BY name ASC";

                                        if ($result2 = $con->query($query2)) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row2['id'] ?>"><?= strtoupper($row2['name']) ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span id="vendor_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="account_div">
                                    <label>Account Number</label>
                                    <input type="text" class="form-control"  name="account_no" id="account_no" value="" readonly="" onclick="input_remove_error_notification('account_no');">
                                    <span id="account_no_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control"  name="mob_no" id="mob_no" value="">
                                    <span id="mobile_check" class="help-block"></span>
                                </div> 
                                <div class="form-group " id="">
                                    <label>Email ID</label>
                                    <input type="text" class="form-control"  name="email" id="email" value="" onclick="input_remove_error_notification('email');">
                                    <span id="email_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Username<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="username" id="username" required="" readonly="">
                                    <span id="username_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Password<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="password" id="password" value="" required="" readonly="">
                                    <span id="password_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group " id="">
                                    <label>Service Used</label>
                                    <input type="text" class="form-control"  name="service_used" id="service_used" value="<?php echo $data[9]; ?>">
                                    <span id="service_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >Authendication</label>
                                    <textarea class="form-control" rows="5" id="authendication" name="authendication" maxlength="150" ><?php echo $data[10]; ?></textarea>
                                    <span id="authendication_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >Remarks</label>
                                    <textarea class="form-control" rows="5" id="remarks" name="remarks" maxlength="150" ><?php echo $data[11]; ?></textarea>
                                    <span id="remarks_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Create" id="create_account_button" name="create_account_button">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/account/index';">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
</div>
</section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_create_vendor.js" type="text/javascript"></script>