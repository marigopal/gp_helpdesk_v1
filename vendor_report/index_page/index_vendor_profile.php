<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Vendor Profile List</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Vendor Profile</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box ">
                    <div class="box-header bg-green-active">
                        <a href="/vendor_report/create_vendor/index"><img src="/img/icons8-add-row-52.png" alt="Smiley face" height="25" width="25" data-toggle="modal" data-target="#new_users" title="New"></a>
                        <a onclick="exportexcel('vendor_account_list', 'vendor_account_list')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <form name="frmUser" method="post" action="">
                            <table class="table table-hover" style="padding-bottom: 50px;" id="vendor_account_list">
                                <thead>
                                    <tr>
                                        <th>Sl No</th>
                                        <th hidden="">Unique ID</th>
                                        <th>Vendor Name</th>
                                        <th>Contact Number</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="_index_vendor_profile_report">

                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_index_vendor_profile_list.js" type="text/javascript"></script>