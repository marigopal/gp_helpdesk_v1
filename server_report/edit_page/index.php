
<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);

$sql = "SELECT tbl_server.id,tbl_server.vendor,tbl_vendor.id,tbl_vendor.name,tbl_server.account_no,tbl_account.id,tbl_account.accountno,tbl_server.server_type,tbl_server_type.id,tbl_server_type.server_type,tbl_server.server_name,tbl_server.server_ip,tbl_server.username,tbl_server.password,tbl_server.expiration_date,tbl_server.application,tbl_server.purpose,tbl_server.spec,tbl_server.remarks FROM tbl_server INNER JOIN tbl_vendor on tbl_vendor.id = tbl_server.vendor INNER JOIN tbl_account on tbl_account.id = tbl_server.account_no INNER JOIN tbl_server_type on tbl_server_type.id = tbl_server.server_type and tbl_server.id = '$id'";
$result = mysqli_query($con,$sql); // select query
$data = mysqli_fetch_array($result); 
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Server</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/server_report/index_page/index"><i class="fa fa-server"></i>Server List</a></li>
            <li><a class="active">Edit Server</a></li>
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
                                    <label>Account Number<span class="required text-red">*</span></label>
                                    <select class="form-control" id="account" name="account" value="" required="">
                                        <option value="<?php echo $data[5]; ?>"><?php echo $data[6]; ?></option>

                                    </select>
                                    <span id="account_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="type_div">
                                    <label>Server Type<span class="required text-red">*</span></label>
                                    <select class="form-control" id="server_type" name="server_type" required="">
                                        <option value="<?php echo $data[8]; ?>"><?php echo $data[9]; ?></option>
                                        <?php
                                        $current_server_type = $data['8'];
                                        $query2 = "SELECT id,server_type FROM tbl_server_type where id != '$current_server_type' ORDER BY server_type ASC";

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
                                    <input type="text" class="form-control"  name="server_name" id="server_name" value="<?php echo $data[10]; ?>" >
                                    <span id="server_name_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >IP Address<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="ip_address" id="ip_address"  value="<?php echo $data[11]; ?>">
                                    <span id="ip_address_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >User Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="username" id="username" value="<?php echo $data[12]; ?>"  >
                                    <span id="username_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >Password<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="password" id="password" value="<?php echo decrypt($data[13]); ?>" >
                                    <span id="password_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="box-body">
                                <div class="form-group " id="exp_date_div">
                                    <label>Expiration Date [YYYY-MM-DD]<span class="required text-red">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" id="exp_date" name="exp_date" value="<?php echo $data[14]; ?>" required="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group" id="domain_name_div">
                                    <label >Application<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="application" id="application" value="<?php echo $data[15]; ?>" >
                                    <span id="application_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >purpose<span class="required text-red">*</span></label>
                                    <textarea class="form-control" rows="5" id="purpose" name="purpose" maxlength="150"><?php echo $data[16]; ?></textarea>
                                    <span id="purpose_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >Specification<span class="required text-red">*</span></label>
                                    <textarea class="form-control" rows="5" id="spec" name="spec" maxlength="150"><?php echo $data[17]; ?></textarea>
                                    <span id="spec_check" class="help-block"></span>
                                </div>
                                <div class="form-group">
                                    <label >Remarks<span class="required text-red">*</span></label>
                                    <textarea class="form-control" rows="5" id="remarks" name="remarks" maxlength="150"><?php echo $data[18]; ?></textarea>
                                    <span id="remarks_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Update" id="update_server_button" name="update_server_button">
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
<script src="../jquery/_common.js" type="text/javascript"></script>
<script src="../jquery/_edit_server.js" type="text/javascript"></script>