<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Sub Domain Records Dashboard</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/domain_report/index_page/index"><i class="fa fa-dashboard"></i> Domain Dashbaord</a></li>
            <li class="active">Sub Domain Dashbaord</li>
        </ol>
    </section>
    <?php include ('domain_widget_page.php'); ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box ">
                    <div class="box-header bg-green-active">
                        <a href="/domain_report/create_domain/index"><img src="/img/icons8-add-row-52.png" alt="Smiley face" height="25" width="25" title="New"></a>
                        <a    onclick="exportexcel('sub_domain_records_table', 'sub_domain_records')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" style="padding-bottom: 50px;" id="sub_domain_records_table">
                            <thead>
                                <tr>
                                    <th>Sl No</th>
                                    <th hidden="">Unique ID</th>
                                    <th>Record</th>
                                    <th>Domain</th>
                                    <th>Host</th>
                                    <th>Point To</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="_sub_domain_records">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_index_subdomain_records.js" type="text/javascript"></script>
