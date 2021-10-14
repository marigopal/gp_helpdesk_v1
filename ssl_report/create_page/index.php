<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Create SSL Product </h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a class="active">Create SSL Product</a></li>
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
                                <div class="form-group " id="account_div" >
                                    <label>Account Number<span class="required text-red">*</span></label>
                                    <select class="form-control" id="account" name="account" required="">
                                        <option value="">--Please Select --</option>

                                    </select>
                                    <span id="account_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Purchased On<span class="required text-red">*</span></label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" id="purchase_on" name="purchase_on" value="" required="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                    <span id="purchase_on_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="contact_no_div">
                                    <label>SSL ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="ssl_id" id="ssl_id" required="">
                                    <span id="ssl_id_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="">
                                    <label>Order ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="order_id" id="order_id" required="">
                                    <span id="order_id_check" class="help-block"></span>
                                </div> 
                                <div class="form-group " id="">
                                    <label>CA Order ID<span class="required text-red">*</span></label>
                                    <input type="text" class="form-control"  name="ca_order_id" id="ca_order_id" required="">
                                    <span id="ca_order_id_check" class="help-block"></span>
                                </div>
                               
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-body">
                                <div class="form-group " >
                                    <label>Product List<span class="required text-red">*</span><a style="padding-left: 10px;"><i class="fa fa-plus-circle"></i></a></label>
                                    <select class="form-control" id="product_list" name="product_list" required="">
                                        <option value="">--Please Select --</option>
                                        <?php
                                        $query2 = "SELECT product_uid ,product_name FROM `tbl_ssl_product` ORDER BY product_name ASC";

                                        if ($result2 = $con->query($query2)) {
                                            while ($row2 = $result2->fetch_assoc()) {
                                                ?>
                                                <option value="<?= $row2['product_uid'] ?>"><?= strtoupper($row2['product_name']) ?></option>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <span id="product_list_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="account_div" >
                                    <label>Product Expires (Validity)<span class="required text-red">*</span></label>
                                    <select class="form-control dropdown_number_years" id="product_expires" name="product_expires" required="">
                                        <option value="">--Please Select --</option>

                                    </select>
                                    <span id="product_expires_check" class="help-block"></span>
                                </div>
                                <div class="form-group " >
                                    <label>Number Of Domain<span class="required text-red">*</span></label>
                                    <select class="form-control dropdown_number" id="no_of_domnain" name="no_of_domnain" required="">
                                        <option value="">--Please Select --</option>

                                    </select>
                                    <span id="no_of_domnain_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="contact_no_div" hidden="">
                                    <label>Expiration Date</label>
                                    <div class="input-group date" data-provide="datepicker">
                                        <input type="text" class="form-control" id="expiration_date" name="expiration_date" value="">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                    </div>
                                    <span id="expiration_date_check" class="help-block"></span>
                                </div>
                                <div class="form-group " id="" hidden="">
                                    <label>Admin Mail</label>
                                    <input type="text" class="form-control"  name="email" id="email">
                                    <span id="email_check" class="help-block"></span>
                                </div>
                                 <div class="form-group" id=remarks_div_">
                                    <label >Remarks</label>
                                    <textarea class="form-control" rows="5" id="remarks" name="remarks" maxlength="150"></textarea>
                                    <span id="remarks_check" class="help-block"></span>
                                </div>
                                <div class="form-group pull-right">
                                    <input class="btn btn-success" type="submit" value="Create" id="create_ssl_button" name="create_ssl_button">
                                    <button type="button" class="btn btn-danger" onclick="javascript:window.location = '/ssl_report/index_page/index';">Cancel</button>
                                </div>                            </div>
                        </div>
                        
                    </div>
                    
                </div>
        </form>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_create_ssl_product_list.js" type="text/javascript"></script>
<script src="../jquery/_common.js" type="text/javascript"></script>
