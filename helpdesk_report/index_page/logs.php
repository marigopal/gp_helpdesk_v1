<?php
include ("../../include/menu/menu.php");
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Helpdesk Log Report
        </h1>
        <ol class="breadcrumb">
            <li><a href="/home/index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/helpdesk_report/index"><i class="fa fa-book"></i> Helpdesk Report</a></li>
            <li><a class="active""><i class="fa fa-history"></i> Logs Report</a></li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header bg-green-active">
                        <a href="../create_ticket/index"><img src="/img/icons8-add-row-52.png" alt="Smiley face" height="25" width="25" title="New"></a>
                        <a onclick="exportexcel('logs_ticket_table', 'ticket-log-report')"><img src="/img/icons8-xls-export-52.png" alt="Smiley face" height="25" width="25" title="Export to Excel" id="btnExport"></a>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover" style="padding-bottom: 50px;" id="logs_ticket_table">
                            <thead>
                                <?php
                                if (isset($_GET['filter'])) {
                                    $filter = $_GET['filter'];
                                    $filter = decrypt($filter);
                                }
                                ?>
                                <tr>
                                    <th>Sl No</th>
                                    <th>Ticket ID</th>
                                    <th>Status</th>
                                    <th>Done By</th>
                                    <th>Done on</th>
                                    

                                </tr>
                            </thead>
                            <tbody id="_logs_ticket_report">
                                <!--     
                                File path - viewlist_page/_index_ticket_viewlist.php
                                -->
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