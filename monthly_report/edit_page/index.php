<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);
$sql = "SELECT tbl_monthly_list.id,tbl_monthly_list.vendor,tbl_vendor.id,tbl_vendor.name,tbl_vendor.web_link,tbl_monthly_list.billed_for,tbl_monthly_list.payment_method,tbl_payment_method.payment_uid,tbl_payment_method.payment_vendor,tbl_monthly_list.expiration_date,tbl_monthly_list.status_id,tbl_montly_status.status_uid,tbl_montly_status.status_name FROM tbl_monthly_list INNER JOIN tbl_vendor on tbl_vendor.id = tbl_monthly_list.vendor INNER JOIN tbl_payment_method on tbl_payment_method.payment_uid = tbl_monthly_list.payment_method INNER JOIN tbl_montly_status on tbl_montly_status.status_uid = tbl_monthly_list.status_id AND tbl_monthly_list.status_id != '3' AND tbl_monthly_list.id = '$id'";

$result = mysqli_query($con, $sql); // select query
$data = mysqli_fetch_array($result);
?>
<div class="content-wrapper">
    <div class="alert alert-success" hidden="" id="alert_notification">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
    <section class="content-header">
        <h1>Edit Monthly Renewals</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="../index_page/index"><i class="fa fa-dashboard"></i> Monthly Renewals Report</a></li>
            <li><a class="active">Edit Monthly Renewals</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form" action="">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                            <div class="form-group" id="unique_id">
                                    <label >Unique ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="u_id" id="u_id" value="<?php echo $data[0]; ?>" readonly="">
                                    <span id="sub_domain_name_check" class="help-block"></span>
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
                                    <label>Billed For</label>
                                    <textarea class="form-control" rows="5" id="billed_for" name="billed_for" maxlength="150" required="" ><?php echo $data[5]; ?></textarea>
                                    <span id="billed_for_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="vendor_div">
                                    <label>Payment Method<span class="required text-red">*</span></label>
                                    <select class="form-control" id="payment_method" name="payment_method" required="">
                                    <option value="<?php echo $data[7]; ?>"><?php echo $data[8]; ?></option>
                                        <?php
                                        $query2 = "SELECT * FROM `tbl_payment_method`";

                                        if ($result2 = $con->query($query2)) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row2['payment_uid'] ?>"><?= strtoupper($row2['payment_vendor']) ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span id="payment_method_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="exp_date_div">
                                    <label>Expiration Date [YYYY-MM-DD]<span class="required text-red">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" id="exp_date" name="exp_date" value="<?php echo $data[9]; ?>" required="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Update" id="update_monthly_renewals" name="update_monthly_renewals">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/monthly_report/index_page/index';">Cancel</button>
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
<script src="../jquery/_edit.js" type="text/javascript"></script>