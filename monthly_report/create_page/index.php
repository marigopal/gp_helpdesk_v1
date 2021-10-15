<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Create Monthly Renewals</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Create Monthly Renewals</a></li>
        </ol>
    </section>
    <section class="content">
        <form id="form" action="">
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
                                    <label>Billed For</label>
                                    <textarea class="form-control" rows="5" id="billed_for" name="billed_for" maxlength="150" required="" ></textarea>
                                    <span id="billed_for_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="vendor_div">
                                    <label>Payment Method<span class="required text-red">*</span></label>
                                    <select class="form-control" id="payment_method" name="payment_method" required="">
                                        <option value="">--Please Select --</option>
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
                                        <input type="text" class="form-control" id="exp_date" name="exp_date" value="" required="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                </div> 
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Create" id="create_monthly_renewals" name="create_monthly_renewals">
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
<script src="../jquery/_create.js" type="text/javascript"></script>
