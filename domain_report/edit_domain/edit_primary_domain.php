<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);
$sql = "SELECT tbl_domain.id,tbl_domain.vendor,tbl_vendor.id,tbl_vendor.name, tbl_domain.account,tbl_account.id,tbl_account.username,tbl_domain.expiredate,tbl_domain.domain_autorenewal,tbl_autorenewal.id,tbl_autorenewal.autorenewal,tbl_domain.domainname,tbl_domain.remarks,tbl_domain.point_to from tbl_domain INNER JOIN tbl_vendor on tbl_vendor.id=tbl_domain.vendor INNER JOIN tbl_account ON tbl_account.id = tbl_domain.account INNER JOIN tbl_autorenewal on tbl_autorenewal.id = tbl_domain.domain_autorenewal and tbl_domain.id = '$id'";
$result = mysqli_query($con, $sql); // select query
$data = mysqli_fetch_array($result);
?>
<div class="content-wrapper">
    <div class="alert alert-success" hidden="" id="alert_notification">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
    <section class="content-header">
        <h1>Edit Primary Domain</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/domain_report/index_page/index"><i class="fa fa-dashboard"></i> Primary Domain Report</a></li>
            <li><a class="active">Edit Domain</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group" id="unique_id" hidden="">
                                    <label >Unique ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="u_id" id="u_id" value="<?php echo $data[0]; ?>" readonly="">
                                    <span id="sub_domain_name_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >Domain Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="domain_name" id="domain_name" value="<?php echo $data[11] ?>" required="" readonly="">
                                    <span id="domain_name_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="point_to_div">
                                    <label >Point To<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="point_to" id="point_to" value="<?php echo $data[13] ?>" required="">
                                    <span id="point_to_check" class="help-block"></span>
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
                                    <label>Account Number<span class="required text-red">*</span></label>
                                    <select class="form-control" id="account" name="account" required="">
                                        <option value="<?php echo $data[5]; ?>"><?php echo $data[6]; ?></option>
                                    </select>
                                    <span id="account_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="box-body">
                                <div class="form-group " id="exp_date_div">
                                    <label>Expiration Date [YYYY-MM-DD]<span class="required text-red">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" id="exp_date" name="exp_date" value="<?php echo $data[7]; ?>" required="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group " id="auto_renewal_div">
                                    <label>Auto Renewal<span class="required text-red">*</span></label>
                                    <select class="form-control" id="auto_renewal_add" name="auto_renewal_add" required="">
                                        <option value="<?php echo $data[9]; ?>"><?php echo $data[10]; ?></option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                    <span id="auto_renewal_add_check" class="help-block"></span>
                                </div>

                                <div class="form-group">
                                    <label >Remarks<span class="required text-red">*</span></label>
                                    <textarea class="form-control" rows="5" id="remarks" name="remarks" maxlength="150" ><?php echo $data[12]; ?></textarea>
                                    <span id="remarks_check" class="help-block"></span>
                                </div>

                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Update" id="update_button" name="update_button">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/domain_report/index_page/index';">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_common.js" type="text/javascript"></script>
<script src="../jquery/_edit_domain.js" type="text/javascript"></script>