<?php
include ("../../include/menu/menu.php");
?>

<div class="content-wrapper">
    <div class="alert alert-success" hidden="" id="alert_notification">
    <strong>Success!</strong> This alert box could indicate a successful or positive action.
  </div>
    <section class="content-header">
        <h1>Create Domain</h1>
        <ol class="breadcrumb">
            <li><a href="/dashboard_it//index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Create Domain</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
                <div class="col-md-12">
                    <form name="_create_primary_domain_form" action="">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group ">
                                    <label>Domain Type<span class="required text-red">*</span></label>
                                    <select class="form-control" id="type" name="type" required="">
                                        <option value="">--Please Select --</option>
                                        <?php
                                        $query2 = "SELECT * FROM `tbl_domaintype`";
                                        if ($result2 = $con->query($query2)) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row2['id'] ?>"><?= strtoupper($row2['domaintype']) ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span id="type_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="domain_list_div" hidden="">
                                    <label>Domain List<span class="required text-red">*</span></label>
                                    <select class="form-control" id="domain_list" name="domain_list">
                                        <option value="">--Please Select --</option>
                                        <?php
                                        $query2 = "SELECT id, domainname FROM `tbl_domain` WHERE domain_status = '1' GROUP BY `domainname` ORDER BY domainname ASC";

                                        if ($result2 = $con->query($query2)) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row2['domainname'] ?>"><?= strtoupper($row2['domainname']) ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span id="domain_list_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div" hidden="">
                                    <label >Domain Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="domain_name" id="domain_name"  onclick="input_remove_error_notification('domain_name');">
                                    <span id="domain_name_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="host_div" hidden="">
                                    <label >Host<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="host" id="host" required="" onclick="input_remove_error_notification('host');">
                                    <span id="host_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="point_to_div" hidden="">
                                    <label >Point To<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="point_to" id="point_to"  required="">
                                    <span id="point_to_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="vendor_div" hidden="">
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
                                <div class="form-group " id="account_div" hidden="">
                                    <label>Account Number<span class="required text-red">*</span></label>
                                    <select class="form-control" id="account" name="account" required="">
                                        <option value="">--Please Select --</option>

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
                                        <input type="text" class="form-control" id="exp_date" name="exp_date" value="" required="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group " id="auto_renewal_div">
                                    <label>Auto Renewal<span class="required text-red">*</span></label>
                                    <select class="form-control" id="auto_renewal_add" name="auto_renewal_add" required="">
                                        <option value="">--Please Select --</option>
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                    <span id="auto_renewal_add_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >Remarks<span class="required text-red">*</span></label>
                                    <textarea class="form-control" rows="5" id="remarks" name="remarks" maxlength="150"></textarea>
                                    <span id="remarks_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Create" id="create_domain_button" name="create_domain_button">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/domain_report/index_page/index';">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_create_primary_domain.js" type="text/javascript"></script>
<script src="../jquery/_common.js" type="text/javascript"></script>