<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);
$sql = "SELECT tbl_account.id,tbl_account.vendor,tbl_vendor.id,tbl_vendor.name,tbl_account.accountno,tbl_account.mobileno,tbl_account.email,tbl_account.username,tbl_account.password,tbl_account.service_used,tbl_account.authendication,tbl_account.remarks,tbl_account.status,tbl_accountstatus.id,tbl_accountstatus.statusname from tbl_account INNER JOIN tbl_vendor on tbl_vendor.id = tbl_account.vendor INNER JOIN tbl_accountstatus on tbl_accountstatus.id = tbl_account.status and tbl_account.id ='$id'";
$result = mysqli_query($con, $sql); // select query
$data = mysqli_fetch_array($result);
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Vendor List</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Edit Vendor</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group" id="unique_id" hidden=" " >
                                    <label >Unique ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="id" id="id" value="<?php echo $id; ?>">
                                    <span id="id_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="vendor_div">
                                    <label>Vendor<span class="required text-red">*</span></label>
                                    <select class="form-control" id="vendor" name="vendor" required="">
                                        <option value="<?php echo $data[2]; ?>"><?php echo $data[3]; ?></option>
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
                                    <input type="text" class="form-control"  name="account_no" id="account_no" value="<?php echo $data[4]; ?>" onclick="input_remove_error_notification('account_no')">
                                    <span id="account_no_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Mobile Number</label>
                                    <input type="text" class="form-control"  name="mob_no" id="mob_no" value="<?php echo $data[5]; ?>">
                                    <span id="mobile_check" class="help-block"></span>
                                </div> 
                                <div class="form-group " id="">
                                    <label>Email ID</label>
                                    <input type="text" class="form-control"  name="email_id" id="email_id" value="<?php echo $data[6]; ?>" onkeyup="input_remove_error_notification('email_id');">
                                    <span id="email_id_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Username<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="username" id="username" value="<?php echo $data[7]; ?>" onclick="input_remove_error_notification('username')">
                                    <span id="username_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Password<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="password" id="password" value="<?php echo decrypt($data[8]); ?>">
                                    <span id="password_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group " id="">
                                    <label>Service Used</label>
                                    <input type="text" class="form-control"  name="service_used" id="service_used" value="<?php echo $data[9]; ?>">
                                    <span id="service_used_check" class="help-block"></span>
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
                                    <input class="btn btn-success" type="submit" value="Update" id="update_button" name="update_button">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/vendor_report/index_page/index';">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_edit_vendor.js" type="text/javascript"></script>
