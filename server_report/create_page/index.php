<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Create Server</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/server_report/index_page/index"><i class="fa fa-server"></i> Server Report</a></li>
            <li><a class="active">Create Server</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form">
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
                                    <label>Account Number<span class="required text-red">*</span></label>
                                    <select class="form-control" id="account" name="account" required="">
                                        <option value="">--Please Select --</option>

                                    </select>
                                    <span id="account_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="type_div">
                                    <label>Server Type<span class="required text-red">*</span></label>
                                    <select class="form-control" id="server_type" name="server_type" required="">
                                        <option value="">--Please Select --</option>
                                        <?php
                                        $query2 = "SELECT id,server_type FROM tbl_server_type ORDER BY server_type ASC";

                                        if ($result2 = $con->query($query2)) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row2['id'] ?>"><?= strtoupper($row2['server_type']) ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span id="server_type_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >Server Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="server_name" id="server_name" required="" >
                                    <span id="server_name_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >IP Address<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="ip_address" id="ip_address" required="">
                                    <span id="ip_address_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >User Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="username" id="username" required="">
                                    <span id="username_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >Password<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="password" id="password" required="">
                                    <span id="password_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="box-body">
                                <div class="form-group " id="exp_date_div">
                                    <label>Expiration Date [YYYY-MM-DD]</label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" id="exp_date" name="exp_date" value="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group" id="domain_name_div">
                                    <label >Application</label>
                                    <input type="text" class="form-control"  name="application" id="application">
                                    <span id="application_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >purpose</label>
                                    <textarea class="form-control" rows="5" id="purpose" name="purpose" maxlength="150"></textarea>
                                    <span id="purpose_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >Specification</label>
                                    <textarea class="form-control" rows="5" id="spec" name="spec" maxlength="150"></textarea>
                                    <span id="spec_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >Remarks</label>
                                    <textarea class="form-control" rows="5" id="remarks" name="remarks" maxlength="150"></textarea>
                                    <span id="remarks_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Create" id="create_server_button" name="create_server_button">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location='/server_report/index_page/index';">Cancel</button>
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
<script src="../jquery/_create_server.js" type="text/javascript"></script>
<script src="../jquery/_common.js" type="text/javascript"></script>