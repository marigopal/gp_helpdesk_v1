<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);
$sql = "SELECT * FROM `tbl_vendor` WHERE `id` = '$id'";
$result = mysqli_query($con, $sql); // select query
$data = mysqli_fetch_array($result);
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Vendor Profile</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/vendor_report/index_page/index_vendor_profile.php"><i class="fa fa-dashboard"></i> Vendor Profile List</a></li>
            <li><a class="active">Edit Vendor Profile</a></li>
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
                                    <input type="text" class="form-control"  name="vendor" id="vendor" value="<?php echo $data[1]; ?>" onkeyup="input_remove_error_notification('vendor');">
                                    <span id="vendor_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="contact_no_div">
                                    <label>Contact Number</label>
                                    <input type="text" class="form-control"  name="contact_no" id="contact_no" value="<?php echo $data[2]; ?>" onkeyup="input_remove_error_notification('contact_no');">
                                    <span id="contact_no_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Email Address</label>
                                    <input type="text" class="form-control"  name="email" id="email" value="<?php echo $data[3]; ?>" onkeyup="input_remove_error_notification('email');">
                                    <span id="email_check" class="help-block"></span>
                                </div> 
                                <div class="form-group " id="">
                                    <label>Address</label>
                                    <textarea class="form-control" rows="5" id="address" name="address" maxlength="150" ><?php echo $data[4]; ?></textarea>
                                    <span id="address_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Web Site</label>
                                    <textarea class="form-control" rows="5" id="web_site" name="web_site" maxlength="150" ><?php echo $data[5]; ?></textarea>
                                    <span id="web_site_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Update" id="vendor_profile_update" name="vendor_profile_update">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/vendor_report/index_page/index_vendor_profile';">Cancel</button>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
        </form>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_edit_vendor_profile.js" type="text/javascript"></script>
<script src="../jquery/_common_vendor_profile.js" type="text/javascript"></script>