<?php
include ("../../include/menu/menu.php");
$id = decrypt($_GET['id']);
$sql = "SELECT id,type,domainname,host,point_to,remarks from tbl_domain where id = '$id'";
$result = mysqli_query($con, $sql); // select query
$data = mysqli_fetch_array($result);
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Sub Domain</h1>
        <ol class="breadcrumb">
            <li><a href="/dashboard_it//index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Create Domain</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form" >
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group" id="unique_id_div" hidden="">
                                    <label >Unique ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="id" id="id" value="<?php echo $data[0]; ?>" readonly="">
                                    <span id="uid_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="type_div" hidden="">
                                    <label >Type<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="type" id="type" value="<?php echo $data[1] ?>"  readonly="">
                                    <span id=type_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="domain_name_div">
                                    <label >Domain Name<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="domain_name" id="domain_name" value="<?php echo $data[2] ?>"  readonly="">
                                    <span id=domain_name_check" class="help-block"></span>
                                </div>

                                <div class="form-group" id="subdomain_name_div">
                                    <label >Host<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="host" id="host" value="<?php echo $data[3] ?>" >
                                    <span id="host_check" class="help-block"></span>
                                </div>
                                <div class="form-group" id="subdomain_name_div">
                                    <label >Point To<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="point_to" id="point_to" value="<?php echo $data[4] ?>" >
                                    <span id="point_to_check" class="help-block"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group">
                                    <label >Remarks<span class="required text-red">*</span></label>
                                    <textarea class="form-control" rows="5" id="remarks" name="remarks" maxlength="150" ><?php echo $data[5]; ?></textarea>
                                    <span id="remarks_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Update" id="subdomain_update_button" name="subdomain_update_button">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/domain_report/index_page/index_sub_records';">Cancel</button>
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
<script src="../jquery/_edit_subdomain.js" type="text/javascript"></script>