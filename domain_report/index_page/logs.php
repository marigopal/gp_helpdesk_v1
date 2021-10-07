<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>Domain Logs</h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/domain/index">Domain Dashboard</a></li>
            <li class="active">Logs</li>
        </ol>
    </section>
    <?php include ('domain_widget_page.php'); ?>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <?php
                        $logs_button = "SELECT tbl_domain_log.domain_status,tbl_domainstatus.id,tbl_domainstatus.status from tbl_domain_log INNER JOIN tbl_domainstatus on tbl_domainstatus.id = tbl_domain_log.domain_status GROUP by tbl_domain_log.domain_status";
                if ($logs_button_result = $con->query($logs_button)) {
                    while ($logs_button_row = $logs_button_result->fetch_assoc()) {
                        $field1 = encrypt($logs_button_row['id']);
                        ?>  
                        <li><a href="/domain_report/index_page/logs?filter=<?php echo $field1; ?>"><?php echo $logs_button_row['status']; ?></a></li>
                       <?php
                    }
                }
                ?>
                    </ul>
                </div>
                
                
                <div class="box ">
                    <div class="box-header bg-green-active">
                        <a onclick="exportexcel('logs_table', 'Domain_logs_report')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <form name="frmUser" method="post" action="">
                            <table class="table table-hover" style="padding-bottom: 50px;" id="logs_table">
                                <thead>
                                    <?php
                                    if (isset($_GET['filter'])) {
                                        $filter = $_GET['filter'];
                                        $filter = decrypt($filter);
                                    }
                                    ?>
                                    <tr>
                                        <th>Sl No</th>
                                        <th hidden="">Unique ID</th>
                                        <th>Vendor</th>
                                        <th>Account Number</th>
                                        <th>Type</th>
                                        <th>Domain</th>
                                        <th>Sub Domain</th>
                                        <th>Expiration Date</th>
                                        <th>Auto-renew</th>
                                        <th>
                                            <?php
                                            if ($filter == '4') {
                                                echo "Next Expiration Date";
                                            } else if ($filter == '3') {
                                                echo "Deleted Date";
                                            } else if ($filter == '5') {
                                                echo "Created Date";
                                            } else {
                                                echo "Next Expiration Date";
                                            }
                                            ?>
                                        </th>
                                        <th>Status</th>
                                        <th>Done By</th>
                                        <th>Done On</th>
                                    </tr>
                                </thead>
                                <tbody id="_logs_domain_report">

                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include ('../../include/footer.php'); ?>
<script src="../jquery/_logs.js" type="text/javascript"></script>
